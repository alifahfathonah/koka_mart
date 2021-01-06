<?php class M_checkout extends CI_Model
{
    public function id_pemesanan()
    {
        $this->db->select('RIGHT(penjualan.penjualan_id,2) as id', false);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('penjualan'); //cek dulu apakah ada sudah ada kode di tabel.

        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia
            $data = $query->row();
            $kode = intval($data->id) + 1;
        } else {
            $kode = 1; //cek jika kode belum terdapat pada table
        }

        $tgl = date('dmY');
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "TR" . $tgl . $batas; //format kode
        return $kodetampil;
    }

    public function addData()
    {
        $ongkir = (explode("|", $this->input->post('layanan_ongkir', true)));
        $hasil = $ongkir['2'] + $this->input->post('penjualan_keranjang_total');

        $data = [
            'penjualan_id' => htmlspecialchars($this->input->post('penjualan_id', true)),
            'penjualan_penerima' => htmlspecialchars($this->input->post('penjualan_penerima', true)),
            'penjualan_email' => htmlspecialchars($this->input->post('penjualan_email', true)),
            'penjualan_telp' => htmlspecialchars($this->input->post('penjualan_telp', true)),
            'penjualan_alamat' => htmlspecialchars($this->input->post('penjualan_alamat', true)).' - '.$ongkir['3'].' - '.$ongkir['4'],
            'penjualan_keranjang_total' => htmlspecialchars($this->input->post('penjualan_keranjang_total', true)),
            'penjualan_kurir' => $ongkir['0'],
            'penjualan_layanan' => $ongkir['1'],
            'penjualan_biaya' => $ongkir['2'],
            'penjualan_total' => $hasil,
            'penjualan_tgl' => date('Y-m-d H:i:s')
        ];

        foreach ($this->cart->contents() as $p) {
            $dt = array(
                'pdetail_penjualan_id' => htmlspecialchars($this->input->post('penjualan_id', true)),
                'pdetail_produk_id' => $p['id'],
                'pdetail_jumlah' => $p['qty'],
                'pdetail_subtotal' => $p['subtotal']
            );
            $this->db->insert('penjualan_detail', $dt);
        };

        $this->db->insert('penjualan', $data); // query untuk insert data ke tabel barang
        
    }

}
<?php class M_penjualan extends CI_Model
{
    public function getAll()
    {
        $this->db->from('penjualan');
        $this->db->join('pembayaran', 'penjualan.penjualan_id = pembayaran.pembayaran_penjualan_id', 'left');
        $this->db->where('penjualan_status', 'Waiting for Payment');

        $query=$this->db->get();
        return $query;
    }

    public function dtl($id)
    {
        $this->db->join('penjualan_detail', 'penjualan_detail.pdetail_penjualan_id = penjualan.penjualan_id', 'left');
        $this->db->join('pembayaran', 'penjualan.penjualan_id = pembayaran.pembayaran_penjualan_id', 'left');
        $this->db->join('produk', 'penjualan_detail.pdetail_produk_id = produk.produk_id', 'left');
        $this->db->where('penjualan_id', $id);
        return $this->db->get('penjualan')->row_array();
    }

    public function rulesEdit() {
        $data=[ 
            [ 
                'field'=>'penjualan_id',
                'label'=>'ID Penjualan',
                'rules'=>'required'
            ]
            ];
        $this->form_validation->set_rules($data);
    }

    public function editData() {
        $data=[ 'penjualan_id'=>htmlspecialchars($this->input->post('penjualan_id', true)),
                'penjualan_status'=>htmlspecialchars($this->input->post('penjualan_status', true))

        ];
        $this->db->where('penjualan_id', $this->input->post('penjualan_id'));
        $this->db->update('penjualan', $data);
    }

    public function detail($where, $table)
    {
        $this->db->join('penjualan_detail', 'penjualan_detail.pdetail_penjualan_id = penjualan.penjualan_id', 'left');
        $this->db->join('produk', 'penjualan_detail.pdetail_produk_id = produk.produk_id', 'left');

        return $this->db->get_where($table, $where);
    }

    public function deleteData($id)
    {
        //$this->db->where('jual_nofak', $id);
        //$this->db->delete('tbl_penjualan');

        $this->db->delete('penjualan', array('penjualan_id' => $id));
        $this->db->delete('penjualan_detail', array('pdetail_penjualan_id' => $id));
        $this->db->delete('pembayaran', array('pembayaran_penjualan_id' => $id));
    }

    //$kodefaktur
    public function kodefaktur()
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

        date_default_timezone_set("Asia/Jakarta");
        $tgl = date('dmyhis');
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "T" . $tgl . $batas; //format kode
        return $kodetampil;
    }
}

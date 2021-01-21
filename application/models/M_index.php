<?php class M_index extends CI_Model
{
    //BACK END

    //GET PREMIUM PRODUK

    public function getAllpremium($id = null)
    {
        $this->db->select('produk_nama');
        $this->db->select_sum('pdetail_jumlah');
        $this->db->select_sum('pdetail_subtotal');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.produk_kategori_id = kategori.kategori_id', 'left');
        $this->db->join('penjualan_detail', 'penjualan_detail.pdetail_produk_id = produk.produk_id', 'left');
        $this->db->join('penjualan', 'penjualan_detail.pdetail_penjualan_id = penjualan.penjualan_id', 'left');
        $this->db->where('kategori_nama', 'Premium');
        $this->db->where('penjualan_status', 'Arrived');

        $query = $this->db->get();
        return $query;
    }

    //GET UKM/LAINNYA PRODUK

    public function getAllukm($id = null)
    {
        $this->db->select('produk_nama');
        $this->db->select_sum('pdetail_jumlah');
        $this->db->select_sum('pdetail_subtotal');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.produk_kategori_id = kategori.kategori_id', 'left');
        $this->db->join('penjualan_detail', 'penjualan_detail.pdetail_produk_id = produk.produk_id', 'left');
        $this->db->join('penjualan', 'penjualan_detail.pdetail_penjualan_id = penjualan.penjualan_id', 'left');
        $this->db->where('kategori_nama !=', 'Premium');
        $this->db->where('penjualan_status', 'Arrived');
        

        $query = $this->db->get();
        return $query;
    }

    public function getArtikel($id = null)
    {
        $this->db->from('artikel');
        $this->db->limit(3);
        $this->db->order_by('artikel_created', 'DESC');

        if($id !=null) {
            $this->db->where('artikel_id', $id);
        }

        $query=$this->db->get();
        return $query;
    }

    //Back End
    public function hitung_produk(){
        $query = $this->db->query('SELECT COUNT(produk_id) AS tot_produk FROM produk');
        return $query->row_array();
    }

    public function hitung_terjual(){
        $query = $this->db->query('SELECT SUM(pdetail_jumlah) AS tot_terjual FROM penjualan LEFT JOIN penjualan_detail ON penjualan.penjualan_id = penjualan_detail.pdetail_penjualan_id WHERE penjualan_status="Arrived" ');
        return $query->row_array();
    }

    public function hitung_pendapatan(){
        $query = $this->db->query('SELECT SUM(penjualan_total) AS tot_pendpt FROM penjualan WHERE penjualan_status="Arrived" ');
        return $query->row_array();
    }

    public function hitung_pesanan(){
        $query = $this->db->query('SELECT COUNT(penjualan_id) AS tot_ord FROM penjualan WHERE penjualan_status="Waiting for Payment" OR penjualan_status="Process" ');
        return $query->row_array();
    }

    //FRONT END

    public function del_waiting(){
        $query = $this->db->query('DELETE FROM penjualan WHERE (DATEDIFF(CURDATE(), penjualan_tgl) > 2) AND (penjualan_status = "Waiting for Payment")');
        return $query;
    }

    public function del_reject(){
        $query = $this->db->query('DELETE FROM penjualan WHERE (DATEDIFF(CURDATE(), penjualan_tgl) > 1) AND (penjualan_status = "Rejected")');
        return $query;
    }

    public function del_cancel(){
        $query = $this->db->query('DELETE FROM penjualan WHERE (DATEDIFF(CURDATE(), penjualan_tgl) > 1) AND (penjualan_status = "Canceled")');
        return $query;
    }

    public function getPremium($id = null)
    {
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.produk_kategori_id = kategori.kategori_id', 'left');
        $this->db->where('kategori_nama', 'Premium');
        $this->db->limit(5);

        if ($id != null) {
            $this->db->where('produk_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function getUkm($id = null)
    {
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.produk_kategori_id = kategori.kategori_id', 'left');
        $this->db->where('kategori_nama !=', 'Premium');
        $this->db->limit(5);

        if ($id != null) {
            $this->db->where('produk_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function get_produk($keyword)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.produk_kategori_id = kategori.kategori_id', 'left');
        $this->db->like('produk_nama',$keyword);
        $this->db->or_like('kategori_nama',$keyword);
        return $this->db->get()->result();
    }
}
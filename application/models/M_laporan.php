<?php class M_laporan extends CI_Model
{
    public function getAll()
    {
        $this->db->from('penjualan');
        $this->db->join('pembayaran', 'penjualan.penjualan_id = pembayaran.pembayaran_penjualan_id', 'left');
        $this->db->where('penjualan_status', 'Arrived');
        $this->db->order_by('penjualan_tgl', 'DESC');

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

}

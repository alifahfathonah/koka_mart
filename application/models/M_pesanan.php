<?php class M_pesanan extends CI_Model
{
    public function get_pesanan($key_pesanan)
    {
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->where('penjualan_id',$key_pesanan);
        $this->db->or_where('penjualan_telp',$key_pesanan);
        return $this->db->get()->result();
    }

    public function dtl($id)
    {
        $this->db->join('penjualan_detail', 'penjualan_detail.pdetail_penjualan_id = penjualan.penjualan_id', 'left');
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
}
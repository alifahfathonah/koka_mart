<?php class M_customer extends CI_Model
{
    public function getAll($id = null)
    {
        $this->db->from('customer');

        if ($id != null) {
            $this->db->where('customer_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function getM()
    {
        return $this->db->get('customer')->result_array();
    }

    public function deleteData($id)
    {
        $this->db->where('customer_id', $id);
        $this->db->delete('customer');
    }
}
<?php class M_pengiriman_produk extends CI_Model {

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
	
	public function getAll($id = null) {
		$this->db->from('penjualan');
		$this->db->join('customer', 'penjualan.penjualan_customer_id = customer.customer_id', 'left');
		$this->db->join('pembayaran', 'penjualan.penjualan_id = pembayaran.pembayaran_penjualan_id', 'left');

        if ($id != null) {
            $this->db->where('penjualan_id', $id);
        }

		$this->db->where("(penjualan_status = 'Process' OR penjualan_status = 'On The Way')");

		$query=$this->db->get();
		return $query;
	}

	public function editData() {
		$data=[ 'penjualan_status'=>htmlspecialchars($this->input->post('penjualan_status', true)),
			'penjualan_kurir'=>htmlspecialchars($this->input->post('penjualan_kurir', true)),
			'penjualan_layanan'=>htmlspecialchars($this->input->post('penjualan_layanan', true)),
			'penjualan_biaya'=>htmlspecialchars($this->input->post('penjualan_biaya', true)),
			'penjualan_resi'=>htmlspecialchars($this->input->post('penjualan_resi', true))
		];
		$this->db->where('penjualan_id', $this->input->post('penjualan_id'));
		$this->db->update('penjualan', $data);
	}

	public function deleteData($id) {
		//$this->db->where('pembayaran_id', $id);
		//$this->db->delete('tbl_pembayaran');

		$this->db->delete('penjualan', array('penjualan_id' => $id));
		$this->db->delete('penjualan_detail', array('pdetail_penjualan_id' => $id));
		$this->db->delete('pembayaran', array('pembayaran_penjualan_id' => $id));
	}
}

?>
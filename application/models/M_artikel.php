<?php class M_artikel extends CI_Model {

	private $_table = "artikel";
    public $artikel_id;
	
	public function getAll($id=null) {
		$this->db->from('artikel');
		$this->db->order_by('artikel_created', 'DESC');

		if($id !=null) {
			$this->db->where('artikel_id', $id);
		}

		$query=$this->db->get();
		return $query;
	}

	public function getById($id)
    {
        return $this->db->get_where($this->_table, ["artikel_id" => $id])->row();
    }

	public function rulesNew() {
		$data=[
			[
                'field' => 'artikel_id',
                'label' => 'ID Artikel',
                'rules' => 'required|is_unique[artikel.artikel_id]'
            ],
			[ 	
				'field'=>'artikel_judul',
				'label'=>'Nama Artikel',
				'rules'=>'required'
			]
		];
		$this->form_validation->set_rules($data);
	}

	public function rulesEdit() {
		$data=[ 
			[ 
				'field'=>'artikel_id',
				'label'=>'ID Artikel',
				'rules'=>'required'
			],
			[ 
				'field'=>'artikel_judul',
				'label'=>'Nama Artikel',
				'rules'=>'required'
			]
		];
		$this->form_validation->set_rules($data);
	}

	public function kode()
    {
        $this->db->select('RIGHT(artikel.artikel_id,2) as id', false);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('artikel'); //cek dulu apakah ada sudah ada kode di tabel.

        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia
            $data = $query->row();
            $kode = intval($data->id) + 1;
        } else {
            $kode = 1; //cek jika kode belum terdapat pada table
        }

        $tgl = date('dmY');
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "A" . $tgl . $batas; //format kode
        return $kodetampil;
    }

	public function addNew() {
		$data=[
			'artikel_id' => htmlspecialchars($this->input->post('artikel_id', true)),
			'artikel_judul' => htmlspecialchars($this->input->post('artikel_judul', true)),
			'artikel_gambar' => $this->_uploadImage(),
			'artikel_deskripsi' => htmlspecialchars($this->input->post('artikel_deskripsi', true)),
			'artikel_penulis' => htmlspecialchars($this->input->post('artikel_penulis', true)),
			'artikel_created' => date('Y-m-d H:i:s')

		];
		$this->db->insert('artikel', $data);
	}

	private function _uploadImage()
    {
        $config['upload_path'] = './assets/upload/artikel/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = $this->input->post('artikel_id');
        $config['overwrite'] = true;
        $config['max_size'] = 5024; // 1MB
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '50%';
        $config['width'] = 460;
        $config['height'] = 528;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('artikel_gambar')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

	public function editData() {
		$data=[ 
			'artikel_id' => htmlspecialchars($this->input->post('artikel_id', true)),
			'artikel_judul' => htmlspecialchars($this->input->post('artikel_judul', true)),
			'artikel_deskripsi' => htmlspecialchars($this->input->post('artikel_deskripsi', true)),
			'artikel_penulis' => htmlspecialchars($this->input->post('artikel_penulis', true)),
			'artikel_update' => date('Y-m-d H:i:s')
		];
		
		$this->db->where('artikel_id', $this->input->post('artikel_id'));
		$this->db->update('artikel', $data);
	}

	public function deleteData($id) {
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array("artikel_id" => $id));
	}

	private function _deleteImage($id)
    {
        $artikel = $this->getById($id);
        if ($artikel->artikel_gambar != "default.jpg") {
            $filename = explode(".", $artikel->artikel_gambar)[0];
            return array_map('unlink', glob(FCPATH . "assets/upload/artikel/$filename.*"));
        }
    }

    //front end

    function get_artikel($limit, $start){
    	$this->db->order_by('artikel_created', 'DESC');
        $query = $this->db->get('artikel', $limit, $start);
        return $query;
    }

     function detail_artikel($where,$table){
        return $this->db->get_where($table,$where);
    }

}
?>
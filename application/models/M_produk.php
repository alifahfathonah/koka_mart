<?php class M_produk extends CI_Model
{
    //BACK END

    private $_table = "produk";
    public $produk_id;

    //GET PREMIUM PRODUK

    public function getAllpremium($id = null)
    {
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.produk_kategori_id = kategori.kategori_id', 'left');
        $this->db->where('kategori_nama', 'Premium');

        $query = $this->db->get();
        return $query;
    }

    //GET UKM/LAINNYA PRODUK

    public function getAllukm($id = null)
    {
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.produk_kategori_id = kategori.kategori_id', 'left');
        $this->db->where('kategori_nama !=', 'Premium');

        $query = $this->db->get();
        return $query;
    }

    //DEFAULT

    public function getModal()
    {
        $this->db->join('kategori', 'produk.produk_kategori_id = kategori.kategori_id', 'left');
        return $this->db->get('produk')->result_array();
    }

    public function getAll($id = null)
    {
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.produk_kategori_id = kategori.kategori_id', 'left');

        if ($id != null) {
            $this->db->where('produk_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["produk_id" => $id])->row();
    }

    public function getkategoriData()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function rulesNew()
    {
        $data = [
            [
                'field' => 'produk_id',
                'label' => 'ID Produk',
                'rules' => 'required|is_unique[produk.produk_id]'
            ],
            [
                'field' => 'produk_nama',
                'label' => 'Nama Produk',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($data);
    }

    public function rulesEdit()
    {
        $data = [
            [
                'field' => 'produk_id',
                'label' => 'ID Produk',
                'rules' => 'required'
            ],
            [
                'field' => 'produk_nama',
                'label' => 'Nama Produk',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($data);
    }

    public function rulesEditIMG()
    {
        $data = [
            [
                'field' => 'produk_id',
                'label' => 'ID produk',
                'rules' => 'required'
            ],
            [
                'field' => 'produk_nama',
                'label' => 'Nama produk',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($data);
    }

    public function kode()
    {
        $this->db->select('RIGHT(produk.produk_id,2) as id', false);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('produk'); //cek dulu apakah ada sudah ada kode di tabel.

        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia
            $data = $query->row();
            $kode = intval($data->id) + 1;
        } else {
            $kode = 1; //cek jika kode belum terdapat pada table
        }

        $tgl = date('dmY');
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "P" . $tgl . $batas; //format kode
        return $kodetampil;
    }

    public function addNew()
    {
        $data = [
            'produk_id' => htmlspecialchars($this->input->post('produk_id', true)),
            'produk_kategori_id' => htmlspecialchars($this->input->post('produk_kategori_id', true)),
            'produk_nama' => htmlspecialchars($this->input->post('produk_nama', true)),
            'produk_img' => $this->_uploadImage(),
            'produk_deskripsi' => htmlspecialchars($this->input->post('produk_deskripsi', true)),
            'produk_harga' => htmlspecialchars($this->input->post('produk_harga', true)),
            'produk_input' => date('Y-m-d H:i:s')
        ];

        $this->db->insert('produk', $data); // query untuk insert data ke tabel barang
    }

    public function editData()
    {
        $data = [
            'produk_id' => htmlspecialchars($this->input->post('produk_id', true)),
            'produk_kategori_id' => htmlspecialchars($this->input->post('produk_kategori_id', true)),
            'produk_nama' => htmlspecialchars($this->input->post('produk_nama', true)),
            'produk_deskripsi' => htmlspecialchars($this->input->post('produk_deskripsi', true)),
            'produk_harga' => htmlspecialchars($this->input->post('produk_harga', true)),
            'produk_update' => date('Y-m-d H:i:s')
        ];

        $this->db->where('produk_id', $this->input->post('produk_id'));
        $this->db->update('produk', $data);
    }

    public function editimg()
    {
        $data = [
            'produk_id' => htmlspecialchars($this->input->post('produk_id', true)),
            'produk_nama' => htmlspecialchars($this->input->post('produk_nama', true)),
            'produk_img' => $this->_uploadImage()
        ];

        $this->db->where('produk_id', $this->input->post('produk_id'));
        $this->db->update('produk', $data);
    }

    public function deleteData($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("produk_id" => $id));
    }

    private function _deleteImage($id)
    {
        $produk = $this->getById($id);
        if ($produk->produk_img != "default.jpg") {
            $filename = explode(".", $produk->produk_img)[0];
            return array_map('unlink', glob(FCPATH . "assets/upload/produk/$filename.*"));
        }
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './assets/upload/produk/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = $this->input->post('produk_id');
        $config['overwrite'] = true;
        $config['max_size'] = 5024; // 1MB
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '50%';
        $config['width'] = 460;
        $config['height'] = 528;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('produk_img')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    //FRONT END

    function dtl_premium($where,$table){
        $this->db->join('kategori', 'produk.produk_kategori_id = kategori.kategori_id', 'left');
        $this->db->where('kategori_nama', 'Premium');
        return $this->db->get_where($table,$where);
    }

    function dtl_ukm($where,$table){
        $this->db->join('kategori', 'produk.produk_kategori_id = kategori.kategori_id', 'left');
        $this->db->where('kategori_nama !=', 'Premium');
        return $this->db->get_where($table,$where);
    }

    function katalog_premium($limit, $start){
        $this->db->join('kategori', 'produk.produk_kategori_id = kategori.kategori_id', 'left');
        $this->db->where('kategori_nama', 'Premium');
        $query = $this->db->get('produk', $limit, $start);
        return $query;
    }

    function katalog_ukm($limit, $start){
        $this->db->join('kategori', 'produk.produk_kategori_id = kategori.kategori_id', 'left');
        $this->db->where('kategori_nama !=', 'Premium');
        $query = $this->db->get('produk', $limit, $start);
        return $query;
    }

}

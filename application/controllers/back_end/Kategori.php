<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    function __construct()
    {
        parent :: __construct();
        if($this->session->userdata('status') != "1520S118TK0100"){
            redirect(base_url("back_end/Authentication"));
        }
        $this->load->model("M_kategori");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['kategori']=$this->M_kategori->getAll()->result();
        $this->temp->load('back_end/partials', 'back_end/kategori/kategori', $data);
    }

    public function add()
    {
        $this->M_kategori->rulesNew();
        if ($this->form_validation->run() == false) {
            $data = [
                'page' => 'add'
            ];
            $this->temp->load('back_end/partials', 'back_end/kategori/form_kategori', $data);
        } else {
            $this->M_kategori->addNew();
            $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('back_end/Kategori');
        }
    }

    public function edit($id)
    {
        $this->M_kategori->rulesEdit();
        $query = $this->M_kategori->getAll($id);
        if ($this->form_validation->run() == false) {
            if ($query->num_rows() > 0) {
                $kategori = $query->row();
                $data = [
                    'page' => 'edit',
                    'row' => $kategori
                ];
                $this->temp->load('back_end/partials', 'back_end/kategori/form_kategori', $data);
            }
        } else {
            $post = $this->input->post(null, true);
            if (isset($_POST['edit'])) {
                $this->M_kategori->editData($post);
                $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Data!</strong> berhasil disimpan.
                    </div>');
                redirect('back_end/Kategori');
            }
        }

    }

    public function delete($id)
    {
        $this->M_kategori->deleteData($id);
        redirect('back_end/Kategori');
    }

    public function print()
    {
        $data['kategori']=$this->M_kategori->getAll()->result();
        $this->temp->load('back_end/print/partials.html', 'back_end/print/kategori.html', $data);
    }

}

/* End of file Controllername.php */

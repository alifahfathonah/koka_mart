<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ukm extends CI_Controller {

    function __construct()
    {
        parent :: __construct();
        if($this->session->userdata('status') != "1520S118TK0100"){
            redirect(base_url("back_end/Authentication"));
        }
        $this->load->model("M_produk");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['ukm']=$this->M_produk->getAllukm()->result();
        $data['ukmModal']=$this->M_produk->getModal();
        $this->temp->load('back_end/partials', 'back_end/produk/ukm/ukm', $data);
    }

    public function add()
    {
        $this->M_produk->rulesNew();
        if ($this->form_validation->run() == false) {
            $data = [
                'page' => 'add',
                'kode' => $this->M_produk->kode()
            ];
            $this->temp->load('back_end/partials', 'back_end/produk/ukm/form_ukm', $data);
        } else {
            $this->M_produk->addNew();
            $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('back_end/produk/Ukm');
        }
    }

    public function edit($id)
    {
        $this->M_produk->rulesEdit();
        $query = $this->M_produk->getAll($id);
        if ($this->form_validation->run() == false) {
            if ($query->num_rows() > 0) {
                $ukm = $query->row();
                $data = [
                    'page' => 'edit',
                    'row' => $ukm
                ];
                $this->temp->load('back_end/partials', 'back_end/produk/ukm/form_ukm', $data);
            }
        } else {
            $post = $this->input->post(null, true);
            if (isset($_POST['edit'])) {
                $this->M_produk->editData($post);
                $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Data!</strong> berhasil disimpan.
                    </div>');
                redirect('back_end/produk/Ukm');
            }
        }
    }

    public function edit_img($id)
    {
        $this->M_produk->rulesEditIMG();
        $query = $this->M_produk->getAll($id);
        if ($this->form_validation->run() == false) {
            if ($query->num_rows() > 0) {
                $ukm = $query->row();
                $data = [
                    'row' => $ukm,
                    'page' => 'produk_ukm'
                ];
                $this->temp->load('back_end/partials', 'back_end/produk/form_edit_img', $data);
            }
        } else {
            $post = $this->input->post(null, true);
            if (isset($_POST['edit2'])) {
                $this->M_produk->editimg($post);
                $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Data!</strong> berhasil disimpan.
                                            </div>');
                redirect('back_end/produk/Ukm');
            }
        }
    }

    public function delete($id)
    {
        $this->M_produk->deleteData($id);
        redirect('back_end/produk/Ukm');
    }

    public function print()
    {
        $data['ukm']=$this->M_produk->getAll()->result();
        $this->temp->load('back_end/print/partials.html', 'back_end/print/ukm.html', $data);
    }

}

/* End of file Controllername.php */

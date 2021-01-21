<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

    function __construct()
    {
        parent :: __construct();
        if($this->session->userdata('status') != "1520S118TK0100"){
            redirect(base_url("back_end/Authentication"));
        }
        $this->load->model("M_artikel");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['artikel']=$this->M_artikel->getAll()->result();
        $this->temp->load('back_end/partials', 'back_end/artikel/artikel', $data);
    }

    public function add()
    {
        $this->M_artikel->rulesNew();
        if ($this->form_validation->run() == false) {
            $data = [
                'page' => 'add',
                'kode' => $this->M_artikel->kode()
            ];
            $this->temp->load('back_end/partials', 'back_end/artikel/form_artikel', $data);
        } else {
            $this->M_artikel->addNew();
            $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('back_end/Artikel');
        }
    }

    public function edit($id)
    {
        $this->M_artikel->rulesEdit();
        $query = $this->M_artikel->getAll($id);
        if ($this->form_validation->run() == false) {
            if ($query->num_rows() > 0) {
                $artikel = $query->row();
                $data = [
                    'page' => 'edit',
                    'row' => $artikel
                ];
                $this->temp->load('back_end/partials', 'back_end/artikel/form_artikel', $data);
            }
        } else {
            $post = $this->input->post(null, true);
            if (isset($_POST['edit'])) {
                $this->M_artikel->editData($post);
                $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Data!</strong> berhasil disimpan.
                    </div>');
                redirect('back_end/Artikel');
            }
        }

    }

    public function delete($id)
    {
        $this->M_artikel->deleteData($id);
        redirect('back_end/Artikel');
    }

    public function print()
    {
        $data['artikel']=$this->M_artikel->getAll()->result();
        $this->temp->load('back_end/print/partials.html', 'back_end/print/artikel.html', $data);
    }

}

/* End of file Controllername.php */

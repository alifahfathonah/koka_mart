<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengiriman_produk extends CI_Controller {

	function __construct()
     {
        parent :: __construct();
        if($this->session->userdata('status') != "1520S118TK0100"){
            redirect(base_url("back_end/Authentication"));
        }
        $this->load->model("M_pengiriman_produk");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['pengiriman']=$this->M_pengiriman_produk->getAll()->result();
        $this->temp->load('back_end/partials', 'back_end/transaksi/pengiriman/pengiriman_produk', $data);
    }

    public function edit($id)
    {
        $this->M_pengiriman_produk->rulesEdit();
        $query = $this->M_pengiriman_produk->getAll($id);
        if ($this->form_validation->run() == false) {
            if ($query->num_rows() > 0) {
                $penjualan = $query->row();
                $data = ['row' => $penjualan];
            $this->temp->load('back_end/partials', 'back_end/transaksi/pengiriman/form_pengiriman_produk', $data);
            }
        } else {
            $post = $this->input->post(null, true);
            if (isset($_POST['edit'])) {
                $this->M_pengiriman_produk->editData($post);
                $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Data!</strong> berhasil disimpan.
                                            </div>');
                redirect('back_end/Pengiriman_produk');
            }
        }
    }

    public function delete($id=null)
    {
        $this->M_pengiriman_produk->deleteData($id);
        redirect('back_end/Pengiriman_produk');
   }

   public function print()
    {
        $data['pengiriman']=$this->M_pengiriman_produk->getAll()->result();
        $this->temp->load('back_end/print/partials.html', 'back_end/print/pengiriman_produk.html', $data);
   }

}

/* End of file Controllername.php */

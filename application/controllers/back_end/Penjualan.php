<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	function __construct()
     {
        parent :: __construct();
        if($this->session->userdata('status') != "1520S118TK0100"){
            redirect(base_url("back_end/Authentication"));
        }
        $this->load->model("M_penjualan");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['penjualan']=$this->M_penjualan->getAll()->result();
        $this->temp->load('back_end/partials', 'back_end/transaksi/penjualan/penjualan', $data);
    }

    public function edit($id)
    {
        $this->M_penjualan->rulesEdit();
        $query = $this->M_penjualan->getAll($id);
        if ($this->form_validation->run() == false) {
            if ($query->num_rows() > 0) {
                $penjualan = $query->row();
                $data = ['row' => $penjualan];
            $this->temp->load('back_end/partials', 'back_end/transaksi/penjualan/form_penjualan', $data);
            }
        } else {
            $post = $this->input->post(null, true);
            if (isset($_POST['edit'])) {
                $this->M_penjualan->editData($post);
                $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Data!</strong> berhasil disimpan.
                                            </div>');
                redirect('back_end/Penjualan');
            }
        }
    }

    public function detail($id)
    {
        $where = array('penjualan_id' => $id);
        $data['dtl'] = $this->M_penjualan->dtl($id);
        $data['detail']=$this->M_penjualan->detail($where,'penjualan')->result();
        $this->temp->load('back_end/partials', 'back_end/transaksi/penjualan/penjualan_detail', $data);
    }

    public function delete($id=null)
    {
        $this->M_penjualan->deleteData($id);
        redirect('back_end/Penjualan');
   }

   public function print()
    {
        $data['penjualan']=$this->M_penjualan->getAll()->result();
        $this->temp->load('back_end/print/partials.html', 'back_end/print/penjualan.html', $data);
   }

   public function printdtl($id)
    {
        $where = array('penjualan_id' => $id);
        $data['dtl'] = $this->M_penjualan->dtl($id);
        $data['detail']=$this->M_penjualan->detail($where,'penjualan')->result();
        $this->temp->load('back_end/print/partials.html', 'back_end/print/penjualan_dtl.html', $data);
   }

}

/* End of file Controllername.php */

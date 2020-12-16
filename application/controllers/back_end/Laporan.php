<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
     {
        parent :: __construct();
        if($this->session->userdata('status') != "1520S118TK0100"){
            redirect(base_url("back_end/Authentication"));
        }
        $this->load->model("M_laporan");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['laporan']=$this->M_laporan->getAll()->result();
        $this->temp->load('back_end/partials', 'back_end/laporan/laporan', $data);
    }

    public function detail($id)
    {
        $where = array('penjualan_id' => $id);
        $data['dtl'] = $this->M_laporan->dtl($id);
        $data['detail']=$this->M_laporan->detail($where,'penjualan')->result();
        $this->temp->load('back_end/partials', 'back_end/transaksi/penjualan/penjualan_detail', $data);
    }

    public function delete($id=null)
    {
        $this->M_laporan->deleteData($id);
        redirect('back_end/Laporan');
   }

   public function print()
    {
        $data['penjualan']=$this->M_laporan->getAll()->result();
        $this->temp->load('back_end/print/partials.html', 'back_end/print/laporan.html', $data);
   }

   public function printdtl($id)
    {
        $where = array('penjualan_id' => $id);
        $data['dtl'] = $this->M_laporan->dtl($id);
        $data['detail']=$this->M_laporan->detail($where,'penjualan')->result();
        $this->temp->load('back_end/print/partials.html', 'back_end/print/laporan_dtl.html', $data);
   }

}

/* End of file Controllername.php */

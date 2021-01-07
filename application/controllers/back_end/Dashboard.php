<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        if ($this->session->userdata('status') != "1520S118TK0100") {
            redirect(base_url("back_end/Authentication"));
        }
        $this->load->model("M_index");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $this->M_index->del_waiting();
        $this->M_index->del_reject();
        $this->M_index->del_cancel();
        $data['premium']=$this->M_index->getAllpremium()->result();
        $data['ukm']=$this->M_index->getAllukm()->result();
        $data['total_produk']=$this->M_index->hitung_produk();
        $data['total_pendapatan']=$this->M_index->hitung_pendapatan();
        $data['total_pesanan']=$this->M_index->hitung_pesanan();
        $data['total_terjual']=$this->M_index->hitung_terjual();
        $this->temp->load('back_end/partials', 'back_end/index',$data);
    }

}

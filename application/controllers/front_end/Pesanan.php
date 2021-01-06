<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model("M_pesanan");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data = [
                'page' => 'no_value'
            ];
        $this->temp->load('front_end/partials', 'front_end/pesanan',$data);
    }

    public function pencarian()
    {
        $key_pesanan = $this->input->post('key_pesanan');
        $data = [
            'page' => 'value',
            'key_pesanan' => $key_pesanan
        ];
        $data['search']=$this->M_pesanan->get_pesanan($key_pesanan);
        $this->temp->load('front_end/partials', 'front_end/pesanan', $data);
    }

    public function detail($id)
    {
        $where = array('penjualan_id' => $id);
        $data['dtl'] = $this->M_pesanan->dtl($id);
        $data['detail']=$this->M_pesanan->detail($where,'penjualan')->result();
        $this->load->view('front_end/detail_pesanan',$data);
    }
}
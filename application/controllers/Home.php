<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model("M_index");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $this->M_index->del_waiting();
        $this->M_index->del_reject();
        $this->M_index->del_cancel();
        $data['premium']=$this->M_index->getPremium()->result();
        $data['ukm']=$this->M_index->getUkm()->result();
        $data['artikel']=$this->M_index->getArtikel()->result();
        $this->temp->load('front_end/partials', 'front_end/index', $data);
    }

    public function hubungi_kami()
    {
        $this->temp->load('front_end/partials','front_end/etc/hubungi_kami');
    }

    public function faq()
    {
        $this->temp->load('front_end/partials','front_end/etc/faq');
    }

    public function pencarian()
    {
        $keyword = $this->input->post('keyword');
        $data['keyword'] = $keyword;
        $data['search']=$this->M_index->get_produk($keyword);
        $this->temp->load('front_end/partials', 'front_end/pencarian', $data);
    }
}
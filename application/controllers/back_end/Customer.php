<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    function __construct()
    {
        parent :: __construct();
        if($this->session->userdata('status') != "1520S118TK0100"){
            redirect(base_url("back_end/Authentication"));
        }
        $this->load->model("M_customer");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['customer']=$this->M_customer->getAll()->result();
        $data['customerModal']=$this->M_customer->getM();
        $this->temp->load('back_end/partials', 'back_end/customer/customer', $data);
    }

    public function delete($id)
    {
        $this->M_customer->deleteData($id);
        redirect('back_end/Customer');
    }

    public function print()
    {
        $data['customer']=$this->M_customer->getAll()->result();
        $this->temp->load('back_end/print/partials.html', 'back_end/print/customer.html', $data);
    }

}

/* End of file Controllername.php */

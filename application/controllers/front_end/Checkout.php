<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->cart->total())) {
            redirect(base_url('front_end/Keranjang'));
          }
        $this->load->model("M_checkout");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index(){
      $total = $this->cart->total();
      $data = [
          'kode' => $this->M_checkout->id_pemesanan(),
          'cart_checkout' => $this->cart->contents(),
          'total' => $total,
          'ongkir' => ''
      ];
      
      if (isset($_POST['cek_ongkir'])) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "origin=160&destination=".$this->input->post('kota_penerima')."&weight=".$this->input->post('berat')."&courier=".$this->input->post('ekspedisi')."",
          CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key: 9bf3fedcc2da57bedfe4bb954f27b44c"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          $data['ongkir'] = $response;
        }

      }

      $this->temp->load('front_end/partials', 'front_end/keranjang/checkout', $data);
    }

    public function act_checkout()
    {
      if (isset($_POST['save'])) {
        $id = $this->input->post('penjualan_id');
        $this->M_checkout->addData();
        $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success">Pesanan Anda berhasil diproses, silahkan lakukan pembayaran!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
        $this->cart->destroy();
        redirect('front_end/Pesanan/detail/'.$id);
      }
    }

    public function kota($provinsi){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=".$provinsi,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "key: 9bf3fedcc2da57bedfe4bb954f27b44c"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          $kota = json_decode($response,true);
          
          if ($kota['rajaongkir']['status']['code'] == '200'){
            echo "<option value=''>Pilih Kota</option>";
                foreach ($kota['rajaongkir']['results'] as $kt){
                  $get_kota = (explode("|", $this->input->post('kota_penerima')));
                    echo "<option value='".$kt['city_id']."|".$kt['city_name']."' ".($kt['city_id'] == $get_kota[0] ? "selected" : "").">".$kt['city_name']."</option>";
                }
            }
        }
    }

    
}

/* End of file Chekout.php */

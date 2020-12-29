<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index(){
        if (empty($this->cart->total())) {
            redirect('front_end/Keranjang');
        }else{
            $data['cart_checkout']=$this->cart->contents();
            $total = $this->cart->total();
            $data['total'] = $total;
            $this->temp->load('front_end/partials', 'front_end/keranjang/checkout', $data);
        }
    }

    function act_checkout(){
        
    }

    public function _api_ongkir_post($origin, $des, $qty, $cour)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "origin=".$origin."&destination=".$des."&weight=".$qty."&courier=".$cour,
      CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded",
        /* masukan api key disini*/
        "key: c66fb59b017b33300e12f6589c2f32c1"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return $err;
        } else {
            return $response;
        }
    }


    public function _api_ongkir($data)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          //CURLOPT_URL => "https://api.rajaongkir.com/starter/province?id=12",
          //CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
          CURLOPT_URL => "http://api.rajaongkir.com/starter/".$data,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            /* masukan api key disini*/
            "key: c66fb59b017b33300e12f6589c2f32c1"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return  $err;
        } else {
            return $response;
        }
    }


    public function provinsi()
    {
        $provinsi = $this->_api_ongkir('province');
        $data = json_decode($provinsi, true);
        echo json_encode($data['rajaongkir']['results']);
    }

    public function kota($provinsi="")
    {
        if (!empty($provinsi)) {
            if (is_numeric($provinsi)) {
                $kota = $this->_api_ongkir('city?province='.$provinsi);
                $data = json_decode($kota, true);
                echo json_encode($data['rajaongkir']['results']);
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }

    public function tarif($origin, $des, $qty, $cour)
    {
        $berat = $qty*1000;
        $tarif = $this->_api_ongkir_post($origin, $des, $berat, $cour);
        $data = json_decode($tarif, true);
        echo json_encode($data['rajaongkir']['results']);
    }
}

/* End of file Chekout.php */

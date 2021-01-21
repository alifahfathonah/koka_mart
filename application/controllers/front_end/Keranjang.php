<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keranjang extends CI_Controller
{
	
	function __construct()
    {
        parent :: __construct();
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index(){
		$cart_check = $this->cart->contents();
        if (empty($cart_check)) {
        	$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
      Keranjang Kosong, Silahkan pesan produk favorit anda! Selamat Berbelanja</div>');
        }

		$data['cart']=$this->cart->contents();
		$total = $this->cart->total();
		$data['total'] = $total;
		$this->temp->load('front_end/partials', 'front_end/keranjang/keranjang',$data);
	}

	function add_to_cart(){ //fungsi Add To Cart
		$data = array(
			'id' => $this->input->post('produk_id'), 
			'name' => $this->input->post('produk_nama'), 
			'price' => $this->input->post('produk_harga'), 
			'qty' => $this->input->post('quantity'),
			'img' => $this->input->post('produk_img'),
			'kategori' => $this->input->post('produk_kategori_id')
		);
		$this->cart->insert($data);
		echo $this->show_cart(); //tampilkan cart setelah added
	}

	function update_cart(){
		$id = $this->input->post('id');
		$qty = $this->input->post('qty');
		$data= array(
			'rowid'=>$id,
			'qty'=> $qty
		);
		
		$this->cart->update($data);
		echo $this->show_cart();
	}

	function show_cart(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$output = '<li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>.</span>
                                </a>
                                <div class="cart-hover">';
		foreach ($this->cart->contents() as $items) {
			$output .='
			<div class="select-items">
				<table>
					<tbody>
						<tr>
							<td class="si-pic"><img style="height: 50px; width: 50px;" src="'.site_url("assets/upload/produk/".$items['img']).'" alt=""></td>
							<td class="si-text">
								<div class="product-selected">
									<h6>'.$items['name'].'</h6>
									<p>Rp. '.number_format($items['price']).' x '.$items['qty'].'</p>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			';
		}
		$output .= '
			<div class="select-total">
                <span>total:</span>
                <h5>Rp. '.number_format($this->cart->total()).'</h5>
            </div>
            <div class="select-button">
                <a href="'.base_url('keranjang').'" class="primary-btn view-card">KERANJANG</a>
                <a href="'.base_url('checkout').'" class="primary-btn checkout-btn">CHECK OUT</a>
            </div>
            </div>
                            </li>
                            <li class="cart-price">Rp. '.number_format($this->cart->total()).'</li>
		';
		return $output;
	}

	function load_cart(){ //load data cart
		echo $this->show_cart();
	}

	function hapus_cart(){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}
}
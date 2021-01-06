<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
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
  $provinsi = json_decode($response,true);
}
?>
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="<?php echo base_url('Home') ?>"><i class="fa fa-home"></i> Home</a>
                    <span>Check Out</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form method="POST" enctype="multipart/form-data" action="<?= site_url() ?>front_end/Checkout">
                        <div class="col-lg-12">
                            <h4 style="margin-bottom: 5px;"><b>1. Pengiriman</b></h4>
                            <label>Isi lokasi pengiriman anda untuk mengetahui biaya kirim</label><hr>
                            <div class="row">
                                <!--
                                <div class="col-lg-6">
                                    <label>Provinsi Asal</label>
                                    <select id="provinsi" name="provinsi" class="form-control">
                                        <option value="">Pilih Provinsi</option>
                                        <?php
                                        if ($provinsi['rajaongkir']['status']['code'] == '200'){
                                            foreach ($provinsi['rajaongkir']['results'] as $pv){
                                                echo "<option value='".$pv['province_id']."' ".($pv['province_id'] == $this->input->post('provinsi') ? "selected" : "").">".$pv['province']."</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label>Kota Asal</label>
                                    <select id="kota" name="kota" class="form-control">
                                        <?php
                                        if (count($_POST)) {
                                            $curl = curl_init();

                                            curl_setopt_array($curl, array(
                                              CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=".$this->input->post('provinsi'),
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
                                                    echo "<option value='".$kt['city_id']."' ".($kt['city_id'] == $this->input->post('kota') ? "selected" : "").">".$kt['city_name']."</option>";
                                                }
                                            }
                                        }
                                    }else{
                                        echo "<option>Pilih Provinsi Dahulu</option>";
                                    }
                                    ?>
                                    </select>
                                </div>-->
                                <div class="col-lg-12" style="margin-top: 10px;">
                                    <label>Provinsi</label>
                                    <select id="provinsi_penerima" name="provinsi_penerima" class="form-control" required>
                                        <option value="">Pilih Provinsi</option>
                                        <?php
                                        if ($provinsi['rajaongkir']['status']['code'] == '200'){
                                            foreach ($provinsi['rajaongkir']['results'] as $pv){
                                                $get_prov = (explode("|", $this->input->post('provinsi_penerima')));
                                                echo "<option value='".$pv['province_id']."|".$pv['province']."' ".($pv['province_id'] == $get_prov[0] ? "selected" : "").">".$pv['province']."</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-12" style="margin-top: 10px;">
                                    <label>Kota</label>
                                    <select id="kota_penerima" name="kota_penerima" class="form-control" required>
                                        <?php
                                        if (count($_POST)) {
                                            $curl = curl_init();

                                            curl_setopt_array($curl, array(
                                              CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=".$this->input->post('provinsi_penerima'),
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
                                    }else{
                                        echo "<option>Pilih Provinsi Terlebih Dahulu</option>";
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-lg-12" style="margin-top: 10px;">
                                    <label>Ekspedisi</label>
                                    <select id="ekspedisi" name="ekspedisi" class="form-control" required>
                                        <option value="">Pilih Ekspedisi</option>
                                        <?php
                                        $eks = ['jne' => 'JNE','pos' => 'POS','tiki' => 'TIKI'];
                                        foreach ($eks as $key => $value) {
                                            echo "<option value='".$key."' ".($key == $this->input->post('ekspedisi') ? "selected" : "").">".$value."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-12" style="margin-top: 10px;" hidden>
                                    <label>Berat (gram)</label>
                                    <input type="text" name="berat" value="100" class="form-control" placeholder="gram" required readonly>
                                </div>
                            </div>
                            <div class="col-lg-6" style="margin: 20px auto;">
                                    <button style="width: auto;" type="submit" name="cek_ongkir" id="cek_ongkir" class="site-btn place-btn">Cek Biaya Pengiriman</button>
                            </div>
                        </div>
                </form>
                <form class="checkout-form" hidden>
                    <div class="col-lg-12">
                        <div class="place-order">
                            <h5>Pesanan Anda</h5><hr>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Subtotal</span></li>
                                    <?php foreach ($cart_checkout as $items){ ?>
                                        <li class="fw-normal"><?php echo $items['name'] ?> x <?php echo $items['qty'] ?> <span>Rp. &nbsp;<?php echo number_format($items['subtotal']) ?></span></li>
                                    <?php } ?>
                                    <li class="total-price">Total <span>Rp. &nbsp;<?php echo number_format($total); ?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6">
                <form method="POST" enctype="multipart/form-data" action="<?= site_url() ?>front_end/Checkout/act_checkout">
                    <h4 style="margin-bottom: 5px;"><b>2. Informasi Pembeli</b></h4>
                    <label>Isi informasi keterangan anda secara lengkap</label><hr>
                    <div class="row">
                        <div class="col-lg-12" hidden>
                            <label>ID Pemesanan<span>*</span></label>
                            <input type="text" class="form-control" name="penjualan_id" value="<?= $kode; ?>" readonly>
                        </div>
                        <div class="col-lg-12" style="margin-top: 10px;">
                            <label>Nama<span style="color: red">*</span></label>
                            <input type="text" class="form-control" name="penjualan_penerima" value="<?= $this->input->post('penjualan_penerima') ?>" required>
                        </div>
                        <div class="col-lg-12" style="margin-top: 10px;">
                            <label>Email</label>
                            <input type="email" class="form-control" name="penjualan_email" value="<?= $this->input->post('penjualan_email') ?>">
                        </div>
                        <div class="col-lg-12" style="margin-top: 10px;">
                            <label>Nomor Hp / Telp / Whatsapp<span style="color: red">*</span></label>
                            <input type="text" class="form-control" name="penjualan_telp" value="<?= $this->input->post('penjualan_telp') ?>" required>
                        </div>
                        <div class="col-lg-12" style="margin-top: 10px;">
                            <label>Alamat Lengkap<span style="color: red">*</span></label>
                            <input type="text" class="form-control" name="penjualan_alamat" value="<?= $this->input->post('penjualan_alamat') ?>" required>
                        </div>
                        <div class="col-lg-12" hidden>
                            <label>Keranjang Total</label>
                            <input type="text" class="form-control" name="penjualan_keranjang_total" value="<?= $total; ?>" readonly>
                        </div>
                        <div class="col-lg-12" style="margin-top: 10px;">
                                <?php
                                $layanan_ekspedisi = $this->input->post('ekspedisi');
                                $get_kota = (explode("|", $this->input->post('kota_penerima')));
                                $get_prov = (explode("|", $this->input->post('provinsi_penerima')));
                                $biaya = json_decode($ongkir,true);
                                if ($biaya['rajaongkir']['status']['code'] == '200'){
                                    echo '<label>Pilih Layanan<span style="color: red">*</span></label>';
                                    foreach ($biaya['rajaongkir']['results'][0]['costs'] as $by){
                                        ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="<?= $layanan_ekspedisi; ?>|<?= $by['service'] ?>|<?= $by['cost'][0]['value'] ?>|<?= $get_kota[1] ?>|<?= $get_prov[1] ?>" name="layanan_ongkir" id="flexRadioDefault1" required>
                                            <div class="card" style="width: 30rem; margin-top: 10px;">
                                                <div class="card-body">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Ekspedisi : <?= $layanan_ekspedisi; ?><br>
                                                        Layanan : <?= $by['service'] ?><br>
                                                        Deskripsi : <?= $by['description'] ?><br>
                                                        Biaya : Rp. <?= number_format($by['cost'][0]['value'],0,',',',') ?><br>
                                                        Kirim ke : <?= $get_kota[1] ?>,&nbsp;<?= $get_prov[1] ?><br>
                                                        Estimasi : <?= $by['cost'][0]['etd'] ?> Hari
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        }
                                    }
                                    ?>
                        </div>
                        
                        <div class="col-lg-12" hidden>
                            <div class="place-order">
                                <h5>Pesanan Anda</h5><hr>
                                <div class="order-total">
                                    <ul class="order-table">
                                        <li>Product <span>Subtotal</span></li>
                                        <?php foreach ($cart_checkout as $items){ ?>
                                            <li class="fw-normal"><?php echo $items['name'] ?> x <?php echo $items['qty'] ?> <span>Rp. &nbsp;<?php echo number_format($items['subtotal']) ?></span></li>
                                        <?php } ?>
                                        <li class="total-price">Total <span>Rp. &nbsp;<?php echo number_format($total); ?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        


                        <div class="order-btn" style="margin: 20px auto;">
                            <input type="button" name="save" value="Checkout" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="site-btn place-btn" />
                            <button type="submit" name="save" id="acc" class="site-btn place-btn" hidden>Checkout</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
<!--MODAL -->
<div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <b><i class="ti-shopping-cart-full"></i>&nbsp;Konfirmasi Checkout</b>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">
                    Apakah anda yakin akan melanjutkan transaksi?<br>
                </div>
                <div class="col-sm-12">
                    Id Pemesanan Anda : <span class="badge badge-warning"><?= $kode; ?></span><br>
                </div>
                <div class="col-sm-12" style="margin-top: 30px;">
                    <span style="color: red">*Setelah melakukan checkout, ingat kode id pemesanan anda.</span></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <a href="#" id="submitbtn" name="save" class="btn btn-success success">Ya, Lanjutkan Checkout</a>
            </div>
        </div>
    </div>
</div>

<script>
    /*document.getElementById('provinsi').addEventListener('change',function(){

        fetch("<?= base_url('front_end/Checkout/kota/') ?>"+this.value,{
            method:'GET',
        })
        .then((response) => response.text())
        .then((data) => {
            console.log(data)
            document.getElementById('kota').innerHTML = data
        })
    })*/

    document.getElementById('provinsi_penerima').addEventListener('change',function(){

        fetch("<?= base_url('front_end/Checkout/kota/') ?>"+this.value,{
            method:'GET',
        })
        .then((response) => response.text())
        .then((data) => {
            console.log(data)
            document.getElementById('kota_penerima').innerHTML = data
        })
    })
</script>
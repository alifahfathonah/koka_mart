<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo base_url('Home') ?>"><i class="fa fa-home"></i> Home</a>
                    <span>Cek Pesanan Anda</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form method="POST" enctype="multipart/form-data" action="<?= site_url() ?>front_end/Pesanan/pencarian">
                        <div class="advanced-search">
                            <div class="col-lg-6" style="margin: 0px auto;">
                                <h4><b>Cari Pesanan Anda!</b></h4>
                            </div>
                            <div class="input-group" style="margin-top: 10px;">
                                <input type="text" name="key_pesanan" class="form-control" placeholder="Masukkan Kode Transaksi / No Wa" required>
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    if ($page == 'no_value') {
         echo "";
     }else{
        ?><!-- Product Shop Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                        <p>Pencarian : <?php echo $key_pesanan; ?></p>
                    </div>
                    <?php
                    if (empty($search)) {
                        echo "
                                <div style='text-align: center;'>
                                    <h4>Pesanan anda tidak ditemukan, Silahkan periksa kembali!</h4>
                                </div>
                                ";
                    }else{
                     foreach($search as $s):?>
                        <div class="posted-by" style="margin-top: 5px;">
                            <div class="row">
                            <div class="pb-pic col-lg-2">
                                <?php if ($s->penjualan_status == 'Waiting for Payment') {
                                    echo '<img src="'.base_url("assets/front_end/img/png/043-bill.png").' ?>" alt="">';
                                }if ($s->penjualan_status == 'Process') {
                                    echo '<img src="'.base_url("assets/front_end/img/png/010-secure-shopping.png").'" alt="">';
                                }if ($s->penjualan_status == 'On The Way') {
                                    echo '<img src="'.base_url("assets/front_end/img/png/005-shipping-truck.png").'" alt="">';
                                }if ($s->penjualan_status == 'Rejected') {
                                    echo '<img src="'.base_url("assets/front_end/img/png/042-bag-2.png").'" alt="">';
                                }if ($s->penjualan_status == 'Canceled') {
                                    echo '<img src="'.base_url("assets/front_end/img/png/041-cart-3.png").'" alt="">';
                                }if ($s->penjualan_status == 'Arrived') {
                                    echo '<img src="'.base_url("assets/front_end/img/png/007-shipping.png").'" alt="">';
                                } ?>
                            </div>
                            <div class="pb-text col-lg-7">
                                <a href="#">
                                    <h5><span style="color: red;">Id Pemesanan :</span>&nbsp;<?php echo $s->penjualan_id ?></h5>
                                </a>
                                <p><?php echo $s->penjualan_penerima ?>&nbsp;/&nbsp;<?php echo $s->penjualan_telp ?></p>
                                <p>Total Pemesanan : <span class="badge badge-success">Rp. <?php echo number_format($s->penjualan_total) ?>&nbsp;</span></p>
                                <p><span class="badge badge-info">Status :&nbsp;<?php echo $s->penjualan_status ?></span></p>
                            </div>
                            <div class="col-lg-3">
                                <div style="margin: 0 3em 0 3em">
                                    <a href="https://wa.me/+6289608560667?text=Saya%20mau%20mengkonfirmasi%20pemesanan%20saya.%0AId%20Pemesanan%20%3A%20<?php echo $s->penjualan_id; ?>%0ATerima%20Kasih."><button class="btn btn-primary">Konfirmasi Pesanan</button></a>
                                </div>
                                <div style="margin: 10px 3em 0 3em">
                                    <a href="<?php echo site_url('front_end/Pesanan/detail/'.$s->penjualan_id) ?>"><button class="btn btn-warning">Detail Pemesanan</button></a>
                                </div>
                            </div>
                        </div>
                        </div>

                    <?php endforeach; }?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->';
 <?php } ?>
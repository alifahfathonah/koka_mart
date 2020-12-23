<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo base_url('Home') ?>"><i class="fa fa-home"></i> Home</a>
                    <span>UKM</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                        <h2>Produk UKM</h2>
                        <label>Produk UKM binaan CCSTP menciptakan berbagai macam olahan coklat dan kopi yang berkualitas dan nikmat. Beberapa produk sudah dipasarkan ke luar negeri.</label>
                        <p>Pesan Sekarang Sebelum Kehabisan</p>
                    </div>
                </div>
                <div class="product-list">
                    <div class="row">

                        <?php foreach ($data->result() as $u) :?>
                            <div class="col-lg-3 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img style="height: 330px; width: 270px;" src="<?php echo site_url('assets/upload/produk/'.$u->produk_img) ?>" alt="">
                                        <div class="sale pp-sale">Stok : <?php echo $u->produk_stok ?></div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="<?php echo site_url('front_end/produk/Ukm/detail_ukm/'.$u->produk_id) ?>">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"><?php echo $u->kategori_nama ?></div>
                                        <a href="#">
                                            <h5><?php echo $u->produk_nama ?></h5>
                                        </a>
                                        <div class="product-price">
                                            Rp. <?php echo number_format($u->produk_harga); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>  
                    </div>
                </div>
                <div class="col">
                    <!--Tampilkan pagination-->
                    <?php echo $pagination; ?>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Product Shop Section End -->
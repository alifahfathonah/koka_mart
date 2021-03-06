<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo base_url('Home') ?>"><i class="fa fa-home"></i> Home</a>
                    <a href="#">Kategori</a>
                    <span>Premium</span>
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
                        <h2>Produk Premium</h2>
                        <label>Vicco adalah produk coklat premium yang merupakan hasil pengolahan biji kakao berkualitas dan memiliki cita rasa yang memukau. Vicco menggunakan lemak kakao sebagai bahan baku produk olahan coklat untuk mendapatkan kualitas coklat yang lebih baik. Vicco Tersedia dalam berbagai varian produk.</label>
                        <p>Pesan Sekarang Sebelum Kehabisan</p>
                    </div>
                </div>
                <div class="product-list" style="margin-top: 50px;">
                    <div class="row">
                        <?php foreach ($data->result() as $p) :?>
                            <div class="col-lg-3 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img style="height: 330px; width: 270px;" src="<?php echo site_url('assets/upload/produk/'.$p->produk_img) ?>" alt="">
                                        <!--<div class="sale pp-sale">Stok : <?php echo $p->produk_stok ?></div>-->
                                        <div class="icon">
                                            <!--<i class="icon_heart_alt"></i>-->
                                            <span class="badge badge-warning"><?php echo $p->kategori_nama ?></span>
                                        </div>
                                        <ul>
                                            <li><input style="width: 50px;" type="number" name="quantity" id="<?php echo $p->produk_id;?>" value="1" class="quantity"></li>
                                            <li class="quick-view" style="background-color: #FBAC03;"><a href="<?php echo site_url('front_end/produk/Premium/detail_premium/'.$p->produk_id) ?>">+ Quick View</a></li>
                                            <li><button class="add_cart" data-produkid="<?php echo $p->produk_id;?>" data-produknama="<?php echo $p->produk_nama;?>" data-produkharga="<?php echo $p->produk_harga;?>" data-produkimg="<?php echo $p->produk_img;?>" data-produkkategoriid="<?php echo $p->produk_kategori_id;?>">Beli</button></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"><?php echo $p->kategori_nama ?></div>
                                        <a href="#">
                                            <h5><?php echo $p->produk_nama ?></h5>
                                        </a>
                                        <div class="product-price">
                                            Rp. <?php echo number_format($p->produk_harga); ?>
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
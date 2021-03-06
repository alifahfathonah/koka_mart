<!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="<?php echo base_url('assets/front_end/img/banner1.jpg') ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Produk Premium</span>
                            <h1>Mega Sale</h1>
                            <p>*Diskon Berlaku untuk produk Vicco Chocolate with Cashew, Dark Chocolate, ...</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>40%<span>OFF</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="<?php echo base_url('assets/front_end/img/banner2.jpg') ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Produk UKM</span>
                            <h1>New Year Sale</h1>
                            <p>Diskon akhir tahun untuk pembelian produk UKM. Diskon berlaku untuk produk UKM A, B, dan C</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>20%<span>OFF</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <!--
    <div class="banner-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="<?php echo base_url('assets/front_end/img/banner-1.jpg') ?>" alt="">
                        <div class="inner-text">
                            <h4>Produk Premium</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="<?php echo base_url('assets/front_end/img/banner-2.jpg') ?>" alt="">
                        <div class="inner-text">
                            <h4>Produk UKM</h4>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="<?php echo base_url('assets/front_end/img/banner-3.jpg') ?>" alt="">
                        <div class="inner-text">
                            <h4>Kid’s</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Banner Section End -->

    <div class="container">
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="<?php echo base_url('assets/front_end/img/icon-1.png') ?>" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="<?php echo base_url('assets/front_end/img/icon-2.png') ?>" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="<?php echo base_url('assets/front_end/img/icon-1.png') ?>" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad" style="margin-top: 100px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="<?php echo base_url('assets/front_end/img/polos.jpg') ?>">
                        <h2 style="color: black;">Premium</h2>
                        <a style="color: #FBAC03;" href="<?php echo base_url('front_end/produk/Premium') ?>">Temukan Produk Lainnya</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Produk Premium</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <?php foreach($premium as $row):?>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="<?php echo site_url('assets/upload/produk/'.$row->produk_img) ?>" alt="">
                                <!--<div class="sale"><?php echo $row->kategori_nama ?></div>-->
                                <div class="icon">
                                    <!--<i class="icon_heart_alt"></i>-->
                                    <span class="badge badge-warning"><?php echo $row->kategori_nama ?></span>
                                </div>
                                <ul>
                                    <li><input style="width: 50px;" type="number" name="quantity" id="<?php echo $row->produk_id;?>" value="1" class="quantity"></li>
                                    <li class="quick-view" style="background-color: #FBAC03;"><a href="<?php echo site_url('front_end/produk/Premium/detail_premium/'.$row->produk_id) ?>">+ Quick View</a></li>
                                    <li><button class="add_cart button" data-produkid="<?php echo $row->produk_id;?>" data-produknama="<?php echo $row->produk_nama;?>" data-produkharga="<?php echo $row->produk_harga;?>" data-produkimg="<?php echo $row->produk_img;?>" data-produkkategoriid="<?php echo $row->produk_kategori_id;?>">Beli</button></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name"><?php echo $row->kategori_nama ?></div>
                                <a href="#">
                                    <h5><?php echo $row->produk_nama ?></h5>
                                </a>
                                <div class="product-price">
                                    Rp. <?php echo number_format($row->produk_harga); ?>
                                </div>
                            </div>   
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="<?php echo base_url('assets/front_end/img/Banner1.jpg') ?>">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>MEGA SALE</h2>
                    <p>*Diskon Berlaku untuk produk Vicco Chocolate with Cashew, Dark Chocolate, ...</p>
                    <div class="product-price">
                        40% OFF
                        <span>/ Produk Premium</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="#" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Produk UKM</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <?php foreach($ukm as $u):?>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="<?php echo site_url('assets/upload/produk/'.$u->produk_img) ?>" alt="">
                                <!--<div class="sale"><?php echo $u->kategori_nama ?></div>-->
                                <div class="icon">
                                    <!--<i class="icon_heart_alt"></i>-->
                                    <span class="badge badge-warning"><?php echo $u->kategori_nama ?></span>
                                </div>
                                <ul>
                                     <li><input style="width: 50px;" type="number" name="quantity" id="<?php echo $u->produk_id;?>" value="1" class="quantity"></li>
                                    <li class="quick-view" style="background-color: #FBAC03;"><a href="<?php echo site_url('front_end/produk/Ukm/detail_ukm/'.$u->produk_id) ?>">+ Quick View</a></li>
                                    <li><button class="add_cart button" data-produkid="<?php echo $u->produk_id;?>" data-produknama="<?php echo $u->produk_nama;?>" data-produkharga="<?php echo $u->produk_harga;?>" data-produkimg="<?php echo $u->produk_img;?>" data-produkkategoriid="<?php echo $u->produk_kategori_id;?>">Beli</button></li>
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
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="<?php echo base_url('assets/front_end/img/polos.jpg') ?>">
                        <h2 style="color: black;">UKM</h2>
                        <a style="color: #FBAC03;" href="<?php echo base_url('front_end/produk/Ukm') ?>">Temukan Produk Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        
        <div class="elfsight-app-144aa046-5293-46be-bf7b-2b632d0805d1"></div>
        <!--<div class="insta-item set-bg" data-setbg="<?php echo base_url('assets/front_end/img/insta-1.jpg') ?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?php echo base_url('assets/front_end/img/insta-2.jpg') ?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?php echo base_url('assets/front_end/img/insta-3.jpg') ?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?php echo base_url('assets/front_end/img/insta-4.jpg') ?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?php echo base_url('assets/front_end/img/insta-5.jpg') ?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?php echo base_url('assets/front_end/img/insta-6.jpg') ?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>-->
    </div>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Informasi Kopi & Kakao</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($artikel as $a):?>

                <div class="col-lg-4 col-md-6" style="margin-top: 20px;">
                    <div class="single-latest-blog">
                        <a href="<?php echo site_url('front_end/Artikel/detail_artikel/'.$a->artikel_id) ?>">
                            <img style="height: 250px; width: 410px;" src="<?php echo site_url('assets/upload/artikel/'.$a->artikel_gambar) ?>" alt="">
                        </a>
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    <?php $date = date_create ($a->artikel_created); echo date_format ($date, "d F Y"); ?>
                                </div>
                                <!--
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>-->
                            </div>
                            <a href="<?php echo site_url('front_end/Artikel/detail_artikel/'.$a->artikel_id) ?>">
                                <h4><?php echo $a->artikel_judul ?></h4>
                            </a>
                            <p><?php echo htmlspecialchars_decode(htmlspecialchars_decode(substr($a->artikel_deskripsi,0,150))) ?>...</p>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
        <div class="text-center" style="margin-top: 15px">
            <a class="button primary-btn" href="<?php echo base_url('artikel') ?>">Temukan Artikel Lainnya</a>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Partner Logo Section Begin -->
    <!--
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?php echo base_url('assets/front_end/img/logo-carousel/logo-1.png') ?>" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?php echo base_url('assets/front_end/img/logo-carousel/logo-2.png') ?>" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?php echo base_url('assets/front_end/img/logo-carousel/logo-3.png') ?>" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?php echo base_url('assets/front_end/img/logo-carousel/logo-4.png') ?>" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?php echo base_url('assets/front_end/img/logo-carousel/logo-5.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- Partner Logo Section End -->
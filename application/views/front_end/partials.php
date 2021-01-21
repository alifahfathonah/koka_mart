<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KokaMart | E-Commerce</title>
    <link rel="shortcut icon" href="<?= base_url('assets/front_end/img/logo_koka.png') ?>">

    <!-- Google Font -->
    <link href="<?php echo base_url('assets/front_end/css/font-google.css') ?>" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/themify-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/nice-select.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/jquery-ui.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/style.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/fancybox/jquery.fancybox.min.css') ?>" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <!--
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello.colorlib@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>
                <div class="ht-right">
                    <a href="#" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="<?php echo base_url('assets/front_end/img/flag-1.jpg') ?>" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="<?php echo base_url('assets/front_end/img/flag-2.jpg') ?>" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="<?php echo base_url('Home') ?>">
                                <img src="<?php echo base_url('assets/front_end/img/kokaMart.png') ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form method="POST" enctype="multipart/form-data" action="<?= site_url() ?>Home/pencarian">
                            <div class="advanced-search">
                                <button type="button" class="category-btn">Pencarian &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                    <div class="input-group">
                                        <input type="text" name="keyword" placeholder="Cari produk anda!" required>
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right" id="dtl_cart">
        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Kategori</span>
                        <ul class="depart-hover">
                            <li><a href="<?php echo base_url('front_end/produk/Premium') ?>">Produk Premium</a></li>
                            <li><a href="<?php echo base_url('front_end/produk/Ukm') ?>">Produk UKM</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="<?php echo base_url('Home') ?>">Home</a></li>
                        <li><a href="<?php echo base_url('keranjang') ?>">Keranjang</a></li>
                        <li><a href="<?php echo base_url('pesanan') ?>">Cek Pesanan Anda</a></li>
                        <li><a href="<?php echo base_url('artikel') ?>">Artikel</a></li>
                        <li><a href="#">Tentang Kami</a>
                            <ul class="dropdown">
                                <li><a href="<?php echo base_url('faq') ?>">FAQ</a></li>
                                <li><a href="<?php echo base_url('hubungi_kami') ?>">Hubungi Kami</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <?= $contents; ?>

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img style="width: 200px;" src="<?php echo base_url('assets/front_end/img/kokaMart.png') ?>" alt=""></a>
                        </div>
                        <ul>
                            <li>Jl. PB. Sudirman 90, Jember 68118</li>
                            <li>Telp : (62331) 757130</li>
                            <li>Email : iccri@iccri.net</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Kategori</h5>
                        <ul>
                            <li><a href="<?php echo base_url('front_end/produk/Premium') ?>">Produk Premium</a></li>
                            <li><a href="<?php echo base_url('front_end/produk/Ukm') ?>">Produk UKM</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h5>Butuh Bantuan ?</h5>
                        <ul>
                            <li><a href="<?php echo base_url('faq') ?>">FAQ</a></li>
                            <li><a href="<?php echo base_url('hubungi_kami') ?>">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="newslatter-item">
                        <iframe src="https://snapwidget.com/embed/897023" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved" hidden>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>.Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="<?php echo base_url('assets/front_end/img/payment-method.png') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?php echo base_url('assets/front_end/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/jquery-ui.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/jquery.countdown.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/jquery.zoom.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/jquery.dd.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/jquery.slicknav.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/main.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/fancybox/jquery.fancybox.min.js') ?>"></script>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.add_cart').click(function(){
                var produk_id    = $(this).data("produkid");
                var produk_nama  = $(this).data("produknama");
                var produk_harga = $(this).data("produkharga");
                var produk_img = $(this).data("produkimg");
                var produk_kategori_id = $(this).data("produkkategoriid");
                var quantity     = $('#' + produk_id).val();
                $.ajax({
                    url : "<?php echo base_url();?>front_end/Keranjang/add_to_cart",
                    method : "POST",
                    data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, produk_img: produk_img, produk_kategori_id: produk_kategori_id, quantity: quantity},
                    success: function(data){
                        $('#dtl_cart').html(data);
                    }
                });
            });
        });

        //Update Qty
        $(document).ready(function(){
            $('.itemQty').on('change',function(){
             var el = $(this).closest('tr');
             var id = $(el).find("#rowid").val();
             var qty = $(this).val();
             
             $.ajax({
                url:"<?php echo base_url();?>front_end/Keranjang/update_cart",
                method : "POST",
                data:{id:id, qty:qty},
                success:function(data)
                {
                 $('#dtl_cart').html(data);
                }
            });
        });

        // Load shopping cart
        $('#dtl_cart').load("<?php echo base_url();?>front_end/Keranjang/load_cart");

        //Hapus Item Cart
        $(document).on('click','.hapus_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : "<?php echo base_url();?>front_end/Keranjang/hapus_cart",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#dtl_cart').html(data);
                }
            });
        });
    });
</script>

<script type="text/javascript">
    $('#submitbtn').click(function(){
        $('#acc').click();
    });
</script>

</body>

</html>
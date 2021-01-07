<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo base_url('Home') ?>"><i class="fa fa-home"></i> Home</a>
                    <span>Pencarian</span>
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
                        <h2>Pencarian : <?php echo $keyword; ?></h2>
                        <p>Pesan Sekarang Sebelum Kehabisan</p>
                    </div>
                </div>
                <div class="product-list" style="margin-top: 50px;">
                    <div class="row">
                        <?php
                        if (empty($search)) {
                            echo "
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-lg-6 offset-lg-3'>
                                        <div style='text-align: center;'>
                                            <h4>Produk tidak ditemukan</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                        }else{
                         foreach($search as $s):?>
                            <div class="col-lg-3 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img style="height: 330px; width: 270px;" src="<?php echo site_url('assets/upload/produk/'.$s->produk_img) ?>" alt="">
                                        <!--<div class="sale pp-sale">Stok : <?php echo $s->produk_stok ?></div>-->
                                        <div class="icon">
                                            <!--<i class="icon_heart_alt"></i>-->
                                            <span class="badge badge-warning"><?php echo $s->kategori_nama ?></span>
                                        </div>
                                        <ul>
                                            <li><input style="width: 50px;" type="number" name="quantity" id="<?php echo $s->produk_id;?>" value="1" class="quantity"></li>
                                            <li class="quick-view" style="background-color: #FBAC03;"><?php if ($s->kategori_nama == 'Premium') {
                                                echo '<a href="'.site_url('front_end/produk/Premium/detail_premium/'.$s->produk_id).'">+ Quick View</a>';
                                            }else{
                                                echo '<a href="'.site_url('front_end/produk/Ukm/detail_ukm/'.$s->produk_id).'">+ Quick View</a>';
                                            } ?>
                                            </li>
                                            <li><button class="add_cart" data-produkid="<?php echo $s->produk_id;?>" data-produknama="<?php echo $s->produk_nama;?>" data-produkharga="<?php echo $s->produk_harga;?>" data-produkimg="<?php echo $s->produk_img;?>" data-produkkategoriid="<?php echo $s->produk_kategori_id;?>">Beli</button></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"><?php echo $s->kategori_nama ?></div>
                                        <a href="#">
                                            <h5><?php echo $s->produk_nama ?></h5>
                                        </a>
                                        <div class="product-price">
                                            Rp. <?php echo number_format($s->produk_harga); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; }?>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Product Shop Section End -->
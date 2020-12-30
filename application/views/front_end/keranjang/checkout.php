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
            <form class="checkout-form" method="POST" enctype="multipart/form-data" action="<?= site_url() ?>front_end/Checkout/act_checkout">
                <div class="row">
                    <div class="col-lg-6">
                        
                        <h4>Biiling Details</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>ID Pemesanan<span>*</span></label>
                                <input type="text" name="penjualan_id" value="<?= $kode; ?>" readonly>
                            </div>
                            <div class="col-lg-12">
                                <label>Nama<span>*</span></label>
                                <input type="text" name="penjualan_penerima" required>
                            </div>
                            <div class="col-lg-12">
                                <label>Telp</label>
                                <input type="text" name="penjualan_telp" required>
                            </div>
                            <div class="col-lg-12">
                                <label>Alamat</label>
                                <input type="text" name="penjualan_alamat" required>
                            </div>
                            <div class="col-lg-12" hidden>
                                <label>Keranjang Total</label>
                                <input type="text" name="penjualan_keranjang_total" value="<?= $total; ?>" readonly>
                            </div>
                            <div class="col-lg-12">
                                <label>Kurir</label>
                                <input type="text" name="penjualan_kurir">
                            </div>
                            <div class="col-lg-12">
                                <label>Layanan</label>
                                <input type="text" name="penjualan_layanan">
                            </div>
                            <div class="col-lg-12">
                                <label>Biaya</label>
                                <input type="text" name="penjualan_biaya">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Subtotal</span></li>
                                    <?php foreach ($cart_checkout as $items){ ?>
                                    <li class="fw-normal"><?php echo $items['name'] ?> x <?php echo $items['qty'] ?> <span>Rp. &nbsp;<?php echo number_format($items['subtotal']) ?></span></li>
                                    <?php } ?>
                                    <li class="total-price">Total <span>Rp. &nbsp;<?php echo number_format($total); ?></span></li>
                                </ul>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
<!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="<?php echo base_url('Home') ?>"><i class="fa fa-home"></i> Home</a>
                    <span>Keranjang</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div style="text-align: center;">
                <?= $this->session->flashdata('pesan'); ?>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>jumlah</th>
                                    <th>Subtotal</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $i = 1;
                                foreach ($cart as $items){ ?>
                                <tr>
                                    <input type="hidden" id="rowid" name="<?= $i.'[rowid]'; ?>" value="<?= $items['rowid']; ?>">
                                    <td><img style="height: 50px; width: 50px;" src="<?= base_url('assets/upload/produk/'.$items['img']) ?>"></td>
                                    <td><?php echo $items['name'] ?></td>
                                    <td><?php if ($items['kategori'] == 1) {
                                        echo "Premium";
                                    }else{
                                        echo "UKM";
                                    } ?></td>
                                    <td>Rp. &nbsp;<?php echo number_format($items['price']) ?></td>

                                    <td><input type="number" id="" style="width: 50px;" name="<?= $i.'[qty]' ?>" value="<?= $items['qty']; ?>" min="1" class="itemQty"></td>

                                    <td>Rp. &nbsp;<?php echo number_format($items['subtotal']) ?></td>
                                    <td><button type="button" id="<?php echo $items['rowid'] ?>" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
                                </tr>
                                <?php } ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="javascript:history.go(-1)" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="javascript:location.reload()" class="primary-btn up-cart">Update cart</a>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="cart-total">Total <span>Rp. &nbsp;<?php echo number_format($total); ?></span></li>
                                </ul>
                                <a href="<?= base_url().'front_end/Checkout' ?>" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
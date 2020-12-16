<!-- Page body start -->
<div class="page-body">
    <!-- Container-fluid starts -->
    <div class="container">
        <!-- Main content starts -->
        <div>
            <!-- Invoice card start -->
            <div class="card">
                <div class="row invoice-contact">
                    <div class="col-md-8">
                        <div class="invoice-box row">
                            <div class="col-sm-12">
                                <table class="table table-responsive invoice-table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td><img src="<?php echo base_url('assets/back_end/images/logo-blue.png') ?>" class="m-b-10" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>KokaMart</td>
                                        </tr>
                                        <tr>
                                            <td>Jl. PB Sudirman No.90 Kec. Patrang, Kabupaten Jember, Jawa Timur 68118</td>
                                        </tr>
                                        <tr>
                                            <td>iccri@iccri.net</td>
                                        </tr>
                                        <tr>
                                            <td>(62331) 757130</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
                <div class="card-block">
                    <div class="row invoive-info">
                        <div class="col-md-4 col-xs-12 invoice-client-info">
                            <h6>Penerima :</h6>
                            <h6 class="m-0"><?= $dtl['penjualan_penerima']; ?></h6>
                            <p class="m-0 m-t-10"><?= $dtl['penjualan_alamat']; ?></p>
                            <p class="m-0"><?= $dtl['penjualan_telp']; ?></p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <h6>Informasi Pemesanan :</h6>
                            <table class="table table-responsive invoice-table invoice-order table-borderless">
                                <tbody>
                                    <tr>
                                        <th>Tanggal :</th>
                                        <td><?= $dtl['penjualan_tgl']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Pengiriman :</th>
                                        <td>
                                            <?= $dtl['penjualan_kurir']; ?>&nbsp;<?= $dtl['penjualan_layanan']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status :</th>
                                        <td>
                                            <span class="label label-warning"><?= $dtl['penjualan_status']; ?></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <h6 class="m-b-20">ID Penjualan <span><?= $dtl['penjualan_id']; ?></span></h6>
                            <h6 class="text-uppercase text-primary">Total Pembayaran :
                                <span>Rp. <?= $dtl['penjualan_total']; ?></span>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table  invoice-detail-table">
                                    <thead>
                                        <tr class="thead-default">
                                            <th>Produk</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1;
                                            foreach($detail as $data):?>
                                        <tr>
                                            <td><?php echo $data->produk_nama ?></td>
                                            <td><?php echo $data->produk_harga ?></td>
                                            <td><?php echo $data->pdetail_jumlah ?></td>
                                            <td><?php echo $data->penjualan_total ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-responsive invoice-table invoice-total">
                                <tbody>
                                    <tr>
                                        <th>Sub Total :</th>
                                        <td><?= $dtl['pdetail_subtotal']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Biaya Kirim :</th>
                                        <td><?= $dtl['penjualan_biaya']; ?></td>
                                    </tr>
                                    <tr class="text-info">
                                        <td>
                                            <hr>
                                            <h5 class="text-primary">Total :</h5>
                                        </td>
                                        <td>
                                            <hr>
                                            <h5 class="text-primary"><?= $dtl['penjualan_total']; ?></h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h6>Terms And Condition :</h6>
                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Invoice card end -->
            <div class="row text-center">
                <div class="col-sm-12 invoice-btn-group text-center">
                    <a href="<?= site_url() ?>back_end/Penjualan" class="btn btn-inverse" type="cancel">Cancel</a>
                    <a href="<?= site_url() ?>back_end/penjualan/printdtl/<?= $dtl['penjualan_id'] ?>" class="btn btn-primary">Print</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Container ends -->
</div>
                                    <!-- Page body end -->
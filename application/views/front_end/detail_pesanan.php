<!DOCTYPE html>
<html>
<head>
    <title>KokaMart | E-Commerce</title>
    <link rel="shortcut icon" href="<?= base_url('assets/front_end/img/logo_koka.png') ?>">

    <link href="<?php echo base_url('assets/front_end/invoice/bootstrap.min.css') ?>" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url('assets/front_end/invoice/invoice.css') ?>" rel="stylesheet">
</head>
<body>
    <div id="invoice">
        <div class="toolbar hidden-print">
            <div class="text-right">
                <a href="<?php echo base_url('front_end/Pesanan') ?>"><button class="btn btn-secondary">Kembali</button></a>
                <a href="https://wa.me/+6289608560667?text=Saya%20mau%20membatalkan%20pemesanan%20saya.%0AId%20Pemesanan%20%3A%20<?= $dtl['penjualan_id']; ?>%0AMohon%20maaf.%20Terima%20Kasih."><button class="btn btn-danger">Batalkan Pesanan</button></a>
                <a href="https://wa.me/+6289608560667?text=Saya%20mau%20mengkonfirmasi%20pemesanan%20saya.%0AId%20Pemesanan%20%3A%20<?= $dtl['penjualan_id']; ?>%0ATerima%20Kasih."><button class="btn btn-primary">Konfirmasi Pesanan</button></a>
                <button id="printInvoice" class="btn btn-warning"><i class="fa fa-print"></i> Print</button>
            </div>
            <hr>
        </div>
        <div class="invoice overflow-auto">
            <div style="min-width: 600px">
                <header>
                    <div class="row">
                        <div class="col">
                            <a target="_blank" href="https://lobianijs.com">
                                <img style="height: 64px;" src="<?= base_url('assets/front_end/img/kokamart.png') ?>" data-holder-rendered="true" />
                            </a>
                        </div>
                        <div class="col company-details">
                            <h2 class="name">
                                <a target="_blank" href="https://lobianijs.com">
                                    KokaMart
                                </a>
                            </h2>
                            <div>Jl. PB Sudirman No.90 Kec. Patrang, Kabupaten Jember, Jawa Timur 68118</div>
                            <div>(62331) 757130</div>
                            <div>iccri@iccri.net</div>
                        </div>
                    </div>
                </header>
                <main>
                    <div class="row contacts">
                        <div class="col invoice-to">
                            <div class="text-gray-light">Faktur Pemesanan:</div>
                            <h2 class="to"><?= $dtl['penjualan_penerima']; ?></h2>
                            <div class="address"><?= $dtl['penjualan_alamat']; ?></div>
                            <div class="email"><a href="#"><?= $dtl['penjualan_email']; ?></a></div>
                        </div>
                        <div class="col invoice-details">
                            <h1 class="invoice-id"><?= $dtl['penjualan_id']; ?></h1>
                            <div class="date">Tanggal transaksi: <?= $dtl['penjualan_tgl']; ?></div>
                            <div class="date">Status : <span class="badge badge-info"><?= $dtl['penjualan_status']; ?></span></div>
                        </div>
                    </div>
                    <table border="0" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-left">DESCRIPTION</th>
                                <th class="text-right">HARGA</th>
                                <th class="text-right">JUMLAH</th>
                                <th class="text-right">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;
                            foreach($detail as $data):?>
                            <tr>
                                <td class="no"><?= $i++ ?></td>
                                <td class="text-left"><?php echo $data->produk_nama ?></td>
                                <td class="unit">Rp. &nbsp; <?php echo number_format($data->produk_harga); ?></td>
                                <td class="qty"><?php echo $data->pdetail_jumlah ?></td>
                                <td class="total">Rp. &nbsp; <?php echo number_format($data->pdetail_subtotal); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2">SUBTOTAL</td>
                                <td>Rp. &nbsp; <?php echo number_format($dtl['penjualan_keranjang_total']); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2">BIAYA PENGIRIMAN</td>
                                <td>Rp. &nbsp; <?php echo number_format($dtl['penjualan_biaya']); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2">GRAND TOTAL</td>
                                <td>Rp. &nbsp; <?php echo number_format($dtl['penjualan_total']); ?></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="thanks">Terima Kasih!</div>
                    <div class="notices">
                        <div>Catatan:</div>
                        <div class="notice">Apabila dalam 48 jam tidak memproses transaksi, maka transaksi akan dihapus otomatis</div>
                    </div>
                </main>
                <footer>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> | KokaMart
                </footer>
            </div>
            <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
            <div></div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/front_end/invoice/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/invoice/jquery.min.js') ?>"></script>
    <script type="text/javascript">
       $('#printInvoice').click(function(){
        Popup($('.invoice')[0].outerHTML);
        function Popup(data) 
        {
            window.print();
            return true;
        }
    });
</script>
</body>
</html>
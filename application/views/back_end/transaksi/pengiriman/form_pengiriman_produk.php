<div class="col-sm-12">
    <!-- Basic Form Inputs card start -->
    <div class="card">
        <div class="card-header">
            <h4><i class="feather icon-edit"></i>&nbsp;Edit Pengiriman Produk</h4>
            <hr>
        </div>
        <div class="card-block">
            <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('back_end/Pengiriman_produk/edit/'.$row->penjualan_id); ?>">

                <div class="form-group row" hidden>
                    <label class="col-sm-2 col-form-label">Id</label>
                    <div class="col-sm-10">
                        <input type="text" name="penjualan_id" class="form-control" value="<?= $row->penjualan_id; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="customer_nama" class="form-control" value="<?= $row->customer_nama; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="penjualan_status">
                            <option value="<?= $row->penjualan_status; ?>"><?= $row->penjualan_status; ?></option>
                            <option value="">-- PILIH STATUS --</option>
                            <option value="On The Way">On The Way</option>
                            <option value="Arrived">Arrived</option>
                      </select>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kurir</label>
                    <div class="col-sm-10">
                        <input type="text" name="penjualan_kurir" class="form-control" value="<?= $row->penjualan_kurir; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Layanan</label>
                    <div class="col-sm-10">
                        <input type="text" name="penjualan_layanan" class="form-control" value="<?= $row->penjualan_layanan; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Biaya</label>
                    <div class="col-sm-10">
                        <input type="text" name="penjualan_biaya" class="form-control" value="<?= $row->penjualan_biaya; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">RESI</label>
                    <div class="col-sm-10">
                        <input type="text" name="penjualan_resi" class="form-control" value="<?= $row->penjualan_resi; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-10">
                        <a href="<?= site_url() ?>back_end/Pengiriman_produk" class="btn btn-inverse" type="cancel">Cancel</a>
                        <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>
    <!-- Basic Form Inputs card end -->
</div>
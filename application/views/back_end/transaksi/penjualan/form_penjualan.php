<div class="col-sm-12">
    <!-- Basic Form Inputs card start -->
    <div class="card">
        <div class="card-header">
            <h4><i class="feather icon-edit"></i>&nbsp;Edit Penjualan</h4>
            <hr>
        </div>
        <div class="card-block">
            <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('back_end/Penjualan/edit/'.$row->penjualan_id); ?>">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Id</label>
                    <div class="col-sm-10">
                        <input type="text" name="penjualan_id" class="form-control" value="<?= $row->penjualan_id; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="penjualan_penerima" class="form-control" value="<?= $row->penjualan_penerima; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="penjualan_status">
                            <option value="<?= $row->penjualan_status; ?>"><?= $row->penjualan_status; ?></option>
                            <option value="">-- PILIH STATUS --</option>
                            <option value="Process">Process</option>
                            <option value="Rejected">Rejected</option>
                            <option value="Canceled">Canceled</option>
                      </select>
                  </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-10">
                        <a href="<?= site_url() ?>back_end/Penjualan" class="btn btn-inverse" type="cancel">Cancel</a>
                        <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>
    <!-- Basic Form Inputs card end -->
</div>
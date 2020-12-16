<?php
    if($page == 'produk_premium')
    { ?>

<div class="col-sm-12">
    <!-- Basic Form Inputs card start -->
    <div class="card">
        <div class="card-header">
            <h4><i class="feather icon-plus-square"></i>&nbsp;Edit Foto Produk Premium</h4>
            <hr>
        </div>
        <div class="card-block">
            <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('back_end/produk/Premium/edit_img/'.$row->produk_id); ?>">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Id</label>
                    <div class="col-sm-10">
                        <input type="text" name="produk_id" class="form-control" value="<?= $row->produk_id; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="produk_nama" class="form-control" value="<?= $row->produk_nama; ?>"readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" name="produk_img" value="<?= $row->produk_img; ?>" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-10">
                        <a href="<?= site_url() ?>back_end/produk/Premium" class="btn btn-inverse" type="cancel">Cancel</a>
                        <button type="submit" name="edit1" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>
    <!-- Basic Form Inputs card end -->
</div>

<?php }
    else
    {
    ?>

<div class="col-sm-12">
    <!-- Basic Form Inputs card start -->
    <div class="card">
        <div class="card-header">
            <h4><i class="feather icon-edit"></i>&nbsp;Edit Foto Produk Premium</h4>
            <hr>
        </div>
        <div class="card-block">
            <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('back_end/produk/Ukm/edit_img/'.$row->produk_id); ?>">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Id</label>
                    <div class="col-sm-10">
                        <input type="text" name="produk_id" class="form-control" value="<?= $row->produk_id; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="produk_nama" class="form-control" value="<?= $row->produk_nama; ?>"readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" name="produk_img" value="<?= $row->produk_img; ?>" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-10">
                        <a href="<?= site_url() ?>back_end/produk/Ukm" class="btn btn-inverse" type="cancel">Cancel</a>
                        <button type="submit" name="edit2" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>
    <!-- Basic Form Inputs card end -->
</div>

 <?php } ?>
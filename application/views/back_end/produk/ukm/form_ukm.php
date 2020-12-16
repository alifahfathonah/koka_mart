<?php
    if($page == 'add')
    { ?>

<div class="col-sm-12">
    <!-- Basic Form Inputs card start -->
    <div class="card">
        <div class="card-header">
            <h4><i class="feather icon-plus-square"></i>&nbsp;Add Produk UKM / Lainnya</h4>
            <hr>
        </div>
        <div class="card-block">
            
            <form method="POST" enctype="multipart/form-data" action="<?= site_url() ?>back_end/produk/Ukm/add">
                <div class="form-group row" hidden>
                    <label class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="produk_id" value="<?= $kode; ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" name="produk_nama" class="form-control">
                    </div>
                </div>
                <div class="form-group row" hidden>
                    <label class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" name="produk_kategori_id" value="2" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" name="produk_img" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea name="produk_deskripsi" class="ckeditor" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" placeholder="Rp. " name="produk_harga" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">stok</label>
                    <div class="col-sm-10">
                        <input type="number" name="produk_stok" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-10">
                        <a href="<?= site_url() ?>back_end/produk/Ukm" class="btn btn-inverse" type="cancel">Cancel</a>
                        <button type="submit" name="add" class="btn btn-primary">Submit</button>
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
            <h4><i class="feather icon-edit"></i>&nbsp;Edit Produk UKM / Lainnya</h4>
            <hr>
        </div>
        <div class="card-block">
            <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('back_end/produk/Ukm/edit/'.$row->produk_id); ?>">

                <div class="form-group row" hidden>
                    <label class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="produk_id" value="<?= $row->produk_id; ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" name="produk_nama" value="<?= $row->produk_nama; ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row" hidden>
                    <label class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" name="produk_kategori_id" value="<?= $row->produk_kategori_id; ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea name="produk_deskripsi" class="ckeditor" class="form-control"><?= $row->produk_deskripsi; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" placeholder="Rp. " name="produk_harga" value="<?= $row->produk_harga; ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">stok</label>
                    <div class="col-sm-10">
                        <input type="number" name="produk_stok" value="<?= $row->produk_stok; ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-10">
                        <a href="<?= site_url() ?>back_end/produk/Ukm" class="btn btn-inverse" type="cancel">Cancel</a>
                        <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>
    <!-- Basic Form Inputs card end -->
</div>

 <?php } ?>
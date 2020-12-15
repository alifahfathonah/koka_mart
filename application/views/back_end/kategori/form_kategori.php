<?php
    if($page == 'add')
    { ?>

<div class="col-sm-12">
    <!-- Basic Form Inputs card start -->
    <div class="card">
        <div class="card-header">
            <h4><i class="feather icon-plus-square"></i>&nbsp;Add Kategori</h4>
            <hr>
        </div>
        <div class="card-block">
            
            <form method="POST" enctype="multipart/form-data" action="<?= site_url() ?>back_end/Kategori/add">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" name="kategori_nama" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea name="kategori_keterangan" class="form-control" style="height: 100px;"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-10">
                        <a href="<?= site_url() ?>back_end/Kategori" class="btn btn-inverse" type="cancel">Cancel</a>
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
            <h4><i class="feather icon-edit"></i>&nbsp;Edit Kategori</h4>
            <hr>
        </div>
        <div class="card-block">
            <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('back_end/Kategori/edit/'.$row->kategori_id); ?>">

                <div class="form-group row" hidden>
                    <label class="col-sm-2 col-form-label">Id</label>
                    <div class="col-sm-10">
                        <input type="text" name="kategori_id" class="form-control" value="<?= $row->kategori_id; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="kategori_nama" class="form-control" value="<?= $row->kategori_nama; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea name="kategori_keterangan" class="form-control" style="height: 100px;"><?= $row->kategori_keterangan; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-10">
                        <a href="<?= site_url() ?>back_end/Kategori" class="btn btn-inverse" type="cancel">Cancel</a>
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
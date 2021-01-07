<!-- Page-header start -->
<div class="page-header">
	<div class="row align-items-end">
		<div class="col-lg-7">
			<div class="page-header-title">
				<div class="d-inline">
					<h4>Produk UKM dan Lainnya</h4>
					<span>Management Data Produk UKM dan lainnya</span>
				</div>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="page-header-breadcrumb">
				<ul class="breadcrumb-title">
					<li class="breadcrumb-item">
						<a href="<?php echo base_url('admin') ?>"> <i class="feather icon-home"></i> </a>
					</li>
					<li class="breadcrumb-item"><a href="#!">Data Master</a>
					</li>
					<li class="breadcrumb-item"><a href="#!">Data Produk</a>
					</li>
					<li class="breadcrumb-item"><a href="<?php echo base_url('back_end/produk/Ukm') ?>">UKM dan Lainnya</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
	<!-- DOM/Jquery table start -->
	<div class="card">
		
		<div class="card-block">
			<div class="btn-group" style="margin-bottom: 15px;">
				<a class="btn btn-primary" href="<?= site_url() ?>back_end/produk/Ukm/add">
					Add Data &nbsp;<i class="feather icon-plus"></i>
				</a>
			</div>

			<?= $this->session->flashdata('pesan'); ?>

			<div class="table-responsive dt-responsive">
				<table id="dom-jqry" class="table table-striped table-bordered nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Foto</th>
							<th>Harga</th>
							<th>Update</th>
							<th>Ubah</th>
							<th>Hapus</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i=1;
						foreach ($ukm as $data):?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?php echo $data->produk_nama; ?></td>
								<td align="center"><a href="<?= base_url('assets/upload/produk/'.$data->produk_img) ?>" data-fancybox data-caption="Produk UKM / Lainnya"> <img style="height: 50px; width: 50px;" src="<?= base_url('assets/upload/produk/'.$data->produk_img) ?>"></a>&nbsp;&nbsp;&nbsp;
                                        <a class="edit_img" href="<?= site_url(); ?>back_end/produk/Ukm/edit_img/<?= $data->produk_id ?>"><i class="fa fa-edit">Ganti</i></a></td>
								<td>Rp.<?php echo number_format($data->produk_harga); ?></td>
								<td><?php echo $data->produk_update; ?></td>

								<!--<td><button class="btn btn-info" data-toggle="modal" data-target="#modalDetail<?= $data->produk_id; ?>"><i class="feather icon-info"></i></button></td>-->

								<td><a class="edit" href="<?= site_url(); ?>back_end/produk/Ukm/edit/<?= $data->produk_id ?>"><button class="btn btn-success"><i class="feather icon-edit"></i></button></a></td>

								<td><a class="delete" onclick="deleteConfirm('<?= site_url(); ?>back_end/produk/Ukm/delete/<?= $data->produk_id ?>')" href="#!"><button class="btn btn-danger"><i class="feather icon-trash"></i></button></a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- DOM/Jquery table end -->
</div>

<!-- Modal -->
<!--
<?php foreach($ukmModal as $i):?>
<div class="modal fade" id="modalDetail<?= $i['produk_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><b><?= $i['produk_nama'] ?></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
            <tr>
                <td>Kategori</td>
                <td><?= $i['kategori_nama'] ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><?= $i['produk_harga'] ?></td>
            </tr>
            <tr>
                <td>Data Input</td>
                <td><?= $i['produk_input'] ?></td>
            </tr>
            <tr>
                <td>Data Update</td>
                <td><?= $i['produk_update'] ?></td>
            </tr>
            
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
-->
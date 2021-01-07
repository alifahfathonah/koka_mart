<!-- Page-header start -->
<div class="page-header">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<div class="d-inline">
					<h4>Kategori</h4>
					<span>Management Data Kategori</span>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="page-header-breadcrumb">
				<ul class="breadcrumb-title">
					<li class="breadcrumb-item">
						<a href="<?php echo base_url('admin') ?>"> <i class="feather icon-home"></i> </a>
					</li>
					<li class="breadcrumb-item"><a href="#!">Data Master</a>
					</li>
					<li class="breadcrumb-item"><a href="<?php echo base_url('back_end/Kategori') ?>">Data Kategori</a>
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
				<!--<a class="btn btn-primary" href="<?= site_url() ?>back_end/kategori/add">
					Add Data &nbsp;<i class="feather icon-plus"></i>
				</a>-->
			</div>

			<?= $this->session->flashdata('pesan'); ?>

			<div class="table-responsive dt-responsive">
				<table id="dom-jqry" class="table table-striped table-bordered nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Keterangan</th>
							<th>Ubah</th>
							<!--<th>Hapus</th>-->
						</tr>
					</thead>
					<tbody>
						<?php 
						$i=1;
						foreach ($kategori as $data):?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?php echo $data->kategori_nama; ?></td>
								<td><?php echo $data->kategori_keterangan; ?></td>
								<td><a class="edit" href="<?= site_url(); ?>back_end/Kategori/edit/<?= $data->kategori_id ?>"><button class="btn btn-success"><i class="feather icon-edit"></i></button></a></td>
								<!--<td><a class="delete" onclick="deleteConfirm('<?= site_url(); ?>back_end/Kategori/delete/<?= $data->kategori_id ?>')" href="#!"><button class="btn btn-danger"><i class="feather icon-trash"></i></button></a></td>-->
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- DOM/Jquery table end -->
</div>
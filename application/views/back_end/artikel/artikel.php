<!-- Page-header start -->
<div class="page-header">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<div class="d-inline">
					<h4>Artikel</h4>
					<span>Management Data Artikel</span>
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
					<li class="breadcrumb-item"><a href="<?php echo base_url('back_end/Artikel') ?>">Data Artikel</a>
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
				<a class="btn btn-primary" href="<?= site_url() ?>back_end/Artikel/add">
					Add Data &nbsp;<i class="feather icon-plus"></i>
				</a>
			</div>

			<?= $this->session->flashdata('pesan'); ?>

			<div class="table-responsive dt-responsive">
				<table id="dom-jqry" class="table table-striped table-bordered nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Penulis</th>
							<th>Dibuat</th>
							<th>Diedit</th>
							<th>Ubah</th>
							<th>Hapus</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i=1;
						foreach ($artikel as $data):?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?php echo substr($data->artikel_judul,0,15) ?></td>
								<td><?php echo substr($data->artikel_penulis,0,10) ?></td>
								<td><?php echo $data->artikel_created; ?></td>
								<td><?php echo $data->artikel_update; ?></td>
								<td><a class="edit" href="<?= site_url(); ?>back_end/Artikel/edit/<?= $data->artikel_id ?>"><button class="btn btn-success"><i class="feather icon-edit"></i></button></a></td>
								<td><a class="delete" onclick="deleteConfirm('<?= site_url(); ?>back_end/Artikel/delete/<?= $data->artikel_id ?>')" href="#!"><button class="btn btn-danger"><i class="feather icon-trash"></i></button></a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- DOM/Jquery table end -->
</div>
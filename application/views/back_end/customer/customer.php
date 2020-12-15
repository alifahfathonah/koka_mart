<!-- Page-header start -->
<div class="page-header">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<div class="d-inline">
					<h4>Customer</h4>
					<span>Management Data Customer</span>
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
					<li class="breadcrumb-item"><a href="<?php echo base_url('back_end/Customer') ?>">Data Customer</a>
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
			<?= $this->session->flashdata('pesan'); ?>
			<div class="table-responsive dt-responsive">
				<table id="dom-jqry" class="table table-striped table-bordered nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>No Hp</th>
							<th>Email</th>
							<th>Status</th>
							<th>Detail</th>
							<th>Hapus</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i=1;
						foreach ($customer as $data):?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?php echo $data->customer_nama; ?></td>
								<td><?php echo $data->customer_nohp; ?></td>
								<td><?php echo $data->customer_email; ?></td>
								<td><?php if ($data->customer_status == 1) {
                                                            echo 'Aktif';
                                                        } else {
                                                            echo 'Tidak Aktif';
                                                        }
                                                        ?></td>
								<td><button class="btn btn-info" data-toggle="modal" data-target="#modalDetail<?= $data->customer_id; ?>"><i class="feather icon-info"></i></button></td>
								<td><a class="delete" onclick="deleteConfirm('<?= site_url(); ?>back_end/Customer/delete/<?= $data->customer_id ?>')" href="#!"><button class="btn btn-danger"><i class="feather icon-trash"></i></button></a></td>
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
<?php foreach($customerModal as $i):?>
	<div class="modal fade" id="modalDetail<?= $i['customer_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle"><b><?= $i['customer_id'] ?>&nbsp;<?= $i['customer_nama'] ?></b></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table class="table table-bordered">
						<tr>
							<td>ID</td>
							<td><?= $i['customer_nama'] ?></td>
						</tr>
						<tr>
							<td>No Hp</td>
							<td><?= $i['customer_nohp'] ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><?= $i['customer_alamat'] ?></td>
						</tr>
						<tr>
							<td>Kota</td>
							<td><?= $i['customer_kota'] ?></td>
						</tr>
						<tr>
							<td>Provinsi</td>
							<td><?= $i['customer_provinsi'] ?></td>
						</tr>
						<tr>
							<td>Kode Pos</td>
							<td><?= $i['customer_kodepos'] ?></td>
						</tr>
						<tr>
							<td>Akun Dibuat</td>
							<td><?= $i['customer_created'] ?></td>
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
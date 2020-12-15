<!-- Page-header start -->
<div class="page-header">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<div class="d-inline">
					<h4>Dashboard</h4>
					<span>Informasi terbaru diupdate : <?php echo date('d F Y H:i:s'); ?></span>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="page-header-breadcrumb">
				<ul class="breadcrumb-title">
					<li class="breadcrumb-item">
						<a href="<?php echo base_url('admin') ?>"> <i class="feather icon-home"></i> </a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="page-body">
	<div class="row">
		<!-- Page-header end -->

		<!-- task, page, download counter  start -->
		<div class="col-xl-3 col-md-6">
			<div class="card bg-c-yellow update-card">
				<div class="card-block">
					<div class="row align-items-end">
						<div class="col-8">
							<h4 class="text-white">$30200</h4>
							<h6 class="text-white m-b-0">Profit</h6>
						</div>
						<div class="col-4 text-right">
							<canvas id="update-chart-1" height="50"></canvas>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-c-green update-card">
				<div class="card-block">
					<div class="row align-items-end">
						<div class="col-8">
							<h4 class="text-white">290+</h4>
							<h6 class="text-white m-b-0">Pesanan</h6>
						</div>
						<div class="col-4 text-right">
							<canvas id="update-chart-2" height="50"></canvas>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-c-pink update-card">
				<div class="card-block">
					<div class="row align-items-end">
						<div class="col-8">
							<h4 class="text-white">145</h4>
							<h6 class="text-white m-b-0">Terjual</h6>
						</div>
						<div class="col-4 text-right">
							<canvas id="update-chart-3" height="50"></canvas>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-c-lite-green update-card">
				<div class="card-block">
					<div class="row align-items-end">
						<div class="col-8">
							<h4 class="text-white">500</h4>
							<h6 class="text-white m-b-0">Customer</h6>
						</div>
						<div class="col-4 text-right">
							<canvas id="update-chart-4" height="50"></canvas>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
				</div>
			</div>
		</div>
		<!-- task, page, download counter  end -->

		<div class="col-xl-6 col-md-12">
			<div class="card table-card">
				<div class="card-header">
					<h5>Data Penjualan Produk Premium</h5>
				</div>
				<div class="card-block">
					<div class="table-responsive">
						<table class="table table-hover table-borderless">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama</th>
									<th>Jumlah</th>
									<th class="text-right">Pendapatan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Kopi A</td>
									<td>3</td>
									<td class="text-right">xxx</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Kopi B</td>
									<td>10</td>
									<td class="text-right">xxx</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Coklat A</td>
									<td>11</td>
									<td class="text-right">xxx</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Coklat B</td>
									<td>41</td>
									<td class="text-right">xxx</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Olahan A</td>
									<td>11</td>
									<td class="text-right">xxx</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-md-12">
			<div class="card table-card">
				<div class="card-header">
					<h5>Data Penjualan Produk UKM / Lainnya</h5>
				</div>
				<div class="card-block">
					<div class="table-responsive">
						<table class="table table-hover table-borderless">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama</th>
									<th>Jumlah</th>
									<th class="text-right">Pendapatan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Olahan A</td>
									<td>3</td>
									<td class="text-right">xxx</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Olahan B</td>
									<td>10</td>
									<td class="text-right">xxx</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Olahan C</td>
									<td>11</td>
									<td class="text-right">xxx</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Olahan D</td>
									<td>41</td>
									<td class="text-right">xxx</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Olahan E</td>
									<td>11</td>
									<td class="text-right">xxx</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="text-right  m-r-20">
						<a href="#!" class="b-b-primary text-primary">View all Sales Locations </a>
					</div>
				</div>
			</div>
		</div>


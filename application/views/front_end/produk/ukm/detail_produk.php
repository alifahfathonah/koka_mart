<?php foreach($detail_produk as $row){?>

<?php } ?>

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-text">
					<a href="<?php echo base_url('Home') ?>"><i class="fa fa-home"></i> Home</a>
					<span><?php echo $row->kategori_nama; ?></span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="blog-details-inner">
					<div class="posted-by" style="display: inline-block; width: 100%;">
						<div class="pb-pic">
							<a href="<?= base_url('assets/upload/produk/'.$row->produk_img) ?>" data-fancybox data-caption="<?php echo $row->produk_nama; ?>"><img style="height: 330px; width: 270px; margin-top: 5px; margin-right: 10px;" src="<?= base_url('assets/upload/produk/'.$row->produk_img) ?>" alt="" class="img-fluid"></a>
						</div>
						<div class="pb-text">
							<a href="#">
								<h4><b><?php echo $row->produk_nama; ?></b></h4>
							</a>
							<table class="table table-hover" style="margin-top: 20px; width: auto;">
								<tr>
									<td>Kategori</td>
									<td><?php echo $row->kategori_nama; ?></td>
								</tr>
								<tr>
									<td>Stok</td>
									<td><?php echo $row->produk_stok; ?></td>
								</tr>
								<tr>
									<td>Harga</td>
									<td>Rp. <?php echo number_format($row->produk_harga); ?></td>
								</tr>
							</table>
							<p style="margin-top: 5px;"><?php echo htmlspecialchars_decode(htmlspecialchars_decode($row->produk_deskripsi)); ?></p>
							<div style="float: right; margin-top: 20px;">
								<p style="color: red; font-size: 15px;">Terakhir diperbarui : <?php $date = date_create ($row->produk_update); echo date_format ($date, "d F Y h:i"); ?>&nbsp;WIB
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="cart-buttons">
							<a href="<?php echo base_url('front_end/produk/Ukm') ?>" class="primary-btn continue-shop">Kembali Berbelanja</a>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-2 offset-lg-6" style="margin-top: 10px;">
								Qty :
								<input style="width: 50px;" type="number" name="quantity" id="<?php echo $row->produk_id;?>" value="1" class="quantity">
							</div>
							<div class="col-lg-4">
								<div class="proceed-checkout">
									<button class="add_cart proceed-btn" data-produkid="<?php echo $row->produk_id;?>" data-produknama="<?php echo $row->produk_nama;?>" data-produkharga="<?php echo $row->produk_harga;?>" data-produkimg="<?php echo $row->produk_img;?>" data-produkkategoriid="<?php echo $row->produk_kategori_id;?>">Tambah Ke Keranjang</button>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
    <!-- Blog Details Section End -->
    <!--
    	<div class="row">
								<div class="col-lg-3 col-sm-6">
									<div class="product-item">
										<div class="pi-pic">
											<img style="height: 330px; width: 270px;" src="<?php echo site_url('assets/upload/produk/'.$row->produk_img) ?>" alt="">
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="product-item">
										<div class="pi-pic">
											<img style="height: 330px; width: 270px;" src="<?php echo site_url('assets/upload/produk/'.$row->produk_img) ?>" alt="">
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="product-item">
										<div class="pi-pic">
											<img style="height: 330px; width: 270px;" src="<?php echo site_url('assets/upload/produk/'.$row->produk_img) ?>" alt="">
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="product-item">
										<div class="pi-pic">
											<img style="height: 330px; width: 270px;" src="<?php echo site_url('assets/upload/produk/'.$row->produk_img) ?>" alt="">
										</div>
									</div>
								</div>
							</div>
							-->
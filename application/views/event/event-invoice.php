<?php $this->load->view('_partial/e_head') ?>


<body>
	<!-- Header Section Begin -->
	<?php $this->load->view('_partial/e_header') ?>
	<!-- Header Section End -->

	<!-- Breadcrumb Begin -->
	<div class="breadcrumb-option">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb__links">
						<a href="<?= base_url() ?>"><i class="fa fa-home"></i> Home</a>

						<span>INVOICE</span>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb End -->


	<!-- Invoice Section Begin -->
	<section class="checkout spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="checkout__order">
						<h5>INVOICE</h5>

						<div class="checkout__order__product">
							<ul>
								<li>
									<span class="top__text">Metode Bayar</span>
								</li>
							</ul>
						</div>
						<div class="checkout__order__product">
							<ul>
								<li>
									<span class="top__text"><?= $invoice->nama_bank ?> </span>
								</li>
								<li>
									<span class="top__text"> <?= $invoice->nomor_rekening ?> </span>
								</li>
								<li> A.n <?= $invoice->nama_pemilik ?> </li>
							</ul>
						</div>
						<div class="checkout__order__total">
							<ul>
								<li>Subtotal <span>Rp<?= $invoice->total_bayar ?> </span></li>
							</ul>
						</div>

						<?php
						if (!$invoice->bukti_bayar) : ?>
							<form action="<?= base_url('event/kirim_bukti') ?>" method="POST" class="checkout__form" enctype="multipart/form-data">
								<input type="hidden" name="kode" value="<?= $invoice->kode_pesanan ?>">
								<label for="">Upload Bukti</label>
								<input type="file" name="berkas" class="image-preview-filepond" accept="image/png, image/jpeg, image/jpg, image/gif" />
								<input type="submit" name="kirim_bukti" class="site-btn" value="Konfirmasi"></input>
							</form>
						<?php else : ?>
							<a href="<?= base_url('member/dashboard') ?>" class="site-btn text-center btn text-white">Tiket Saya </a>

						<?php endif; ?>

					</div>
				</div>
				<div class="col-lg-8">
					<h5>#<?= $invoice->kode_pesanan ?>
						<p>dipesan pada : </p>
					</h5>
					<div class="row">
						<div class="col-lg-8">
							<div class="mb-5">
								<img data-hash="product-1" class="product__big__img" src="<?= base_url('assets/images/event/') . $invoice->banner ?>" alt="" />
							</div>
							<h4><?= $invoice->judul_event ?></h4>
							<span><?= $invoice->jumlah_tiket ?></span>
						</div>
						<div class="col-lg-4">
							<div class="product__details__text">
								<h5>Jadwal dan lokasi</h5>
								<p>
									<i class="fa fa-calendar mr-4"></i>
									<span><?= date('d', strtotime($invoice->tanggal_mulai)) ?> - <?= date('d M Y', strtotime($invoice->tanggal_akhir)) ?> </span>
								</p>
								<p>
									<i class="fa fa-clock-o mr-4"></i>
									<span><?= date('H I s', strtotime($invoice->waktu_mulai)) ?> - <?= date('H I s', strtotime($invoice->waktu_akhir)) ?> </span>
								</p>
								<p>
									<i class="fa fa-map-pin mr-4"></i>
									<span><?= $invoice->lokasi ?></span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- Invoice Section End -->


	<?php $this->load->view('_partial/e_footer') ?>
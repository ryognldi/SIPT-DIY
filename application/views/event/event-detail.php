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
						<a href="./index.html"><i class="fa fa-home"></i> Home</a>

						<span><?= $event->judul_event ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb End -->

	<!-- Product Details Section Begin -->
	<section class="product-details spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="product__details__pic__slider owl-carousel">
						<img data-hash="product-1" class="product__big__img" src="<?= base_url('assets/images/event/') . $event->banner ?>" alt="" />
					</div>
				</div>
				<div class="col-lg-6">
					<div class="product__details__text">
						<h3><?= $event->judul_event ?></h3>
						<h6><?= date('d', strtotime($event->tanggal_mulai)) ?> - <?= date('d F Y', strtotime($event->tanggal_akhir)) ?></h6>
						<p>
							<i class="fa fa-map-pin mr-4"></i>
							<span><?= $event->lokasi ?></span>
						</p>
						<div class="product__details__button mt-3">
							<a href="<?= base_url('event/o/') . $event->id_event  ?> " class="cart-btn d-block">BELI TIKET</a>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="product__details__tab">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Syarat & Ketentuan</a>
							</li> -->
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tabs-1" role="tabpanel">
								<h6>Description</h6>
								<p>
									<?= $event->deskripsi ?> </p>
							</div>
							<!-- <div class="tab-pane" id="tabs-2" role="tabpanel">
								<h6>Syarat & Ketentuan</h6>
								<p></p>
								<ul>
									<li>
										Maksimum pembelian 4 (empat) tiket dalam satu transaksi.
									</li>
									<li>
										WAJIB membawa KTP, paspor atau identitas diri lainnya.
										Tanda identitas diri akan dicek sebelum memasuki area
									</li>
									<li>
										E-Voucher tidak dapat dipindah-tangankan dan wajib ditukar
										dengan tiket yang sah di tempat acara.
									</li>
									<li>
										Tiket yang sudah dibeli tidak dapat ditukar, dikembalikan,
										atau diuangkan.
									</li>
								</ul>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php $this->load->view('_partial/e_footer') ?>
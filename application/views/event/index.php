<?php $this->load->view('_partial/e_head') ?>

<body>

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Begin -->
	<div class="offcanvas-menu-overlay"></div>
	<div class="offcanvas-menu-wrapper">
		<div class="offcanvas__close">+</div>

		<div id="mobile-menu-wrap"></div>

	</div>
	<!-- Offcanvas Menu End -->

	<!-- Header Section Begin -->
	<?php $this->load->view('_partial/e_header') ?>

	<!-- Header Section End -->

	<section class="banner set-bg" data-setbg="<?= base_url() ?>assets/images/ayang.png">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 col-lg-8 m-auto">
					<div class="banner__slider owl-carousel">
						<div class="banner__item">
							<div class="banner__text">
								<span class="text-white">AYANG</span>
								<h1 class="text-white">Cari Tiket untuk Ayang</h1>
								<a href="#" class="text-white">Beli in Ayang tiket</a>
							</div>
						</div>
						<div class="banner__item">
							<div class="banner__text">
								<span class="text-white">AYANG</span>
								<h1 class="text-white">Nonton Bareng Ayang</h1>
								<a href="#" class="text-white">Beli in Ayang tiket</a>
							</div>
						</div>
						<div class="banner__item">
							<div class="banner__text">
								<span class="text-white">AYANG</span>
								<h1 class="text-white">Cari Tiket untuk Ayang</h1>
								<a href="#" class="text-white">Beli in Ayang tiket</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner Section End -->

	<!-- Product Section Begin -->
	<section class="product spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="section-title">
						<h4>Daftar Event</h4>
					</div>
				</div>
				<!-- <div class="col-lg-8 col-md-8">
					<ul class="filter__controls">
						<li class="active" data-filter="*">Top 10</li>
						<li data-filter=".women">Konser Musik</li>
					</ul>
				</div> -->
			</div>
			<div class="row property__gallery">
				<?php foreach ($event as $event) : ?>
					<div class="col-lg-3 col-md-4 col-sm-6 mix women">
						<div class="product__item">
							<div class="product__item__pic set-bg" data-setbg="<?= base_url() ?>assets/images/event/<?= $event['banner'] ?>">
								<div class="label new"><?= date('d F Y', strtotime($event['tanggal_mulai'])) ?></div>
							</div>
							<div class="product__item__text ">
								<div class="product__price">
									<a href="<?= base_url() ?>event/detail/<?= $event['id_event'] ?>"><?= $event['judul_event'] ?> </a>
								</div>
								<h6 class="text-bold"> <i class="me-3 fa fa-map-pin"></i> <?= $event['lokasi'] ?></h6>
								<h6 class="text-bold"><?= $event['deskripsi'] ?></h6>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!-- Product Section End -->


	<?php $this->load->view('_partial/e_footer') ?>
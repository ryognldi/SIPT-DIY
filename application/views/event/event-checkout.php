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

						<span>INVOCICE</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb End -->

	<!-- Checkout Section Begin -->
	<section class="checkout spad">
		<div class="container">
			<form action="<?= base_url() ?>event/doInvoice" method="POST" class="checkout__form">
				<div class="row">
					<div class="col-lg-8">
						<h5>Detail Pesanan</h5>
						<div class="row">
							<div class="col-lg-12 col-md-6 col-sm-6">
								<div class="checkout__form__input">
									<p>Nama Lengkap<span>*</span></p>
									<input type="text" name="nama" placeholder="masukan nama" />
								</div>
							</div>

							<div class="col-lg-12">
								<div class="checkout__form__input">
									<p>Nomor Ponsel <span>*</span></p>
									<input type="text" name="no_hp" placeholder="masukan no hp" />
								</div>
								<div class="checkout__form__input">
									<p>Email <span>*</span></p>
									<input type="text" name="email" placeholder="masukan email" />
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="checkout__order">
							<h5>Pesanan</h5>
							<div class="checkout__order__product">
								<ul>
									<li>
										<span class="top__text">Product</span>
										<span class="top__text__right">Total</span>
									</li>
									<li><?= $event['name'] ?> <span><?= $event['qty'] ?> x <?= $event['price'] ?></span></li>
								</ul>
							</div>
							<div class="checkout__order__total">
								<ul>
									<li>Subtotal <span>Rp <?= $event['total'] ?></span></li>
								</ul>
							</div>
							<div class="checkout__order__widget">
								<label for="metode">
									METODE PEMBAYARAN *
								</label>
								<select name="metode_bayar" id="metode_bayar" class="form-control form-control-sm">
									<?php foreach ($bank as $bank) : ?>
										<option value="<?= $bank->id_bank ?>" selected> <?= $bank->nama_bank ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<input type="hidden" name="tiket_id" value="<?= $event['tiket_id'] ?>">
							<input type="hidden" name="jumlah_tiket" value="<?= $event['qty'] ?>">
							<input type="hidden" name="jumlah_tiket" value="<?= $event['qty'] ?>">
							<input type="hidden" name="total_bayar" value="<?= $event['total'] ?>">
							<button class="site-btn">Beli Tiket</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
	<!-- Checkout Section End -->


	<?php $this->load->view('_partial/e_footer') ?>
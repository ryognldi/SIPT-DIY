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

	<!-- Shop Cart Section Begin -->
	<section class="shop-cart spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="shop__cart__table">
						<table>
							<thead>
								<tr>
									<th>Jenis Kategori</th>
									<th>Harga</th>
									<th>Jumlah tiket</th>
									<th>Total</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="cart__product__item">
										<div class="cart__product__item__title">
											<h6><?= $event->nama ?></h6>
											<span><?= $event->deskripsi ?></span>
										</div>
									</td>
									<td class="cart__price"> <?= $event->harga ?></td>
									<td class="cart__quantity">
										<input style="border: none;width: 110px;" name="qty" value="1" type="number" min="1" max="5" />
										<!-- <div class="pro-qty">
										</div> -->
									</td>
									<td class="cart__total"></td>

								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="cart__btn">
						<form action="<?= base_url('event/checkout') ?>" method="post">
							<input type="text" name="id" value="<?= $event->id_tiket ?>">
							<input type="text" name="name" value="<?= $event->nama ?>">
							<input type="text" name="price" value="<?= $event->harga ?>">
							<input type="text" name="qty">
							<input type="text" name="total">
							<button class="btn btn-sm btn-primary">BELI TIKET</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Shop Cart Section End -->



	<?php $this->load->view('_partial/e_footer') ?>
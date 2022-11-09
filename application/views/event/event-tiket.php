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

                        <span>E TIKET</span>

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
                <?php foreach ($invoice as $invoice) : ?>
                    <div class="col-lg-3 mb-3">
                        <div class="mb-5">
                            <img data-hash="product-1" class="product__big__img" src="<?= base_url('assets/images/event/') . $invoice['banner'] ?>" alt="" />
                        </div>
                        <p>Kode Tiket</p>
                        <h4><?= $invoice['kode_tiket'] ?></h4>
                    </div>

                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <!-- Invoice Section End -->




    <?php $this->load->view('_partial/e_footer') ?>
<!-- headers -->
<?php $this->load->view('_partial/head') ?>
<!-- headers -->

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">


                <!-- sidebar-header -->
                <?php $this->load->view('_partial/sidebar-header') ?>
                <!-- sidebar-header -->


                <!-- sidebar-menu -->
                <?php $this->load->view('_partial/sidebar-menu') ?>
                <!-- sidebar-menu -->
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>


            <div class="page-heading">
                <h3>Hallo , <?= $member->nama ?></h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-6 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body py-4 px-4">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl">
                                                <!-- <i class="iconly-boldBookmark"></i> -->
                                                <img src="<?= base_url() ?>assets/images/faces/1.jpg" alt="Face 1">
                                            </div>
                                            <div class="ms-3 name">
                                                <h5 class="font-bold"><?= $member->nama ?></h5>
                                                <h6 class="text-muted mb-0"> <?= $member->email ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red mb-2">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-8 ">
                                                <h6 class="text-muted font-semibold">Event saya</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($event) ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>EVENT KAMU</h3>

                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <!-- <li class="breadcrumb-item"><a href="<?= base_url() ?>creator/addEvent" class="btn btn-md btn-primary">Add Event</a></li> -->
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <?php if (!$event) : ?>
                        <div class="col-xl-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <h3>EVENT KAMU MASIH KOSONG NIH</h3>
                                    </div>
                                </div>

                            </div>
                        </div>

                    <?php endif ?>
                    <?php foreach ($event as $event) : ?>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <!-- <img src="<?= base_url() ?>assets/images/event/<?= $event['banner'] ?>" class="card-img-top img-fluid" style="height: 300px"> -->
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $event['judul_event'] ?></h5>
                                        <p class="card-text">
                                            <?= date('d F Y', strtotime($event['tanggal_mulai']))  ?> -<?= date('d F Y', strtotime($event['tanggal_akhir'])) ?> </p>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"> <i class="fa fa-map-pin"></i> <?= $event['lokasi'] ?> </li>
                                    <li class="list-group-item"> <?= $event['deskripsi'] ?> </li>
                                </ul>
                                <?php if ($event['status_bayar']) : ?>
                                    <form action="<?= base_url('event/e_tiket/') . $event['kode_pesanan'] ?>" method="GET" class="checkout__form" style="display:contents ;">
                                        <button type=" submit" class="btn btn-primary btn-md "> E-tiket </button>
                                    </form>
                                <?php else : ?>
                                    <span id="lunas" class="badge bg-light-success p-3">Menunggu Konfirmasi</span>

                                <?php endif ?>
                                <!-- <button class="btn btn-primary block">Detail Event now</button> -->
                            </div>
                        </div>
                    <?php endforeach; ?>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p> &copy; nonton bareng ayang di nonton bareng</p>
                    </div>

                </div>
            </footer>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/js/app.js"></script>
    <script src="<?= base_url() ?>assets/extensions/jquery/jquery.min.js"></script>


</body>

</html>
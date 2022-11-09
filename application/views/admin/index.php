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
        <div id="main" class="layout-navbar">
            <!-- header -->
            <?php $this->load->view('_partial/header') ?>
            <!-- header -->

            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <h3>SIPT - DIY <?= $this->session->userdata('role') ?></h3>
                    </div>
                    <section class="section">
                        <div class="col-12 col-lg-12">
                            <div class="row">
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body py-4 px-4">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-lg">
                                                    <img src="<?= base_url() ?>assets/images/faces/1.jpg" alt="Face 1" />
                                                </div>
                                                <div class="ms-3 name">
                                                    <h5 class="font-bold">Balance</h5>
                                                    <h6 class="text-muted mb-0">Rp 100.00,-</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body py-4 px-4">
                                            <div class="d-flex align-items-center">
                                                <div class="stats-icon purple mb-2">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                                <div class="ms-3 name">
                                                    <h5 class="font-bold">Users</h5>
                                                    <h6 class="text-muted mb-0">100</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body py-4 px-4">
                                            <div class="d-flex align-items-center">
                                                <div class="stats-icon blue mb-2">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                                <div class="ms-3 name">
                                                    <h5 class="font-bold">Creator</h5>
                                                    <h6 class="text-muted mb-0">25</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body py-4 px-4">
                                            <div class="d-flex align-items-center">
                                                <div class="stats-icon green mb-2">
                                                    <i class="iconly-boldPaper-Plus"></i>
                                                </div>
                                                <div class="ms-3 name">
                                                    <h5 class="font-bold">Transaksi</h5>
                                                    <h6 class="text-muted mb-0">76</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>&copy; 2021</p>
                        </div>
                        <div class="float-end">
                            <p>PROJECT PENGMBANGAN PERANGKAT LUNAK</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/js/app.js"></script>

    <script src="<?= base_url() ?>assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>

    <script src="<?= base_url() ?>assets/js/pages/datatables.js"></script>
</body>

</html>
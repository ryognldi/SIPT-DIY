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
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <nav aria-label="breadcrumb" class="breadcrumb-header">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">Dashbord</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Daftar Creator
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive-sm">
                                    <table class="table" id="table1">
                                        <thead>
                                            <tr>
                                                <th>Users</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($creator as $creator) : ?>
                                                <tr>
                                                    <td class="col-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-md">
                                                                <img src="<?= base_url() ?>assets/images/faces/5.jpg" />
                                                                <span class="avatar-status bg-success"></span>
                                                            </div>
                                                            <p class="font-bold ms-3 mb-0"><?= $creator->nama_creator ?></p>
                                                        </div>
                                                    </td>
                                                    <td><?= $creator->id_creator ?></td>
                                                    <td><?= $creator->no_hp ?></td>
                                                    <td>
                                                        <form action="<?= base_url('admin/creator/') . $creator->nama_creator ?>" method="post">

                                                            <input type="text" name="id" value="<?= $creator->id_creator ?>">
                                                            <button class="btn icon icon-left btn-info btn-sm"><i data-feather="info"></i> Detail</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
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
</body>

</html>
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
                <h3>Hallo , <?= $creator->nama ?></h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body py-4 px-4">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl">
                                                <img src="<?= base_url() ?>assets/images/faces/1.jpg" alt="Face 1">
                                            </div>
                                            <div class="ms-3 name">
                                                <h5 class="font-bold"><?= $creator->nama ?></h5>
                                                <h6 class="text-muted mb-0">@<?= $creator->role ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon red mb-2">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Event Post</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($event) ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-12 col-lg-6">

                        <div class="card">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="mb-5">
                                            <img data-hash="product-1" class="card-img-top img-fluid" src="https://s3-ap-southeast-1.amazonaws.com/loket-production-sg/images/banner/20220824035653.jpg" alt="">
                                        </div>
                                        <h4>GHOSTOBER I KNOW YOU CHAPTER 2</h4>
                                        <span>5 Tiket</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6">

                        <div class="row">
                            <div class="col-6 col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body py-4 px-4">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl">
                                                <img src="<?= base_url() ?>assets/images/faces/1.jpg" alt="Face 1">
                                            </div>
                                            <div class="ms-3 name">
                                                <h5 class="font-bold"><?= $creator->nama ?></h5>
                                                <h6 class="text-muted mb-0">@<?= $creator->role ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body py-4 px-4">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl">
                                                <img src="<?= base_url() ?>assets/images/faces/1.jpg" alt="Face 1">
                                            </div>
                                            <div class="ms-3 name">
                                                <h5 class="font-bold"><?= $creator->nama ?></h5>
                                                <h6 class="text-muted mb-0">@<?= $creator->role ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="card">

                                    <div class="card-body">
                                        <div class="table-responsive-sm">
                                            <table class="table" id="table1">
                                                <thead>
                                                    <tr>
                                                        <th>Kode Tiket</th>
                                                        <th>User</th>
                                                        <th class="text-center">Validasi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3 font-bold">#897656393</td>
                                                        <td>AMAR JUGA</td>
                                                        <td>

                                                            <?php $status = true;
                                                            if ($status) :
                                                            ?>
                                                                <span class="badge bg-success">Aman !</span>
                                                            <?php else : ?>
                                                                <button id="password" class="btn btn-outline-info btn-sm">
                                                                    Konfirmasi
                                                                </button>


                                                            <?php endif; ?>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
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
                        <p> &copy; nonton bareng ayang di nonton bareng</p>
                    </div>

                </div>
            </footer>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/js/app.js"></script>

    <script src="<?= base_url() ?>assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>

    <script src="<?= base_url() ?>assets/js/pages/datatables.js"></script>

    <!-- add before </body> -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>
        $("form :input").change(function() {
            $("input[name=updateMember]").removeClass('d-none');
        });
    </script>
    <script>
        // Register the plugin with FilePond
        FilePond.registerPlugin(FilePondPluginImagePreview);
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');
        const ktpFile = document.querySelector('input[name="dokumen"]');
        // Create the FilePond instance
        const pond = FilePond.create(inputElement);
        const ktp = FilePond.create(ktpFile);

        pond.addFile('<?= base_url() ?>' +
            'assets/images/samples/motorcycle.jpg');
        ktp.addFile('<?= base_url() ?>' +
            'assets/images/dokumen/naufal@gmail.com.png');
    </script>

</body>

</html>
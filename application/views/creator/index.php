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
                <h3>Hallo , <?= $creator->nama_creator ?></h3>
            </div>
            <div class="page-content">
                <section class="row">

                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body py-4 px-4">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl">
                                                <!-- <i class="iconly-boldBookmark"></i> -->
                                                <img src="<?= base_url() ?>assets/images/faces/1.jpg" alt="Face 1">
                                            </div>
                                            <div class="ms-3 name">
                                                <h5 class="font-bold"><?= $creator->nama ?></h5>
                                                <h6 class="text-muted mb-0"> <?= $creator->email ?></h6>
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

                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
                                            <a class="nav-link " id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Dokumen Legal</a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <div class="d-flex justify-content-space-between">
                                                    <div class="col-6 col-sm-6 ">
                                                        <input type="file" name="banner" class="image-preview-filepond" />
                                                    </div>

                                                    <form class="form form-horizontal ms-2" id="formProfileCreator">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control" value="<?= $creator->nama ?>" id="nama" placeholder="Masukan Nama" id="nama">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-person"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="email" id="email" value="<?= $creator->email ?>" class="form-control" placeholder="masukan email" id="email" autocomplete="false">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-envelope"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="number" value="<?= $creator->no_hp ?>" name="no_hp" id="no_hp" class="form-control" placeholder="nomor hp">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-phone"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-md-12 d-flex justify-content-end">
                                                                    <input type="submit" class="btn btn-primary me-1 mb-1 d-none" value="Ubah" name="updateMember">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade " id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <div class="card-header">
                                                    <h5>DOKUMEN LEGAL</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <form class="form form-horizontal">
                                                                <div class="form-body">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label>KARTU TANDA PENDUDUK</label>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="form-group has-icon-left">
                                                                                <div class="position-relative">
                                                                                    <input type="file" name="dokumen" class="dokumen-filepond" />

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label>NIK</label>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="form-group has-icon-left">
                                                                                <div class="position-relative">
                                                                                    <input type="text" class="form-control" value="<?= $creator->nik ?>" placeholder="masuk nik" id="nik">
                                                                                    <div class="form-control-icon">
                                                                                        <i class="bi bi-person"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label>Nama Creator</label>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="form-group has-icon-left">
                                                                                <div class="position-relative">
                                                                                    <input type="text" class="form-control" value="<?= $creator->nama_creator ?>" placeholder="masukan nama penyelenggara" id="nama_creator">
                                                                                    <div class="form-control-icon">
                                                                                        <i class="bi bi-envelope"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label>Deskripsi Creator</label>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="form-group has-icon-left">
                                                                                <div class="position-relative">
                                                                                    <textarea class="form-control" name="deskripsi_creator" placeholder="masukan deskripsi" id="deskripsi_creator"><?= $creator->deskripsi ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php if ($creator->status != '1') : ?>
                                                                            <div class="col-12 d-flex justify-content-end">
                                                                                <button type="submit" class="btn btn-primary me-1 mb-1">Kirim</button>
                                                                            </div>
                                                                        <?php endif; ?>

                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
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
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
                                            <a href="component-creator.html">Data Creator</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            <?= $creator['nama_creator'] ?>
                                        </li>
                                    </ol>
                                </nav>
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
                                                                            <input type="text" class="form-control" value="<?= $creator['nama'] ?>" id="nama" placeholder="Masukan Nama" id="nama">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-person"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="email" id="email" value="<?= $creator['email'] ?>" class="form-control" placeholder="masukan email" id="email" autocomplete="false">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-envelope"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="number" value="<?= $creator['no_hp'] ?>" name="no_hp" id="no_hp" class="form-control" placeholder="nomor hp">
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
                                                                                    <input type="text" class="form-control" value="<?= $creator['nik'] ?>" placeholder="masuk nik" id="nik">
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
                                                                                    <input type="text" class="form-control" value="<?= $creator['nama_creator'] ?>" placeholder="masukan nama penyelenggara" id="nama_creator">
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
                                                                                    <textarea class="form-control" name="deskripsi_creator" placeholder="masukan deskripsi" id="deskripsi_creator"><?= $creator['deskripsi'] ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php if ($creator['status'] != '1') : ?>
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

                </div>

                <!-- Modal Dokumen Pendukung -->

                <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
                        <img class="d-block w-100" src="https://images.unsplash.com/photo-1633008808000-ce86bff6c1ed?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyN3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
                    </div>
                </div>

                <!-- END Modal Dokumen Pendukung -->

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
    <!-- add before </body> -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

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
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

                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tambah Event</h3>

                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url() ?>creator/event">Event Saya</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Event</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <section class="section">
                        <div class="card">



                            <div class="card-body">
                                <form class="form" action="<?= base_url() ?>creator/doAddEvent" enctype="multipart/form-data" method="POST">
                                    <div class="col-12 col-md-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">

                                                    <label for="banner">Banner Event</label>
                                                    <input type="file" name="berkas" class="image-preview-filepond" accept="image/png, image/jpeg, image/jpg, image/gif" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Judul Event </label>
                                                <input type="text" id="judul_event" class="form-control" placeholder="Judul Event" name="judul_event">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">deskripsi </label>
                                                <input type="text" id="deskripsi_event" class="form-control" placeholder="Deskripsi" name="deskripsi_event">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column"> lokasi</label>
                                                <input type="text" id="lokasi_event" name="lokasi_event" class="form-control" placeholder="Lokasi">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">tanggal_mulai </label>
                                                <input type="date" id="tanggal_mulai" class="form-control" name="tanggal_mulai">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">tanggal_akhir </label>
                                                <input type="date" id="tanggal_akhir" class="form-control" name="tanggal_akhir">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">waktu_mulai </label>
                                                <input type="time" id="waktu_mulai" class="form-control" name="waktu_mulai">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column">waktu_akhir </label>
                                                <input type="time" id="waktu_akhir" class="form-control" name="waktu_akhir">
                                            </div>
                                        </div>

                                    </div>

                                    <h5>DATA TIKET</h5>
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Nama Tiket</label>
                                                <input type="text" id="nama_tiket" class="form-control" placeholder="Judul Event" name="nama_tiket">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Deskripsi </label>
                                                <input type="text" id="deskripsi_tiket" class="form-control" placeholder="Deskripsi" name="deskripsi_tiket">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Harga </label>
                                                <input type="text" id="harga_tiket" placeholder="harga" class="form-control" name="harga_tiket">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Kouta </label>
                                                <input type="text" id="kouta_tiket" placeholder="Jumlah tiket" class="form-control" name="kouta_tiket">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">tanggal_mulai </label>
                                                <input type="datetime-local" id="tgl_mulai_jual	" class="form-control" name="tgl_mulai_jual">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">tanggal_akhir </label>
                                                <input type="datetime-local" id="tgl_akhir_jual" class="form-control" name="tgl_akhir_jual">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </form>
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
    <!-- add before </body> -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>
        // Register the plugin with FilePond
        FilePond.registerPlugin(FilePondPluginImagePreview);

        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');

        // Create the FilePond instance
        const pond = FilePond.create(inputElement, {
            storeAsFile: true
        });
    </script>
</body>

</html>
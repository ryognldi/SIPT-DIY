<!-- headers -->
<?php $this->load->view('_partial/head') ?>
<!-- headers -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIPT-DIY | Transaksi</title>

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main/app.css" />

    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/favicon.png" type="image/png" />
    <!-- data table style -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
    <!-- end datatables style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/shared/iconly.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/extensions/@fortawesome/fontawesome-free/css/all.min.css" />
    <!-- sweetalert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/extensions/sweetalert2/sweetalert2.min.css" />
</head>

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
                                            Data Transaksi
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
                                                <th>Kode Pesanan</th>
                                                <th>Nama Pemesan</th>
                                                <th>Event</th>
                                                <th>Tiket for</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($invoice as $invoice) : ?>
                                                <tr>
                                                    <td class="col-3 font-bold">#<?= $invoice->kode_pesanan ?></td>
                                                    <td><?= $invoice->nm ?></td>
                                                    <td><?= $invoice->judul_event ?></td>
                                                    <td><span class="badge bg-primary"><?= $invoice->jumlah_tiket ?> Tiket</span></td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-primary btn-sm passingID" data-id="<?= $invoice->kode_pesanan ?>" data-bs-toggle="modal" data-bs-target="#inv-detail">
                                                            Detail
                                                        </button>

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


    <?php $this->load->view('_partial/modal') ?>


    <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/js/app.js"></script>
    <script src="<?= base_url() ?>assets/extensions/jquery/jquery.min.js"></script>

    <script src="<?= base_url() ?>assets/extensions/sweetalert2/sweetalert2.min.js"></script>


    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>

    <script src="<?= base_url() ?>assets/js/pages/datatables.js"></script>

    <script>
        $(document).ready(function() {


            $(".passingID").click(function() {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: "<?= base_url('admin/invoice/') ?>" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        $("#nama_pemesan").html(data.nama);
                        $("#tgl_pesan").html(data.tanggal_pesan);
                        $("#kode_pesanan").html("Kode Pesanan : </br>" + data.kode_pesanan);
                        $("#tagihan").html("Total Bayar : " + data.tagihan);
                        $("#bukti_bayar").attr("src", "<?= base_url('assets/images/bukti_bayar/') ?>" + data.bukti_bayar);
                        $("#nama_tiket").html("Nama Tiket  : </br>" + data.nama_tiket);
                        $("#jumlah_tiket").html("Jumlah Tiket : " + data.jumlah_tiket);
                        $("#konfirmasiID").hide();
                        $("#lunas").hide();
                        console.log(data);
                        if (data.status_bayar === '0') {
                            const jtk = data.jumlah_tiket;
                            $("#konfirmasiID").show();
                            $("#konfirmasiID").click(() => {
                                Swal.fire({
                                    title: 'Yakin Untuk Melanjutkan Transaksi ?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Lanjutkan',
                                    cancelmButtonText: 'Batal'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        $.ajax({
                                            url: "<?= base_url('admin/konfirmasiID') ?>",
                                            type: "POST",
                                            data: {
                                                'id': id,
                                                'count': jtk
                                            },
                                            dataType: "JSON",
                                            success: function(data) {
                                                console.log(data);
                                            }
                                        });
                                        Swal.fire(
                                            'BERHASIL!',
                                            'PESANAN TELAH DI KONFIRMASU.',
                                            'success'
                                        );
                                        location.reload();
                                    }
                                })
                            });

                        } else {
                            $("#lunas").show();
                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error get data from ajax');
                    }
                });
            });
        });
    </script>
</body>

</html>
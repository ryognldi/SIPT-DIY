<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIPT - DIY | Daftar</title>
    <meta charset="utf-8">

    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/favicon.png" type="image/png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
        }

        .login-page {
            width: 100%;
            height: 100vh;
            display: inline-block;
            display: flex;
            align-items: center;
        }

        .form-right i {
            font-size: 100px;
        }
    </style>

</head>

<body>

    <div class="login-page bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="<?= base_url('auth/c_member') ?>" method="POST" autocomplete="off" class="row g-4">

                                        <div class="col-12">
                                            <label>Nama Lengkap<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" autocomplete="false" class="form-control" name="nama" placeholder="Masukan nama lengkap">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label>Email<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" autocomplete="off" name="email" placeholder="Masukan Email">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label>Password<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label>No Hp<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="no_hp" placeholder="Masukan No Hp ">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label>Foto<span class="text-danger"></span></label>
                                            <span class="text-muted">(opsional)</span>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-image"></i></div>
                                                <input type="file" name="foto" class="form-control">
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary px-4 float-end mt-4">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 ps-0 d-none d-md-block">
                                <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                    <i class="bi bi-bootstrap"></i>
                                    <h2 class="fs-1">Daftar AKun</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
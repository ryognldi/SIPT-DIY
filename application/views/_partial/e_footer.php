<!--modal style 1 start -->
<!-- login modal 1 -->
<div id="loginModal1" aria-modal="true" class="modal-style-1  modal ">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header p-0 mb-3 mt-3">
                <h4 class="modal-title">login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <!-- dont forget to add action and action method  -->
                <form action="<?= base_url('auth/auth') ?>" method="POST">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" name="email" placeholder="Enter email address" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Enter password" required="required" autocomplete="on">
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-signin">login</button>

                    </div>

                </form>
            </div>
            <div class="text-center mb-3">Belum punya akun? <a class="register" href="#registerModal1" data-dismiss="modal" data-toggle="modal">Register</a></div>
        </div>
    </div>
</div>

<!-- register modal 1 -->
<div id="registerModal1" aria-modal="true" class="modal-style-1  modal ">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header p-0 mb-3 mt-3">
                <h4 class="modal-title">Register</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <!-- dont forget to add action and action method  -->
                <form action="<?= base_url('auth/c_member') ?>" method="POST">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="nama" placeholder="masukan nama lengkap" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="masukan email" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="masukan password" required="required" autocomplete="on">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-eye-slash"></i></span>
                            <input type="number" class="form-control" name="no_hp" placeholder="Nomor Hp" required="required" autocomplete="on">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-signin">Register</button>

                    </div>

                </form>
            </div>
            <div class="text-center mb-3">Sudah Punya akun? <a class="login" href="#loginModal1" data-dismiss="modal" data-toggle="modal">Login</a></div>
        </div>
    </div>
</div>
<!--modal style 1 end -->





<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="./index.html">
                            <h4>
                                NONTON BARENG
                                <p>nonton bareng ayang di nonton bareng</p>
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>FOLLOW KAMI</h6>

                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->



<!-- Js Plugins -->
<script src="<?= base_url() ?>assets/v.1/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>assets/v.1/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/v.1/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>assets/v.1/js/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>assets/v.1/js/mixitup.min.js"></script>
<script src="<?= base_url() ?>assets/v.1/js/jquery.countdown.min.js"></script>
<script src="<?= base_url() ?>assets/v.1/js/jquery.slicknav.js"></script>
<script src="<?= base_url() ?>assets/v.1/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/v.1/js/jquery.nicescroll.min.js"></script>
<script src="<?= base_url() ?>assets/v.1/js/main.js"></script>
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

<script>
    const price = $('.cart__price').text();
    const q = $('input[name=qty]').val();
    $('.cart__total').html(price * q);
    $('input[name=qty]').change(function() {
        const q = $('input[name=qty]').val();
        const sub = $('.cart__total').html(price * q);
        $('input[name=qty]').val($('input[name=qty]').val());
        $('input[name=total]').val($('.cart__total').text());
    });
    $('input[name=qty]').val($('input[name=qty]').val());
    $('input[name=total]').val($('.cart__total').text());
</script>


<script>
    const sess = '<?= $this->session->flashdata('no') ?>';

    if (sess) {
        $('#loginModal1').modal('show');
    }
</script>

</body>

</html>
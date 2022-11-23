<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <h5>E-JOGJA EVENT</h5>
                </div>
            </div>

            <div class="col-xl-6 col-lg-10">
                <nav class="header__menu p-0">
                    <div class="footer__newslatter  mt-3">
                        <form action="#">
                            <input type="text" placeholder="Cari Event" />
                            <button type="submit" class="site-btn"> <i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </nav>
            </div>

            <div class="col-lg-2 col-xl-3">
                <nav class="header__menu">
                    <ul style="text-align: end;">
                        <?php
                        if (!$this->session->userdata('role')) : ?>
                            <li>
                                <a href="#loginModal1" data-toggle="modal" class="cart-btn d-block px-4"> Login</a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="#"> <i class="fa fa-user"></i> <?= $this->session->userdata('nama') ?></a>
                                <ul class="dropdown">
                                    <li><a href="<?= base_url('member/dashboard') ?>">Tiket Saya </a></li>
                                    <li><a href="<?= base_url('auth/logOff') ?>">Keluar </a></li>
                                </ul>
                            </li>

                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
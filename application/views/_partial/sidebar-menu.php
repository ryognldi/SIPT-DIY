<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-item <?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
            <a href="<?= base_url() ?><?= $this->session->userdata('role') ?>/dashboard" class="sidebar-link">
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <?php if ($this->session->userdata('role') == 'admin') : ?>
            <li class="sidebar-item has-sub <?php echo $this->uri->segment(2) != 'dashboard' ? 'active' : '' ?>">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-stack"></i>
                    <span>Menu</span>
                </a>
                <ul class="submenu <?php echo $this->uri->segment(2) != 'dashboard' ? 'active' : '' ?>">
                    <li class="submenu-item <?php echo $this->uri->segment(2) == 'users' ? 'active' : '' ?>">
                        <a href="<?= base_url() ?>admin/users">Data Users</a>
                    </li>
                    <li class="submenu-item <?php echo $this->uri->segment(2) == 'creator' ? 'active' : '' ?>">
                        <a href="<?= base_url() ?>admin/creator">Data Creator</a>
                    </li>
                    <li class="submenu-item <?php echo $this->uri->segment(2) == 'transaksi' ? 'active' : '' ?>">
                        <a href="<?= base_url() ?>admin/transaksi">Data Transaksi</a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>
        <?php if ($this->session->userdata('role') == 'creator') : ?>
            <li class="sidebar-item has-sub <?php echo $this->uri->segment(2) != 'dashboard' ? 'active' : '' ?>">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-stack"></i>
                    <span>Event</span>
                </a>
                <ul class="submenu <?php echo $this->uri->segment(2) != 'dashboard' ? 'active' : '' ?>">
                    <li class="submenu-item <?php echo $this->uri->segment(2) == 'event' ? 'active' : '' ?>">
                        <a href="<?= base_url() ?>creator/event">Event Saya </a>
                    </li>
                    <li class="submenu-item <?php echo $this->uri->segment(2) == 'addEvent' ? 'active' : '' ?>">
                        <a href="<?= base_url() ?>creator/addEvent">Tambah Event </a>
                    </li>

                </ul>
            </li>
        <?php endif; ?>



        <li class="sidebar-item mt-5">
            <div class="d-flex justify-content-evenly">
                <p>
                <form action="<?= base_url('auth/logOff') ?>" method="get">

                    <button class="btn btn-md btn-danger btn-block">
                        LogOff</button>
                </form>
                </p>
                <p>

                    <?php if ($this->session->userdata('role') != 'admin') : ?>
                <form action="<?= base_url('member/gantiRole') ?>" method="post">

                    <input type="hidden" name="email" value="<?= $this->session->userdata('email') ?>">
                    <input type="hidden" name="role" value="<?= $this->session->userdata('role') ?>">
                    <button class="btn btn-md btn-primary btn-block">
                        ganti Akun</button>
                </form>

            <?php endif; ?>

            </p>
            </div>

        </li>
    </ul>
</div>
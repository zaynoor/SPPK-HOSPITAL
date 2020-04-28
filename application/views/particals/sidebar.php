<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Panel Menu</div>
                <?php
                if (!empty($this->session->userdata('level'))) {
                    if ($this->session->userdata('level') == 'user') {
                ?>
                        <a class="nav-link" href="<?php echo site_url('latihan/home') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="<?php echo site_url('latihan/list_data') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            List Data Pasien
                        </a>
                    <?php
                    } else if ($this->session->userdata('level') == 'pasien') {
                    ?>
                        <a class="nav-link" href="<?php echo site_url('latihan/home') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="<?php echo site_url('latihan/list_data') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            List Data Pasien
                        </a>
                    <?php
                    } else if ($this->session->userdata('level') == 'admin') {
                    ?>
                        <a class="nav-link" href="<?php echo site_url('latihan/home') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="<?php echo site_url('latihan/list_data') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            List Data Pasien
                        </a>
                        <a class="nav-link" href="<?php echo site_url('latihan/master_data') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Master Data Pasien
                        </a>
                        <a class="nav-link" href="<?php echo site_url('latihan/master_data_User') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Master Data User
                        </a>
                        <a class="nav-link" href="<?php echo site_url('latihan/master_data_admin') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Master Data Admin

                        </a>
                        <a class="nav-link" href="<?php echo site_url('latihan/master_data_sharing') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Master Data Sharing
                        </a>
                <?php
                    } else {
                        redirect('latihan/logout');
                    }
                } else {
                    redirect('latihan/logout');
                }
                ?>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php echo $this->session->userdata("nama"); ?>
        </div>
    </nav>
</div>
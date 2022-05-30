<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo base_url('admin'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="<?php echo base_url('admin/overview/user'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                                User
                            </a>
                            <a class="nav-link" href="<?php echo base_url('admin/overview/siswa'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-group fa-fw"></i></div>
                                Siswa Aktif
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?= $this->session->userdata('nama'); ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
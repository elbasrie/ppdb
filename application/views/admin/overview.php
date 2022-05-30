<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - MA XYZ</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?php echo base_url().'admin'; ?>">Dashboar Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url().'auth/logout'; ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
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
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><h2><?php echo $total_user; ?></h2>User</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url('admin/overview/user'); ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><h2><?php echo $total_formulir; ?></h2>Formulir</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#datatablesSimple">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><h2><?php echo $total_siswa; ?></h2>Siswa Aktif</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url('admin/overview/siswa'); ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Pendaftar
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>Tanggal Pendaftaran</th>
                                            <th>Nama</th>
                                            <th>Asal Sekolah</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Tempat Tanggal Lahir</th>
                                            <th>No. Telp</th>
                                            <th>Nama Ortu</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>Tanggal Pendaftaran</th>
                                            <th>Nama</th>
                                            <th>Asal Sekolah</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Tempat Tanggal Lahir</th>
                                            <th>No. Telp</th>
                                            <th>Nama Ortu</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach($formulir as $f){ 
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $f->nisn ?></td>
                                            <td><?php echo $f->tgl_pendaftaran ?></td>
                                            <td><?php echo $f->nama ?></td>
                                            <td><?php echo $f->asal_sekolah ?></td>
                                            <td><?php echo $f->jenis_kelamin ?></td>
                                            <td><?php echo $f->alamat ?></td>
                                            <td><?php echo $f->tempat_lahir ?>, <?php echo $f->tanggal_lahir ?></td>
                                            <td><?php echo $f->no_tlp ?></td>
                                            <td><?php echo $f->nama_ortu ?></td>
                                            <td>
                                                <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" id="dropdownFadeIn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownFadeIn">
                                                        <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</a>
                                                        <a class="dropdown-item" href="<?= base_url('admin/overview/ubahData/').$f->id_formulir;?>" method="post">Edit</a>
                                                        <a class="dropdown-item" href="<?= base_url('admin/overview/approve/').$f->id_formulir;?>">Aktivasi</a>
                                                        <a class="dropdown-item" href="<?= base_url('admin/overview/hapusSiswa/').$f->id_formulir;?>">Hapus</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Modal -->
                <?php foreach($formulir as $f){?>
                <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detailModalLabel">Detail</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table>
                                    <tr>
                                        <td>Foto</td>
                                        <td><img src="<?php echo base_url('assets/img/upload/') . $f->foto; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Akta</td>
                                        <td><img src="<?php echo base_url('assets/img/upload/') . $f->akta; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Kartu Keluarga</td>
                                        <td><img src="<?php echo base_url('assets/img/upload/') . $f->kk; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Ijazah</td>
                                        <td><img src="<?php echo base_url('assets/img/upload/') . $f->ijazah; ?>"></td>
                                    </tr>
                                </table>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('js/scripts.js') ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/demo/chart-area-demo.js') ?>"></script>
        <script src="<?= base_url('assets/demo/chart-bar-demo.js') ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?= base_url('js/datatables-simple-demo.js') ?>"></script>
    </body>
</html>

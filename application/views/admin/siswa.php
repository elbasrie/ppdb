<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Siswa Aktif</h1>
        <ol class="breadcrumb mb-4">
        </ol>
        <div class="card mb-4">
            <div class="card-body">
            <a href="<?= base_url('admin/overview/print_siswa'); ?>" target="_blank" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
            <a href="<?= base_url('admin/overview/tambahSiswa'); ?>" class="btn btn-success mb-3"><i class="fas fa-add"></i> Tambah Data</a>
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
                    foreach($siswa as $s){ 
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $s->nisn ?></td>
                            <td><?php echo $s->tgl_pendaftaran ?></td>
                            <td><?php echo $s->nama ?></td>
                            <td><?php echo $s->asal_sekolah ?></td>
                            <td><?php echo $s->jenis_kelamin ?></td>
                            <td><?php echo $s->alamat ?></td>
                            <td><?php echo $s->tempat_lahir ?>, <?php echo $s->tanggal_lahir ?></td>
                            <td><?php echo $s->no_tlp ?></td>
                            <td><?php echo $s->nama_ortu ?></td>
                            <td>
                                <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" id="dropdownFadeIn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownFadeIn">
                                        <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</a>
                                        <a class="dropdown-item" href="<?= base_url('admin/overview/edit_siswa/').$s->id;?>" method="post">Edit</a>
                                        <a class="dropdown-item" href="<?= base_url('admin/overview/hapusSiswa/').$s->id;?>" onclick="return confirm('Yakin dek?');">Hapus</a>
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
<?php foreach($siswa as $s){?>
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
                        <td><img src="<?php echo base_url('assets/img/upload/') . $s->foto; ?>"></td>
                    </tr>
                    <tr>
                        <td>Akta</td>
                        <td><img src="<?php echo base_url('assets/img/upload/') . $s->akta; ?>"></td>
                    </tr>
                    <tr>
                        <td>Kartu Keluarga</td>
                        <td><img src="<?php echo base_url('assets/img/upload/') . $s->kk; ?>"></td>
                    </tr>
                    <tr>
                        <td>Ijazah</td>
                        <td><img src="<?php echo base_url('assets/img/upload/') . $s->ijazah; ?>"></td>
                    </tr>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
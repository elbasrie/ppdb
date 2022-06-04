<div class="box_data">
    <?php foreach ($formulir as $f) { ?>
        <div class="thumbnail">
            <div class="row">
                <div class="column">
                    <img src="<?php echo base_url('assets/img/upload/') . $f->foto; ?>">
                </div>
                <br><br>
                <a>Nama :<?php echo $f->nama; ?></a><br>
                <a>NISN :<?php echo $f->nisn; ?></a><br>
                <a>Jenis Kelamin :<?php echo $f->jenis_kelamin; ?></a><br>
                <a>TTL :<?php echo $f->tempat_lahir; ?>,<?php echo $f->tanggal_lahir; ?></a><br>
                <a>No Telp :<?php echo $f->no_tlp; ?></a><br>
                <a>Email :<?php echo $f->email; ?></a><br>
                <a>Alamat :<?php echo $f->alamat; ?></a><br>
                <a>Nama Ortu :<?php echo $f->nama_ortu; ?></a>
            </div>
        </div>
    <?php } ?>
    <center>
    <div class="data-button">
        <a href="<?= base_url('user/print_data'); ?>" target="_blank" class="btn btn-success mb-3"><i class="fas fa-print"></i> Print</a>
        <a href="<?= base_url('user/edit'); ?>" class="btn btn-warning mb-3"><i class="fas fa-pen"></i> Edit</a>
        <a href="<?= base_url('user/hapus'); ?>" class="btn btn-danger mb-3"><i class="fas fa-trash"></i> Hapus</a>
    </div>
    </center>
</div>
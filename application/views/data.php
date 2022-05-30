<div class="box_data">
    <?php foreach ($formulir as $f) { ?>
        <div class="thumbnail">
            <img src="<?php echo base_url('assets/img/upload/') . $f->foto; ?>">
            <a>Nama :<?php echo $f->nama; ?></a><br>
            <a>NISN :<?php echo $f->nisn; ?></a><br>
            <a>Jenis Kelamin :<?php echo $f->jenis_kelamin; ?></a><br>
            <a>TTL :<?php echo $f->tempat_lahir; ?>,<?php echo $f->tanggal_lahir; ?></a><br>
            <a>No Telp :<?php echo $f->no_tlp; ?></a><br>
            <a>Email :<?php echo $f->email; ?></a><br>
            <a>Alamat :<?php echo $f->alamat; ?></a><br>
            <a>Nama Ortu :<?php echo $f->nama_ortu; ?></a>
        </div>
    <?php } ?>
</div>
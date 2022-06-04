<div class="column">
    <div class="box_formulir">
        <h3>Edit Formulir</h3>
    </div>
    <div class="box_formulir_pendaftaran">
        <div class="row">
            <?php foreach($formulir as $f){ ?>
        <form method="post" action="<?php echo base_url('/user/update'); ?>" enctype="multipart/form-data">
                <input type="hidden" name="tgl_pendaftaran" value="<?= date('Y-m-d'); ?>">
                <a>Asal Sekolah</a>
                <input class="full" type="text" name="asal_sekolah" value="<?php echo $f->asal_sekolah; ?>">
                <a>Nama Calon Siswa</a>
                <div style="clear: both;"></div>
                <input class="half" type="text" name="nama" value="<?php echo $f->nama; ?>">
                <div class="half-right">
                    <a>NISN</a>
                    <div style="clear: both;"></div>
                    <input class="half" type="text" name="nisn" value="<?php echo $f->nisn; ?>">
                </div>
                <a>Tempat Lahir</a>
                <div style="clear: both;"></div>
                <input class="half" type="text" name="tempat_lahir" value="<?php echo $f->tempat_lahir; ?>">
                <div class="half-right">
                    <a>Tanggal Lahir</a>
                    <div style="clear: both;"></div>
                    <input class="half" type="date" name="tanggal_lahir" value="<?php echo $f->tanggal_lahir; ?>">
                </div>
                <a>Jenis Kelamin</a>
                <div style="clear: both;"></div>
                <select class="half" name="jenis_kelamin">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <div style="clear: both;"></div>
                <a>Alamat</a>
                <input class="full" type="text" name="alamat" value="<?php echo $f->alamat; ?>">
                <a>Email</a>
                <div style="clear: both;"></div>
                <input class="half" type="text" name="email" value="<?php echo $f->email; ?>">
                <div class="half-right">
                    <a>No. Telp</a>
                    <div style="clear: both;"></div>
                    <input class="half" type="text" name="no_tlp" value="<?php echo $f->no_tlp ?>">
                </div>
                <a>Nama Orang Tua/Wali</a>
                <div style="clear: both;"></div>
                <input class="half" type="text" name="nama_ortu" value="<?php echo $f->nama_ortu; ?>">
                <div style="clear: both;"></div>
                <a>Foto Diri</a>
                <div style="clear: both;"></div>
                <input class="half" type="file" name="foto" accept="image/png, image/jpeg, image/jpg, image/gif" value="<?php echo $f->foto; ?>">
                <div style="clear: both;"></div>
                <div class="half-right">
                    <a>Kartu Keluarga</a>
                    <div style="clear: both;"></div>
                    <input class="half" type="file" name="kk" accept="image/png, image/jpeg, image/jpg, image/gif" value="<?php echo $f->kk; ?>">
                </div>
                <div style="clear: both;"></div>
                <a>Akta Kelahiran</a>
                <div style="clear: both;"></div>
                <input class="half" type="file" name="akta" accept="image/png, image/jpeg, image/jpg, image/gif" value="<?php echo $f->akta; ?>">
                <div style="clear: both;"></div>
                <div class="half-right">
                    <a>Ijazah/Surat Keterangan Lulus</a>
                    <input class="half" type="file" name="ijazah" accept="image/png, image/jpeg, image/jpg, image/gif" value="<?php echo $f->ijazah; ?>">
                </div>
                <button class="submit-button" type="submit">Submit</button>
        </form>
        <?php } ?>
        </div>
    </div>
</div>
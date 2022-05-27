<div class="column">
    <div class="box_formulir">
        <h3>Formulir Pendaftaran</h3>
    </div>
    <div class="box_formulir_pendaftaran">
        <div class="row">
        <form method="post" action="<?php echo base_url('/user/formulir'); ?>" enctype="multipart/form-data">
                <input type="hidden" name="tgl_pendaftaran" value="<?= date('Y-m-d'); ?>">
                <a>Asal Sekolah</a>
                <input class="full" type="text" name="asal_sekolah">
                <a>Nama Calon Siswa</a>
                <div style="clear: both;"></div>
                <input class="half" type="text" name="nama">
                <div class="half-right">
                    <a>NISN</a>
                    <div style="clear: both;"></div>
                    <input class="half" type="text" name="nisn">
                </div>
                <a>Tempat Lahir</a>
                <div style="clear: both;"></div>
                <input class="half" type="text" name="tempat_lahir">
                <div class="half-right">
                    <a>Tanggal Lahir</a>
                    <div style="clear: both;"></div>
                    <input class="half" type="date" name="tanggal_lahir">
                </div>
                <a>Jenis Kelamin</a>
                <div style="clear: both;"></div>
                <select class="half" name="jenis_kelamin">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <div style="clear: both;"></div>
                <a>Alamat</a>
                <input class="full" type="text" name="alamat">
                <a>Email</a>
                <div style="clear: both;"></div>
                <input class="half" type="text" name="email">
                <div class="half-right">
                    <a>No. Telp</a>
                    <div style="clear: both;"></div>
                    <input class="half" type="text" name="no_tlp">
                </div>
                <a>Nama Orang Tua/Wali</a>
                <div style="clear: both;"></div>
                <input class="half" type="text" name="nama_ortu">
                <div style="clear: both;"></div>
                <a>Foto Diri</a>
                <div style="clear: both;"></div>
                <input class="half" type="file" name="foto" accept="image/png, image/jpeg, image/jpg, image/gif">
                <div style="clear: both;"></div>
                <div class="half-right">
                    <a>Kartu Keluarga</a>
                    <div style="clear: both;"></div>
                    <input class="half" type="file" name="kk" accept="image/png, image/jpeg, image/jpg, image/gif">
                </div>
                <div style="clear: both;"></div>
                <a>Akta Kelahiran</a>
                <div style="clear: both;"></div>
                <input class="half" type="file" name="akta" accept="image/png, image/jpeg, image/jpg, image/gif">
                <div style="clear: both;"></div>
                <div class="half-right">
                    <a>Ijazah/Surat Keterangan Lulus</a>
                    <input class="half" type="file" name="ijazah" accept="image/png, image/jpeg, image/jpg, image/gif">
                </div>
                <button class="submit-button" type="submit">Submit</button>
        </form>
        </div>
    </div>
</div>
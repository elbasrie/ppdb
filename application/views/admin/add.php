<div class="container px-5">
<div class="card mb-4">
    <div class="card-header">
        <h3>Tambah Data</h3>
    </div>
<div class="card-body">
<form method="post" action="<?php echo base_url('admin/overview/tambahSiswa'); ?>" enctype="multipart/form-data">
    <input type="hidden" name="tgl_pendaftaran" value="<?= date('Y-m-d'); ?>">
    <div class="mb-3">
        <label>Asal Sekolah</label>
        <input class="form-control" type="text" name="asal_sekolah">
    </div>
    <div class="mb-3">
        <label>Nama Calon Siswa</label>
        <input class="form-control" type="text" name="nama">
    </div>
    <div class="mb-3">
        <label>NISN</label>
        <input class="form-control" type="text" name="nisn">
    </div>
    <div class="mb-3">
        <label>Tempat Lahir</label>
        <input class="form-control" type="text" name="tempat_lahir">
    </div>
    <div class="mb-3">
        <label>Tanggal Lahir</label>
        <input class="form-control" type="date" name="tanggal_lahir">
    </div>
    <div class="mb-3">
        <label>Jenis Kelamin</label>
        <select class="form-control" name="jenis_kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Alamat</label>
        <input class="form-control" type="text" name="alamat">
    </div>
    <div class="mb-3">
        <label>No. Telp</label>
        <input class="form-control" type="text" name="no_tlp">
    </div>
    <div class="mb-3">
        <label>Nama Orang Tua/Wali</label>
        <input class="form-control" type="text" name="nama_ortu">
    </div>
    <div class="mb-3">
        <label>Foto Diri</label>
        <input class="form-control" type="file" name="foto" accept="image/png, image/jpeg, image/jpg, image/gif">
    </div>
    <div class="mb-3">
        <label>Kartu Keluarga</label>
        <input class="form-control" type="file" name="kk" accept="image/png, image/jpeg, image/jpg, image/gif">
    </div>
    <div class="mb-3">
        <label>Akta Kelahiran</label>
        <input class="form-control" type="file" name="akta" accept="image/png, image/jpeg, image/jpg, image/gif">
    </div>
    <div class="mb-3">
        <label>Ijazah/Surat Keterangan Lulus</label>
        <input class="form-control" type="file" name="ijazah" accept="image/png, image/jpeg, image/jpg, image/gif">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary mb-3" type="submit">Submit</button>
</form>
</div>
</div>
</div>

    <form method="post" action="<?php echo base_url('admin/overview/ubahData'); ?>" enctype="multipart/form-data">
                <a>Asal Sekolah</a>
                <input  type="text" name="asal_sekolah">
                <a>Nama Calon Siswa</a>
                <input  type="text" name="nama">
                    <a>NISN</a>
                    
                    <input  type="text" name="nisn">
                <a>Tempat Lahir</a>
                <input  type="text" name="tempat_lahir">
                    <a>Tanggal Lahir</a>
                    <input  type="date" name="tanggal_lahir">
                <a>Jenis Kelamin</a>
                <select  name="jenis_kelamin">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <a>Alamat</a>
                <input  type="text" name="alamat">
                <a>Email</a>
                <input  type="text" name="email">
                    <a>No. Telp</a>
                    
                    <input  type="text" name="no_tlp">
                <a>Nama Orang Tua/Wali</a>
                <input  type="text" name="nama_ortu">
                <a>Foto Diri</a>
                <input  type="file" name="foto" accept="image/png, image/jpeg, image/jpg, image/gif">
                
                <div class="half-right">
                    <a>Kartu Keluarga</a>
                    
                    <input  type="file" name="kk" accept="image/png, image/jpeg, image/jpg, image/gif">
                </div>
                
                <a>Akta Kelahiran</a>
                
                <input  type="file" name="akta" accept="image/png, image/jpeg, image/jpg, image/gif">
                
                <div class="half-right">
                    <a>Ijazah/Surat Keterangan Lulus</a>
                    <input  type="file" name="ijazah" accept="image/png, image/jpeg, image/jpg, image/gif">
                </div>
                <button class="submit-button" type="submit">Submit</button>
        </form>

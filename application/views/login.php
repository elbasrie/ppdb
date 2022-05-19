<?php
// Cek apakah terdapat session nama message
if($this->session->flashdata('message')){ // Jika ada
  echo '<div class="alert alert-danger">'.$this->session->flashdata('message').'</div>'; // Tampilkan pesannya
}
?>
<center>
    <div class="box_login">
        <form method="post" action="<?php echo base_url('/auth/login'); ?>">
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
            <div class="text-center">Belum punya akun? <a href="<?php echo base_url('/auth/registrasi'); ?>">Daftar</div>
        </form>
    <div>
<center>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - MA DARUSSALAM</title>
    <!-- Load File CSS Bootstrap  -->
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div class="container">
        <div class="form-signin">
            <?php
                // Cek apakah terdapat session nama message
                if($this->session->flashdata('message')){ // Jika ada
                echo '<div class="alert alert-danger">'.$this->session->flashdata('message').'</div>'; // Tampilkan pesannya
                }
            ?>
            <center>
                <div class="box_login">
                <h3>Silahkan masukkan Email dan Password Anda</h3>
                    <form method="post" action="<?php echo base_url('/auth/login'); ?>">
                        <div class="form-group">
                            <input class="login-textarea" type="text" name="email" placeholder="  Email" required autofocus>
                        </div>
                        <div class="form-group">
                            <input class="login-textarea" type="password" name="password" placeholder="  Password" required>
                        </div>
                        <button class="login-button" type="submit">Masuk</button>
                        <div>Belum punya akun? <a href="<?php echo base_url('/auth/registrasi'); ?>">Daftar</div>
                    </form>
                <div>
            <center>
        </div>
    </div>
</body>
</html>
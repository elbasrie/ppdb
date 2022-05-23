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
    <style>
    body {
        margin:0;
        padding-top: 0px;
        padding-bottom: 40px;
        background-color: #ffff;
    }
    .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
    .form-signin .form-signin-heading{
        margin-bottom: 10px;
    }
    .form-signin .form-control {
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 10px;
        font-size: 16px;
    }
    .form-signin .form-control:focus {
        z-index: 2;
    }
    header {
    grid-area: header;
    background:#209B2C;
    color: #571212;
    padding: 1em;
    }
    header a {
    text-decoration:none;
    color: #FFFFFF;
    font-size:1em;
    font-weight:700;
    }
    .nav{
    grid-area: header;
    color: #571212;
    float: right;
    font-size:0.6em;
    font-weight:700;
    }
    .masuk{
    font-family: "Times New Roman";
    font-size: 15px;
    background: #E3BA50;
    color: #404040;
    border-radius: 5px;
    padding: 12px 20px;
    margin-top: -50px;
    }
    .masuk:hover{
    opacity:0.9;
    }
    
    </style>

</head>
<body>
    <div class="container">
        <div class="form-signin">
            <h2 class="form-signin-heading">Silahkan masukkan Email dan Password Anda</h2>
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
        </div>
    </div>
</body>
</html>
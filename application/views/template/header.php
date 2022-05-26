<html>
    <head>
        <title>MA XYZ</title>
    </head>
    <style>
    header {
        grid-area: header;
        background:#209B2C;
        padding: 1.2em;
        }
    header a {
        margin-left: 10px;
        text-decoration:none;
        color: #FFFFFF;
        font-size:1em;
        font-weight:700;
    }
    header img {
        float: left;
        width: 40px;
        height: 40px;
        margin-top: -10px;
    }
    body {
        margin:0;
        background-image: url('<?php echo base_url('assets/img/background.png'); ?>');
    }
    .nav{
        grid-area: header;
        float: right;
        font-size:0.8em;
        font-weight:700;
    }
    .masuk{
        font-family: "Times New Roman";
        font-size: 15px;
        background: #E3BA50;
        color: #404040;
        border-radius: 20px;
        padding: 12px 20px;
        margin-top: -70px;
    }
    .masuk_home{
        font-family: "Times New Roman";
        font-size: 15px;
        background: #E3BA50;
        color: #404040;
        border-radius: 20px;
        padding: 12px 65px;
        margin-top: -70px;
    }
    .pendaftaran{
        font-family: "Times New Roman";
        font-size: 15px;
        background: #209B2C;
        color: #404040;
        border-radius: 20px;
        padding: 12px 20px;
        margin-top: -70px;
    }
    .masuk:hover{
        opacity:0.9;
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
    .registrasi_page{
        margin-left: 150px;
    }
    .home_page{
        margin-left: 100px;
        margin-top: 130px;
    }
    .image_home{
        margin-top: 130px;
        margin-right: -200px;
        float: right;
    }
    .image_registrasi{
        margin-top: 130px;
        margin-right: -250px;
        float: right;
    }
    img {
        border-radius: 20%;
    }
    .column {
        float: left;
        width: 33.33%;
        padding: 5px;
    }
    .row::after {
        content: "";
        clear: both;
        display: table;
    }
    .pendaftaran_button{
        margin-left: 170px;
        margin-top: 90px;
    }
    .masuk_button{
        margin-left: 170px;
        margin-top: 70px;
    }
    .box_login{
        width: 320px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 10px;
        border: 5px solid #D2D6CE;
        background: #D2D6CE;
        opacity: 70%;
        border-radius: 20px;
        margin: 0;
        margin-top: 100px;
    }
    .box_form_registrasi{
        width: 527px;
        height: 30px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 5px;
        border: 5px solid #209B2C;
        background: #209B2C;
        opacity: 70%;
        border-radius: 20px;
        margin: 10px;
        margin-top: 100px;
    }
    .box_hello{
        width: 250px;
        height: 30px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 5px;
        border: 5px solid #209B2C;
        background: #209B2C;
        opacity: 70%;
        border-radius: 20px;
        margin: 10px;
        margin-top: 100px;
        text-align: center;
    }
    .box_formulir{
        width: 700px;
        height: 30px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 5px;
        border: 5px solid #209B2C;
        background: #209B2C;
        opacity: 70%;
        border-radius: 20px;
        margin: 10px;
        margin-top: -210px;
        margin-left: 430px;
        text-align: center;
    }
    .box_formulir h3{
        margin-top: 6px;
    }
    .box_formulir_pendaftaran{
        width: 700px;
        height: 700px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 10px;
        border: 5px solid #D2D6CE;
        background: #D2D6CE;
        opacity: 70%;
        border-radius: 20px;
        margin-top: 10px;
        margin-left: 430px;
    }
    .box_sidebar{
        width: 240px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 10px;
        border: 5px solid #D2D6CE;
        background: #D2D6CE;
        opacity: 70%;
        border-radius: 20px;
        margin: 10px;
        margin-top: 6px;
    }
    .box_form_registrasi h3{
        margin-top: 6px;
    }
    .box_registrasi{
        width: 520px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 10px;
        border: 5px solid #D2D6CE;
        background: #D2D6CE;
        opacity: 70%;
        border-radius: 20px;
        margin: 10px;
        margin-top: 6px;
    }
    .box_prosedur{
        width: 800px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 10px;
        border: 5px solid #D2D6CE;
        background: #D2D6CE;
        opacity: 70%;
        border-radius: 20px;
        margin: 0;
    }
    .point{
        width: 700px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 10px;
        border: 5px solid #FFFFFF;
        background: #FFFFFF;
        opacity: 70%;
        border-radius: 20px;
        margin: 4;
    }
    .box_welcome{
        width: 700px;
        height: 300px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 10px;
        border: 5px solid #D2D6CE;
        background: #D2D6CE;
        opacity: 70%;
        border-radius: 20px;
        margin-top: -150px;
        margin-left: 430px;
    }
    .sidebar{
        margin-left: 100px;
    }
    .sidebar .point{
        width: 200px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 10px;
        border: 5px solid #FFFFFF;
        background: #FFFFFF;
        opacity: 70%;
        border-radius: 20px;
        margin: 4;
        text-align: center;
    }
    .sidebar a{
        text-decoration: none;
        display: block;
        color: black;
        font-weight: bold;
    }
    .prosedur_pendaftaran h1{
        margin-left: 170px;
    }
    .box_kritik{
        width: 500px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 10px;
        border: 5px solid #D2D6CE;
        background: #D2D6CE;
        opacity: 70%;
        border-radius: 20px;
        margin: 0;
        margin-top: 80px;
    }
    .kritik_textarea {
        width: 400px;
        height: 150px;
        border: 2px solid #ccc;
        border-radius: 6px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
    }
    .kritik-button{
        font-family: "Times New Roman";
        font-size: 15px;
        background: #209B2C;
        color: #181820;
        border-radius: 20px;
        padding: 12px 20px;
        margin-top: 10px;
    }
    .kritik-button:hover{
        opacity:0.9;
    }
    .full{
        width: 675px;
        height: 40px;
        border: 2px solid #ccc;
        border-radius: 6px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
        margin: 5px;
    }
    .half{
        width: 330px;
        height: 40px;
        border: 2px solid #ccc;
        border-radius: 6px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
        margin: 5px;
    }
    .half-right{
        margin-left: 345px;
        margin-top: -67px;
    }
    .login-textarea {
        width: 300px;
        height: 40px;
        border: 2px solid #ccc;
        border-radius: 6px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
        margin: 5px;
    }
    .login-button{
        font-family: "Times New Roman";
        font-size: 15px;
        background: #209B2C;
        color: #181820;
        border-radius: 20px;
        width: 100px;
        height: 40px;
        margin: 5px;
    }
    .login-button:hover{
        opacity:0.9;
    }
    .registrasi-textarea {
        width: 300px;
        height: 40px;
        border: 2px solid #ccc;
        border-radius: 6px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
        margin: 5px;
    }
    .registrasi-button{
        font-family: "Times New Roman";
        font-size: 15px;
        background: #E3BA50;
        color: #181820;
        border-radius: 20px;
        width: 100px;
        height: 40px;
        margin: 5px;
        margin-left: 395px;
    }
    .registrasi-button:hover{
        opacity:0.9;
    }
    .formulir-button{
        font-family: "Times New Roman";
        font-size: 15px;
        background: #E3BA50;
        color: #181820;
        border-radius: 20px;
        width: 100px;
        height: 40px;
        margin-left: 300px;
        margin-top: 80px;
    }
    .formulir-button:hover{
        opacity:0.9;
    }
    .submit-button{
        font-family: "Times New Roman";
        font-size: 15px;
        background: #E3BA50;
        color: #181820;
        border-radius: 20px;
        width: 100px;
        height: 40px;
        margin-left: 300px;
        margin-top: 40px;
    }
    .submit-button:hover{
        opacity:0.9;
    }
    .text-center{
        text-align: center;
    }
    
    </style>
    <body>
        <header>
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo" />
                <a href="<?php echo base_url(); ?>">Madrasah Aliyah XYZ</a>
                <div class="nav">
                    <a href="<?php echo base_url(); ?>">Beranda</a>
                    <a href="<?php echo base_url('prosedur'); ?>">Prosedur</a>
                    <a href="<?php echo base_url('kritik'); ?>">Kritik & Saran</a>
                    <a href="<?php echo base_url('auth'); ?>"><button class="masuk">Masuk</button></a>
                </div>
        </header>
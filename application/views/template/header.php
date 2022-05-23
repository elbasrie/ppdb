<html>
    <head>
        <title>MA Darussalam</title>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/styles2.css">
    </head>
    <style>
    header {
        grid-area: header;
        background:#209B2C;
        padding: 1em;
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
        border-radius: 5px;
        padding: 12px 20px;
        margin-top: -70px;
    }
    .pendaftaran{
        font-family: "Times New Roman";
        font-size: 15px;
        background: #209B2C;
        color: #404040;
        border-radius: 5px;
        padding: 12px 20px;
        margin-top: -70px;
    }
    .masuk:hover{
        opacity:0.9;
    }
    .home_page{
        margin-left: 100px;
        margin-top: 130px;
    }
    .image_home{
        margin-top: 130px;
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
        margin-left: 210px;
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
    .prosedur_pendaftaran h1{
        margin-left: 170px;
    }
    
    </style>
    <body>
        <header>
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo" />
                <a href="<?php echo base_url(); ?>">Madrasah Aliyah<br><a>Darussalam</a></a>
                <div class="nav">
                    <a href="<?php echo base_url(); ?>">Beranda</a>
                    <a href="<?php echo base_url('prosedur'); ?>">Prosedur</a>
                    <a href="about.html">Bantuan</a>
                    <a href="<?php echo base_url('auth'); ?>"><button class="masuk">Masuk</button></a>
                </div>
        </header>
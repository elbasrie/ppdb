<html>
    <head>
        <title>MA Darussalam</title>
    </head>
    <style>
    header {
        grid-area: header;
        background:#209B2C;
        padding: 1em;
        }
    header a {
        text-decoration:none;
        color: #FFFFFF;
        font-size:1em;
        font-weight:700;
    }
    body {
        margin:0;
        background-image: linear-gradient(to bottom, rgb(255, 255, 255) , #E3BA50 , #209B2C );
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
    
    </style>
    <body>
        <header>
                <a href="<?php echo base_url(); ?>">Madrasah Aliyah<br>Darussalam</a>
                <div class="nav">
                    <a href="<?php echo base_url(); ?>">Beranda</a>
                    <a href="about.html">Prosedur</a>
                    <a href="about.html">Bantuan</a>
                    <a href="<?php echo base_url('auth'); ?>"><button class="masuk">Masuk</button></a>
                </div>
        </header>
<html>
    <head>
        <title>MA XYZ</title>
        <link href="<?php echo base_url('/css/styles2.css');?>" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-image: url('<?php echo base_url('assets/img/background.png');?>');">
        <header>
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo" />
                <a href="<?php echo base_url(); ?>">Madrasah Aliyah XYZ</a>
                <div class="nav">
                    <a href="<?php echo base_url(); ?>">Beranda</a>
                    <a href="<?php echo base_url('home/prosedur'); ?>">Prosedur</a>
                    <?php
                        if(!empty($this->session->userdata('email'))) { ?>
                        <a href="<?php echo base_url('auth/logout'); ?>"><button class="masuk">Keluar</button></a>
                    <?php } else { ?>
                        <a href="<?php echo base_url('auth'); ?>"><button class="masuk">Masuk</button></a>
                    <?php } ?>
                </div>
        </header>
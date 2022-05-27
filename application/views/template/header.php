<html>
    <head>
        <title>MA XYZ</title>
        <link href="<?php echo base_url('/css/styles2.css');?>" rel="stylesheet">
    </head>
    <body style="background-image: url('<?php echo base_url('assets/img/background.png');?>');">
        <header>
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo" />
                <a href="<?php echo base_url(); ?>">Madrasah Aliyah XYZ</a>
                <div class="nav">
                    <a href="<?php echo base_url(); ?>">Beranda</a>
                    <a href="<?php echo base_url('prosedur'); ?>">Prosedur</a>
                    <a href="<?php echo base_url('kritik'); ?>">Kritik & Saran</a>
                    <?php
                        if(!empty($this->session->userdata('email'))) { ?>
                        <a href="<?php echo base_url('auth/logout'); ?>"><button class="masuk">Keluar</button></a>
                    <?php } else { ?>
                        <a href="<?php echo base_url('auth'); ?>"><button class="masuk">Masuk</button></a>
                    <?php } ?>
                </div>
        </header>
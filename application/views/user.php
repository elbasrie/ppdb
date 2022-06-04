<html>
    <head>
        <title>MA XYZ</title>
    </head>
    <body>
        <div class="row">
            <div class="column"></div>
                <div class="sidebar">
                    <div class="box_hello">
                        <a>Halo, <?= $this->session->userdata('nama'); ?>.</a>
                    </div>
                    <div class="box_sidebar">
                        <div class="row">
                            <div class="point">
                                <a href="<?php echo base_url('user'); ?>">Home</a>
                            </div>
                            <div class="point">
                                <a href="<?php echo base_url('user/data'); ?>">Data Form</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="box_welcome">
                    <h3 class="text-center">Selamat Datang</h3>
                    <a>Halaman ini merupakan resmi Pendaftaran Peserta Didik Baru MA XYZ. Untuk melakukan pendaftaran silahkan klik menu daftar. Untuk informasi lebih lanjut bisa menghubungi Panitia PPDB melalui No.TIp/HP berikut 082134323456.</a>
                    <div style="clear:both"></div>
                    <a href="<?php echo base_url('user/formulir'); ?>"><button class="formulir-button">Isi Formulir</button></a>
                </div>
            </div>
        </div>
    </body>
</html>
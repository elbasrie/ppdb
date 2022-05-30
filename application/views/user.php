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
                    <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel erat ac urna sodales feugiat vel id ante. Vestibulum dictum ac ipsum ut iaculis. Pellentesque fermentum mi id magna bibendum rutrum. Morbi nec risus sit amet mauris consectetur dapibus. Quisque pulvinar venenatis sem id finibus. Pellentesque eleifend condimentum nibh in aliquam. Integer fermentum nunc ac leo eleifend porta. Nam egestas libero et orci ultricies, vel mollis erat feugiat. Donec tincidunt vulputate ipsum, vel luctus sapien consectetur a. Sed gravida ac lorem vel dapibus.</a>
                    <div style="clear:both"></div>
                    <a href="<?php echo base_url('user/formulir'); ?>"><button class="formulir-button">Isi Formulir</button></a>
                </div>
            </div>
        </div>
    </body>
</html>
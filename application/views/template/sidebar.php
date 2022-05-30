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
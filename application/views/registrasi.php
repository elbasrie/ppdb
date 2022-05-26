<div class="registrasi_page">
    <div class="row">
        <div class="column">
            <div class="box_form_registrasi">
                <h3>Form Registrasi</h3>
            </div>
            <div class="box_registrasi">
                <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                    <div class="form-group">
                        <div class="column">
                            <a class="a-registrasi">Nama</a>
                        </div>
                        <div class="column">
                            <input type="text" class="registrasi-textarea" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="column">
                            <a class="a-registrasi">Email</a>
                        </div>
                        <div class="column">
                            <input type="text" class="registrasi-textarea" id="email" name="email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="column">
                                <a class="a-registrasi">Password</a>
                            </div>
                            <div class="column">
                                <input type="password" class="registrasi-textarea" id="password1" name="password1">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="column">
                                <a class="a-registrasi">Konfirmasi Password</a>
                            </div>
                            <div class="column">
                                <input type="password" class="registrasi-textarea" id="password2" name="password2">
                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="registrasi-button">
                        Daftar
                    </button>
                </form>
                <div class="text-center">
                    Sudah Menjadi Member?<a class="small" href="<?= base_url('auth'); ?>"> Login!</a>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="image_registrasi">
                <img src="<?php echo base_url('assets/img/library.jpg'); ?>" width="300" height="450">
            </div>
        </div>
    </div>
</div>
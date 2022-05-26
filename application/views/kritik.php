<center>
    <div class="box_kritik">
        <h1>Kritik dan Saran</h1>
        <form method="post" action="<?php echo base_url('/kritik/suggest'); ?>">
            <textarea class="kritik_textarea" name="kritik" id="kritik" value="<?= set_value('kritik') ?>" placeholder="  Masukkan Kritik dan Saran." required></textarea>
            <div style="clear:both"></div>
            <button class="kritik-button" type="submit">Kirim</button>
        </form>
    </div>
</center>
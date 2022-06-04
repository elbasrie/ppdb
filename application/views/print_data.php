<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr td,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding: 10px 10px 10px 10px;
        }

        h3 {
            font-family: Verdana;
        }
    </style>
    <h3>
        <center>Laporan Data Formulir</center>
    </h3>
    <br />
    <table class="table-data">
        <thead>
            <?php
            foreach ($formulir as $f) {
            ?>
            <tr>
                <td style="font-weight: bold;">NISN</td>
                <td><?php echo $f->nisn ?></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Tanggal Pendaftaran</td>
                <td><?php echo $f->tgl_pendaftaran ?></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Nama</td>
                <td><?php echo $f->nama ?></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Asal Sekolah</td>
                <td><?php echo $f->asal_sekolah ?></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Jenis Kelamin</td>
                <td><?php echo $f->jenis_kelamin ?></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Alamat</td>
                <td><?php echo $f->alamat ?></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Tempat Tanggal Lahir</td>
                <td><?php echo $f->tempat_lahir ?>, <?php echo $f->tanggal_lahir ?></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">No. Telp</td>
                <td><?php echo $f->no_tlp ?></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Nama Ortu</td>
                <td><?php echo $f->nama_ortu ?></td>
            </tr>
            <?php
            }
            ?>
        </tdead>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
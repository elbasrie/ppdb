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

        .table-data tr th,
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
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Tanggal Pendaftaran</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tempat Tanggal Lahir</th>
                <th>No. Telp</th>
                <th>Nama Ortu</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($formulir as $f) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $f->nisn ?></td>
                    <td><?php echo $f->tgl_pendaftaran ?></td>
                    <td><?php echo $f->nama ?></td>
                    <td><?php echo $f->asal_sekolah ?></td>
                    <td><?php echo $f->jenis_kelamin ?></td>
                    <td><?php echo $f->alamat ?></td>
                    <td><?php echo $f->tempat_lahir ?>, <?php echo $f->tanggal_lahir ?></td>
                    <td><?php echo $f->no_tlp ?></td>
                    <td><?php echo $f->nama_ortu ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
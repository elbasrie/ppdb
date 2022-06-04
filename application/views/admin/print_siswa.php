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
        <center>Laporan Data Siswa Aktif</center>
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
            foreach ($siswa as $s) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $s->nisn ?></td>
                    <td><?php echo $s->tgl_pendaftaran ?></td>
                    <td><?php echo $s->nama ?></td>
                    <td><?php echo $s->asal_sekolah ?></td>
                    <td><?php echo $s->jenis_kelamin ?></td>
                    <td><?php echo $s->alamat ?></td>
                    <td><?php echo $s->tempat_lahir ?>, <?php echo $s->tanggal_lahir ?></td>
                    <td><?php echo $s->no_tlp ?></td>
                    <td><?php echo $s->nama_ortu ?></td>
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
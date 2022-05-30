<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data User</h1>
        <ol class="breadcrumb mb-4">
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php 
                    $no = 1;
                    foreach($user as $u){ 
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $u->nama ?></td>
                            <td><?php echo $u->email ?></td>
                            <td><?php echo $u->role ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
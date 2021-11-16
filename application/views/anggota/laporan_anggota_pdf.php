<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <style type="text/css">
    .table-data{
        width: 100%;
        border-collapse: collapse;
    }

    .table-data tr th,
    .table-data tr td{
        border: 1px solid black;
        font-size: 11pt;
        padding: 10px 10px 1opx;
    }
    </style>
    <h3><center>Laporan Data Anggota Perpustakaan Online</center></h3>
    <br/>
    <table class="table-data">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>
                <th scope="col">Is_active</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $a = 1;
            foreach ($anggota as $b) { ?>
                <tr>
                    <th scope="row"><?= $a++; ?></th>
                    <td><?= $b['nama']; ?></td>
                    <td><?= $b['alamat']; ?></td>
                    <td><?= $b['email']; ?></td>
                    <td><img src="<?= base_url('assets/img/upload/').$b['image']; ?>" /></td>
                    <td><?= $b['is_active']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

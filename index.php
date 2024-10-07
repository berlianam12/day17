<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<a href="./form.php"  class="btn btn-primary mt-5 ml-5">TAMBAH</a>
    <table class="table mt-5 ml-5 mr-5" id="myTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Button</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include './koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from pasien");
            while ($d = mysqli_fetch_array($data)){
            ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d['nama']; ?></td>
                <td><?= $d['tanggal_lahir']; ?></td>
                <td><?= $d['jenis_kelamin']; ?></td>
                <td><?= $d['alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $d['id'];?>"  class="btn btn-warning">EDIT</a>
                    <a href="hapus.php?id=<?= $d['id'];?>"  class="btn btn-danger">HAPUS</a>
                </td>
            </tr>
            <?php
            };
            ?>
        </tbody>
    </table>
</body>
<script>
    let table = new DataTable('#myTable');
</script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</script>
</html>
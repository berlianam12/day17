<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php
    include './koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from pasien where id='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
    <form method="POST" action="update.php?id=<?= $id;?>.php">
    <div class="form-group">
    <label for="inputNama">Nama</label>
    <input type="text" class="form-control" id="inputNama" aria-describedby="emailHelp" placeholder="Masukkan Nama" name="nama" value="<?= $d['nama'];?>">
  </div>
    <div class="form-group">
    <label for="inputTanggal">Tanggal Lahir</label>
    <input type="date" class="form-control" id="inputTanggal" aria-describedby="emailHelp" placeholder="Masukkan tangal" name="tanggal_lahir" value="<?= $d['tanggal_lahir'];?>">
  </div>
    <div class="form-group">
    <label for="inputJK">Jenis Kelamin</label>
    <input type="text" class="form-control" id="inputJK" aria-describedby="emailHelp" placeholder="Masukkan JK" name="jenis_kelamin" value="<?= $d['jenis_kelamin'];?>">
  </div>
    <div class="form-group">
    <label for="inputAlamat">Alamat</label>
    <input type="text" class="form-control" id="inputAlamat" aria-describedby="emailHelp" placeholder="Masukkan alamat" name="alamat" value="<?= $d['alamat'];?>">
  </div>
  <button type="submit" class="btn btn-success">SIMPAN</button>
    </form>
    <?php };?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
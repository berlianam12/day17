<?php
include './koneksi.php';
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "insert into pasien values('','$nama','$tanggal_lahir','$jenis_kelamin','$alamat')");

header("Location: index.php");

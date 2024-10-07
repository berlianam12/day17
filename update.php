<?php
include './koneksi.php';
$id = $_GET['id'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE pasien 
SET 
    nama = '$nama', 
    tanggal_lahir = '$tanggal_lahir', 
    jenis_kelamin = '$jenis_kelamin', 
    alamat = '$alamat'
WHERE id = '$id';");

header("Location: index.php");

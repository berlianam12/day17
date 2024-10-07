<?php
$koneksi = mysqli_connect("localhost","root","","dbmaxy_rs");

if (mysqli_connect_errno()){
    echo "ERRORRRR : " . mysqli_connect_error();
}
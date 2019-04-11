<?php
include 'koneksi.php';

$i = 1;

$query = "SELECT tbl_user.id_user, tbl_user.nama_anggota, tbl_user.alamat, tbl_user.status_bayar, tbl_user.status_menang FROM tbl_user";
$result = mysqli_query($con, $query);
?>
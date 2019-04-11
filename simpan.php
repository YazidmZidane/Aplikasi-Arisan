<?php 
include 'koneksi.php';

$nama_anggota = $_POST['nama_anggota'];
$alamat = $_POST['alamat'];

$user = "INSERT INTO tbl_user SET nama_anggota='$nama_anggota', alamat='$alamat', status_bayar='Belum Bayar', status_menang='Belum Menang'";

$result = mysqli_query($con, $user);

if($result){
    $message = "Data Berhasil Ditambahkan";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "Data Gagal Ditambahkan". mysqli_error($result);
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
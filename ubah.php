<?php
include 'koneksi.php';

$nama_anggota = $_POST['nama_anggota'];
$alamat = $_POST['alamat'];
$id_user = $_POST['id_user'];

$user = "UPDATE tbl_user SET nama_anggota='$nama_anggota', alamat='$alamat' WHERE id_user='$id_user'";

$result = mysqli_query($con, $user);

if($result){
    $message = "Data Berhasil Diubah";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "Data Gagal Diubah". mysqli_error($result);
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
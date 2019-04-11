<?php
include 'koneksi.php';

$id_user = $_GET['id'];

$user = "DELETE FROM tbl_user WHERE id_user = '$id_user'";
$bayar = "DELETE FROM tbl_bayar WHERE id_user = '$id_user'";
$iuran = "DELETE FROM tbl_iuran WHERE id_user = '$id_user'";

$result = mysqli_query($con, $user);
$result = mysqli_query($con, $bayar);
$result = mysqli_query($con, $iuran);

if($result){
    $message = "Data Berhasil Dihapus";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "Data Gagal Dihapus". mysqli_error($result);
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
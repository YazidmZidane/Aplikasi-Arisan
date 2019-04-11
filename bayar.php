<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "UPDATE tbl_user SET status_bayar='Sudah Bayar' WHERE id_user = '$id'";

$result = mysqli_query($con, $query);

if($result){
    header("location:index.php");
} else {
    $message = "Gagal Membayar". mysqli_error($result);
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
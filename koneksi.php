<?php 
$servername = 'localhost';
$db = 'db_arisan';
$username = 'root';
$password = '';

$con = mysqli_connect($servername, $username, $password, $db);

if(!$con) {
    die("Koneksi Error ". mysqli_error());
}

?>
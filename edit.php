<?php 
include 'koneksi.php';
include 'menu.php';
session_start();

$id_user = $_GET['id'];
$_SESSION['id_user'] = $id_user;
?>
<html>
<head>
    <title>Aplikasi Arisan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <h1>Data Anggota Arisan</h1>
        <center>
        <a href="tambah.php"><button class="btntag"><span>Tambah</span></button></a>     
        <a href="index.php"><button class="btntag"><span>Kembali</span></button></a>   
        <a href="kocok.php"><button class="btntag"><span>Kocok Arisan</span></button></a>
        </center>
    <form action="ubah.php" method="post">
        <table border>
            <tr>                
                <td class="mini">No.</td>
                <td>Nama Anggota</td>
                <td>Alamat</td>
                <td>Status Bayar</td>
                <td>Status Menang</td>
                <td>Action</td>
            </tr>
            <?php while($row = mysqli_fetch_array($result)) { ?>
            <?php if($row['id_user'] == $id_user) { ?>
                <tr>
                <td class="mini"><?php echo $i; ?></td>
                <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                <td><input type="text" name="nama_anggota" value="<?php echo $row['nama_anggota']; ?>" required></td>
                <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required></td>
                <td><input type="text" name="nama_anggota" value="<?php echo $row['status_bayar']; ?>" disabled></td>
                <td><input type="text" name="nama_anggota" value="<?php echo $row['status_menang']; ?>" disabled></td>
                <td><a href="hapus.php?id=<?php echo $row['id_user']; ?>">Hapus</a>
                    <a href="edit.php?id=<?php echo $row['id_user']; ?>">Ubah</a>
                    <a href="bayar.php?id=<?php echo $row['id_user']; ?>">Bayar</a>
                </td>
            </tr>
            <?php $i++; } else { ?>
            <tr>                
                <td class="mini"><?php echo $i; ?></td>
                <td><?php echo $row['nama_anggota']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['status_bayar']; ?></td>
                <td><?php echo $row['status_menang']; ?></td>
                <td><a href="hapus.php?id=<?php echo $row['id_user']; ?>">Hapus</a>
                    <a href="edit.php?id=<?php echo $row['id_user']; ?>">Ubah</a>
                    <a href="bayar.php?id=<?php echo $row['id_user']; ?>">Bayar</a>
                </td>
            </tr>
            <?php $i++; } } ?>
        </table>
        <button class="btntambah"><span>Simpan</span></button>
    </form>
    </div>
</body>
</html>
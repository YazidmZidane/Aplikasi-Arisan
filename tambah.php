<?php
include 'koneksi.php';
include 'menu.php';
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
        <a href="index.php"><button class="btntag"><span>Kembali</span></button></a>        
        <a href="kocok.php"><button class="btntag"><span>Kocok Arisan</span></button></a>
        </center>
    <form action="simpan.php" method="post">
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
            <?php $i++; } ?>
            <tr>
                <td class="mini"><?php echo $i; ?></td>
                <td><input type="text" name="nama_anggota" placeholder="Nama Anggota" required></td>
                <td><input type="text" name="alamat" placeholder="Alamat" required></td>
                <td><input type="text" name="nama_anggota" disabled></td>
                <td><input type="text" name="nama_anggota" disabled></td>
                <td><a href="hapus.php?id=<?php echo $row['id_user']; ?>">Hapus</a>
                    <a href="edit.php?id=<?php echo $row['id_user']; ?>">Ubah</a>
                    <a href="bayar.php?id=<?php echo $row['id_user']; ?>">Bayar</a>
                </td>
            </tr>            
        </table>
        <button class="btntambah"><span>Simpan</span></button>
    </form>
    </div>
</body>
</html>
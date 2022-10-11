<?php include("koneksi.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="datasiswa.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="shortcut icon" href="zeta.png">
    <title>Z&#x039E;NIST</title>
</head>
<body>
<div class="navbar">
    <header>
         <h1><a href="index.php">Z&#x039E;NIST</a></h1>    
    <ul>
        <li><a href="#">Help</a></li>
        <li><a href="datasiswa.php">Data Siswa</a></li>
        <li><a href="inputsiswa.php">Input Siswa</a></li>
    </ul>
</div>
<h3>Data Siswa</h3>
<div class="search">
<form action="datasiswa.php" method="get">
        <input type="text" name="cari" id="search" placeholder="Search">
        <button type="submit" value="cari" id="button">Search</button>
    </form>
</div>
    <?php
    if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
    }
    ?>
<table>
        <tr>
            <th>ID</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>TTL</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

    <?php
        if(isset($_GET['cari'])){
            $cari   =   $_GET['cari'];
            $query  =   "SELECT * FROM data_siswa WHERE nama_lengkap like '%$cari%' OR kelas like '%$cari%' OR jurusan like '%$cari%' OR nis like '%$cari%'";
        }else{
            $query  = "SELECT * FROM data_siswa";
        }
            $query  = mysqli_query($db, $query);
            while ($data_siswa= mysqli_fetch_array($query)){ 

             echo "<tr>";
             echo "<td>". $data_siswa ['id']."</td>";
             echo "<td>". $data_siswa ['nis']."</td>";
             echo "<td>". $data_siswa ['nama_lengkap']."</td>"; 
             echo "<td>". $data_siswa ['tanggal_lahir']."</td>";
             echo "<td>". $data_siswa ['kelas']."</td>";
             echo "<td>". $data_siswa ['jurusan']."</td>";
             echo "<td>". $data_siswa ['email']."</td>";
             echo "<td>". $data_siswa ['alamat']."</td>";
             echo "<td>";
             echo "<a href='form_edit.php?id=".$data_siswa['id']. "'>Edit</a> |";
             echo "<a href='hapusdata.php?id=".$data_siswa['id']. "'>Hapus</a>";
             echo "</td>";
        }
        ?>
        </table>
</body>
</html>
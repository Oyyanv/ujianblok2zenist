<?php
include("koneksi.php");

    if(!isset($_GET['id'])){
        header('Location : datasiswa.php');
    }

$id = $_GET['id'];

$sql = "SELECT * FROM data_siswa WHERE id=$id";
$query = mysqli_query ($db, $sql);
$data_siswa = mysqli_fetch_assoc ($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inputsiswa.css">
    <link rel="shortcut icon" href="zeta.png">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
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
<h3>Edit Data Siswa</h3>
<div class="f">
    <form method="post" action="editdata.php">
    <div class="nis">
            NIS : <br>
            <input type="hidden" name="id" required value="<?php echo $data_siswa['id']?>"/>
            <input type="text" name="nis" value="<?php echo $data_siswa['nis']?>"/>
        </div>
        <div class="nama">
            Nama : <br>
            <input type="text" name="nama_lengkap" required value="<?php echo $data_siswa['nama_lengkap']?>"/>
        </div>
        <div class="ttl">
            Tanggal Lahir : <br>
            <input type="date" name="tanggal_lahir" required value="<?php echo $data_siswa['tanggal_lahir']?>"/>
        </div>
        <div class="kelas">
            Kelas : <br>
            <div>
        <select name="kelas" required>
          <option disabled selected hidden><?php  echo $data_siswa['kelas']?></option>
          <option>X</option>
          <option>XI</option>
          <option>XII</option>
        </select>
      </div>
        </div>
        <div class="jurusan">   
        Jurusan : <br> 
        <select name="jurusan" required>
        <option disabled selected hidden><?php  echo $data_siswa['jurusan']?>
            <option>Rekayasa Perangkat Lunak</option>
            <option>Teknik Jaringan Akses Telekomunikasi</option>
            <option>Teknik Jaringan Dan Komputer</option>
            <option>Animasi</option>
            <option>Desain Komunikasi Visual</option>
        </option>
    </select>
        <div class="email">
            Email : <br>
            <input type="email" name="email" required value="<?php echo $data_siswa['email']?>"/>
        </div>
        <div class="alamat">
            Alamat : <br>
            <textarea name="alamat" required><?php echo $data_siswa['alamat']?></textarea>
        </div>
        <div class="submit">
        <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
</div>
</body>
</html>
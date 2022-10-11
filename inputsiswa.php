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
        <li><a href="#">Input Siswa</a></li>
    </ul>
   </div>
<h3>Input Data Siswa</h3>
<div class="f">
    <form method="post" action="proses.php">
        <div class="nis">
            NIS : <br>
            <input type="text" name="nis" value="" placeholder="NIS" required>
        </div>
        <div class="nama">
            Nama : <br>
            <input type="text" name="nama_lengkap" value="" placeholder="Nama" required>
        </div>
        <div class="ttl">
            Tanggal Lahir : <br>
            <input type="date" name="tanggal_lahir" value="" required>
        </div>
        <div class="kelas">
            Kelas : <br>
        <select name="kelas" required>
          <option disabled selected hidden>---- Pilih Kelas ----</option>
          <option>X</option>
          <option>XI</option>
          <option>XII</option>
        </select>
        </div>
        <div class="jurusan">
            Jurusan : <br>
        <select name="jurusan" required>
        <option disabled selected hidden>----- Pilih Jurusan -----</option>
        <option>Rekayasa Perangkat Lunak</option>
        <option>Teknik Jaringan Akses Telekomunikasi</option>
        <option>Teknik Jaringan Dan Komputer</option>
        <option>Animasi</option>
        <option>Desain Komunikasi Visual</option>
    </select>
        </div>
        <div class="email">
            Email : <br>
            <input type="email" name="email" value="" placeholder="Email" required>
        </div>
        <div class="alamat">
            Alamat : <br>
            <textarea name="alamat" required></textarea>
        </div>
        <div class="submit">
        <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</div>
</body>
</html>
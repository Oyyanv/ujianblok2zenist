<?php
include("koneksi.php");

if(isset($_POST['submit'])){

    $nis                    = $_POST['nis'];
    $nama_lengkap           = $_POST['nama_lengkap'];
    $tanggal_lahir          = $_POST['tanggal_lahir'];
    $kelas                  = $_POST['kelas'];
    $jurusan                = $_POST['jurusan'];
    $email                  = $_POST['email'];
    $alamat                 = $_POST['alamat'];

    $sql = "INSERT INTO data_siswa (nis, nama_lengkap, tanggal_lahir, kelas, jurusan, email, alamat) VALUE ('$nis','$nama_lengkap','$tanggal_lahir','$kelas','$jurusan','$email','$alamat')";
    $query = mysqli_query($db, $sql);

    if ($query){
        header('location: datasiswa.php?status=sukses');
    }else{
        header('location: datasiswa.php?status=gagal');
    }

}else{
    die('akses dilarang...');
}
?>
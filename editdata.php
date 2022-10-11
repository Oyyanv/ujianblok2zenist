<?php
include("koneksi.php");

if(isset($_POST['simpan'])){

    $id             =   $_POST['id'];
    $nis            =   $_POST['nis'];
    $nama           =   $_POST['nama_lengkap'];
    $tanggal_lahir  =   $_POST['tanggal_lahir'];
    $kelas          =   $_POST['kelas'];
    $jurusan        =   $_POST['jurusan'];
    $email          =   $_POST['email'];
    $alamat         =   $_POST['alamat'];

    $sql = "UPDATE data_siswa SET nis='$nis', nama='$nama_lengkap', tanggal_lahir='$tanggal_lahir', kelas='$kelas', jurusan='$jurusan', email='$email', alamat='$alamat'";
    $query = mysqli_query($db, $sql);
    
    if($query){
        header('Location : datasiswa.php');
    } else {
        die("gagal menyimpan perubahan");
    }    
    
} else {
    die("akses dilarang...");
}

?>
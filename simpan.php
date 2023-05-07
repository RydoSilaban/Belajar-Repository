<?php 
    include('koneksi.php');
    
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenkel = $_POST['jenkel'];
    $lahir = $_POST['tgllahir'];
    $telepon = $_POST['telp'];

    // proses simpan database
    $sql = "insert into mahasiswa values ('$nim', '$nama', '$jenkel', '$lahir', '$telepon')";

    $proses = mysqli_query ($koneksi,$sql);
    if ( $proses ) {
        header("Location:tampil.php");
    }
?>
<?php 
    include ("koneksi.php");

    $sql = "select * from mahasiswa";

    $proses = mysqli_query($koneksi, $sql);

    while ($isi = mysqli_fetch_assoc($proses)){
        echo "NIM           : " . $isi['nim'] . "<br>";
        echo "Nama          : " . $isi['nama'] . "<br>";
        echo "Jenis Kelamin : " . $isi['jenkel'] . "<br>";
        echo "Tanggal lahir : " . $isi['lahir'] . "<br>";
        echo "Nomor hp      : " . $isi['hp'] . "<br><br>";
    }
?>
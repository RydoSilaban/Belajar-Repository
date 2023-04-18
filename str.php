<?php 
    echo strlen("hello world!")."<br><br>";// untuk mengitung jumlah karakter pada string
    
    echo str_word_count("hello world!")."<br><br>";// untuk menghitung jumlah kata pada string

    echo strrev("hello world!")."<br><br>";// untuk membalikkan urutan karakter pada string

    echo strpos("hello world!","world")."<br><br>";// untuk mencari posisi awal dari sebuah string, untuk contohnya kita mencari posisi pada kata world

    echo str_replace("world","rydo","hello world");// untuk mengganti sebuah kata pada sebuah kalimat, untuk contoh nya kita mengubah kata world nya dengan rydo
?>
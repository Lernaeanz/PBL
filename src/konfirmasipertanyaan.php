<?php
    //akses file koneksi database
    include "koneksi.php";
        //cek username dan password
        mysqli_query($koneksi,"INSERT INTO tiket set 
        nama = '$_POST[nama]',
        nim = '$_POST[nim]',
        email = '$_POST[email]',
        kategori = '$_POST[kategori]',
        pertanyaan = '$_POST[pertanyaan]' ");

        header('location: tiket.php');

    ?>
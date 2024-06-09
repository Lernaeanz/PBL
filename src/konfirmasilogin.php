<?php
    //akses file koneksi database
    include "koneksi.php";
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pilihan = $_POST['pilihan'];
        
        //cek username dan password
        mysqli_query($koneksi, "INSERT INTO user set
        username = '$_POST[username]',
        email = '$_POST[email]' ,
        pilihan = '$_POST[pilihan]' ");

        if ($pilihan == "admin"){
                    header('location: dashboard admin.php');
            }else if ($pilihan == "superadmin"){
                header('location: superadmin db.php');
            }else{
                    header('location: tiket.php ');
        
            }
        }
?>
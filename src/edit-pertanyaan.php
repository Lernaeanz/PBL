<?php
        include 'koneksi.php';
        if (isset($_POST['submit'])) {
          $id = $_POST['id'];
          $pertanyaan = $_POST['pertanyaan'];
          $jawaban = $_POST['jawaban'];
          $level = $_POST['level'];

          $query = mysqli_query($koneksi, "UPDATE tiket SET pertanyaan='$pertanyaan', jawaban='$jawaban', level='$level' WHERE tiket_id='$id'");

          header("Location: pertanyaan%20admin.php");

        }
?>
<?php
     $host="localhost";
     $user="root";
     $pass="";
     $database="sekolah";

     $koneksi = mysqli_connect($host, $user, $pass, $database);
     if (!$koneksi) {
          echo "Gagal";
          mysqli_close($koneksi);
     }


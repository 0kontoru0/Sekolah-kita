<?php
    include "../connection.php";

    $id= rand(10, 999);
    $nama= $_POST['nama'];
    $kelas= $_POST['kelas'];
    $jurusan= $_POST['jurusan'];

    $insert = mysqli_query($koneksi,"INSERT INTO siswa SET id = '$id', nama = '$nama', kelas ='$kelas', jurusan ='$jurusan'");
    if($insert){
        // var_dump($insert);
        $pesan ='Keren Bro';
        echo "<SCRIPT> //not showing me this
        alert('$pesan')
        window.location.replace('../index.php');
        </SCRIPT>";
     }
    else{
        echo "gagal";
        // var_dump($insert);
    }
?>
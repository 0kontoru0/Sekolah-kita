<?php
    include "../connection.php";
    if(isset($_GET['cari'])){
        $cari= $_GET['cari'];
        $select =mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$cari'");
        if($select){
            header("location ../index.php");
        }else{
            echo "gagal";
        }
    }
    
    //$id= $_GET['id'];

?>
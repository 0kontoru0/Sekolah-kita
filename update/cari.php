<?php
    include "../connection.php";
    if(isset($_GET['cari'])){
        $cari= $_GET['cari'];
        $select =mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$cari'");
    }
    
    //$id= $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body> 
    <?php 
        while($data=mysqli_fetch_array($select)) { ?>
        
        <form action="update_data.php" value="id" method="post" class="form">
        <div class="title">Update</div>
        <div class="subtitle">Update Data Anda</div>
        <div class="input-container mt-30">
            <input id="id" class="input" type="text" name="id" value="<?php echo $data['id'] ?>" readonly>
            <div class=" cut">
            </div>
            <label for="id" class="placeholder">ID</label>
        </div>
        <div class="input-container mt-30">
            <input id="namalengkap" class="input" type="text" name="nama" value="<?php echo $data['nama'] ?>" required>
            <div class=" cut">
            </div>
            <label for="namalengkap" class="placeholder">Nama Lengkap</label>
        </div>
        <div class="input-container mt-30">
            <input id="kelas" class="input" type="text" name="kelas" value="<?php echo $data['kelas'] ?>" require>
            <div class="cut"></div>
            <label for="kelas" class="placeholder">Kelas</label>
        </div>
        <div class="input-container mt-30">
            <input id="jurusan" class="input" type="text" name="jurusan" value="<?php echo $data['jurusan'] ?>" require>
            <div class="cut"></div>
            <label for="jurusan" class="placeholder">Jurusan</label>
        </div>
        <button class="submit" type="submit">Submit</button>
    </form>
    <?php 
    }
    ?>

</body>
</html>
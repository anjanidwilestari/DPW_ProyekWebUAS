<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Proyek Web UAS</title>
</head>

<body>
<!-- Form Registrasi -->
<div class=" w-50 mx-auto border p-3 mt-5">
    <h3 class="text-center mt-3 mb-5">Silahkan Tambah Gambar Anda</h3>
    <div class="card p-5 mb-5">
        <a href="galeri.php">Kembali ke Galeri</a>
        <form method="POST" action="tambah_galeri.php" enctype="multipart/form-data">
            <div class="form-group mt-3">
                <label for="judul">Judul Gambar</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group mt-3">
                <label for="caption">Caption</label>
                <input type="text" class="form-control" id="caption" name="caption" >
            </div>
            <div class="form-group mt-3">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control-file border" id="gambar" name="gambar" required>
            </div><br>
            <button type="submit" class="btn btn-primary mt-3" name="tambah">Tambah Data</button>
            <button type="reset" class="btn btn-danger mt-3" name="reset">Reset</button>
        </form>
    </div>
    <?php 
    if(isset($_POST['tambah'])){
        $judul = $_POST['judul'];
        $caption = $_POST['caption'];
        $nama_file = $_FILES['gambar']['name'];
        $source = $_FILES['gambar']['tmp_name'];
        $folder = './upload/';

        move_uploaded_file($source, $folder.$nama_file);
        $sqlInsert = mysqli_query($conn, "INSERT INTO galeri 
                                        VALUES (NULL, '$judul', '$caption', '$nama_file')");


        
        if($sqlInsert){
            header("location: galeri.php");
        } else {
            echo "Maaf, terjadi kesalahan saat mencoba menyimpan data ke database";
        }
    }
    ?>
</div>
<!-- Akhir Form Registrasi -->
</body>
</html>
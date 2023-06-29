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
    <div class="w-50 mx-auto border p-3 mt-5">
        <a href="pariwisata.php">Kembali ke Halaman Pariwisata</a>
        <form action="add.php" method="post" enctype="multipart/form-data">
            <label for="idpariwisata">ID Pariwisata</label>
            <input type="text" id="idpariwisata" name="idpariwisata" class="form-control" required>

            <label for="kategori">Kategori</label>
            <select name="kategori" id="kategori" class="form-select" required>
                <option>Pilih Kategori</option>
                <option value="pegunungan">Pegunungan</option>
                <option value="wisatakeluarga">Wisata Keluarga</option>
                <option value="wisatapendidikan">Wisata Pendidikan</option>
                <option value="wisataalam">Wisata Alam</option>
                <option value="akomodasi">Akomodasi</option>
            </select>

            <label for="namapariwisata">Nama Pariwisata</label>
            <input type="text" id="namapariwisata" name="namapariwisata" class="form-control" required>

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-control" required>

            <label for="gambar">Gambar</label>
            <input type="File" id="gambar" name="gambar" class="form-control" required>

            <label for="tiketmasuk">Tiket Masuk</label>
            <input type="text" id="tiketmasuk" name="tiketmasuk" class="form-control" >

            <input class="btn btn-primary mt-3" type="submit" name="tambah" value="Tambah Data">
            <button type="reset" class="btn btn-danger mt-3" name="reset">Reset</button>
        </form>
    </div>

    <?php
        if(isset($_POST ['tambah'])){
            

            $img_name = $_FILES['gambar']['name'];
            $img_size = $_FILES['gambar']['size'];
            $tmp_name = $_FILES['gambar']['tmp_name'];
            $error = $_FILES['gambar']['error'];
                        
            if($error===0){
                if($img_size>125000){
                    $em = "large";
                    header("Location: pariwisata.php?error=$em");
                    echo"
                                <div class='alert alert-danger'>Data gagal ditambahakan, Ukuran Terlalu Besar <a href='pariwisata.php'>Lihat data</a></div>
                            ";
                }else{
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc=strtolower($img_ex);

                    $allowed_exs=array("jpg", "jpeg", "png");

                    if(in_array($img_ex_lc, $allowed_exs)){
                        $new_img_name=uniqid("IMG-", true).'.'.$img_ex_lc;
                        $img_upload_patch = $new_img_name;
                        move_uploaded_file($tmp_name,$img_upload_patch);

                        $idpariwisata=$_POST['idpariwisata'];
                        $kategori=$_POST['kategori'];
                        $namapariwisata=$_POST['namapariwisata'];
                        $alamat=$_POST['alamat'];
                        $tiketmasuk=$_POST['tiketmasuk'];

                        $sqlGet="SELECT * FROM pariwisata WHERE idpariwisata='$idpariwisata'";
                        $queryGet = mysqli_query($conn, $sqlGet);
                        $cek=mysqli_num_rows($queryGet);

                        $sqlInsert = "INSERT INTO pariwisata(idpariwisata, kategori, namapariwisata, alamat, gambar, tiketmasuk)
                                        VALUES ('$idpariwisata', '$kategori', '$namapariwisata', '$alamat', '$img_upload_patch', '$tiketmasuk')";

                        $queryInsert = mysqli_query($conn, $sqlInsert);

                        if(isset($sqlInsert) && $cek <= 0){
                            echo"
                                <div class='alert alert-success'>Data berhasil ditambahakan <a href='pariwisata.php'>Lihat data</a></div>
                            ";
                            
                        }else if ($cek >= 0){
                            echo"
                                <div class='alert alert-danger'>Data gagal ditambahakan <a href='pariwisata.php'>Lihat data</a></div>
                            ";
                        }
                    }else{
                        $em = "type";
                        header("Location: pariwisata.php?error=$em");
                        echo"
                                <div class='alert alert-danger'>Data gagal ditambahakan, type file bukan gambar <a href='pariwisata.php'>Lihat data</a></div>
                            ";
                    }
                }
            }else{
                $em = "unknown";
                header("Location: pariwisata.php?error=$em");
                echo"
                                <div class='alert alert-danger'>Data gagal ditambahakan, error tidak diketahui <a href='pariwisata.php'>Lihat data</a></div>
                            ";
            }
            
            
        }
        
    ?>

</body>

</html>
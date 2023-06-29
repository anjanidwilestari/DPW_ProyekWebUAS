<?php
    include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Proyek Web UAS</title>
</head>

<body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Kota Wisata Batu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="galeri.php">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="pariwisata.php">Pariwisata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    
    <!-- Start Jumbotron -->
    <section class="jumbotron text-center">
      <img src="image/pemerintahbatu.png" alt="Pemerintah Kota Batu" style="width:100vw"/>
      <h1 class="judul display-4 mt-5" >Pesona Kota Batu</h1>
      <p class="lead">Nikmati suasana Kota Wisata Batu di galeri kami</i> </p>
    </section>
    <!-- End Jumbotron -->

    <!-- Awal Galeri -->
    <div class="container">
        <a href="tambah_galeri.php" class="btn btn-primary mt-3">Tambah Gambar</a>
        <div class="row">
            <?php 
            include('koneksi.php');
            
            $sqlGet="SELECT * FROM galeri";
            $query = mysqli_query($conn, $sqlGet);
            $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
            ?>

            <?php foreach($data as $data) : ?>
            <div class="col-md-4 mt-4">
                <div class="card brder-dark">
                <img src="upload/<?php echo $data['gambar'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold"><?php echo $data['judul'] ?></h5>
                <label class="card-text caption"><strong> </strong> <?php echo $data['caption']; ?></label><br>
                    <a href="edit_galeri.php?idgambar=<?php echo $data['idgambar']  ?>" class="btn btn-warning btn-sm btn-block">EDIT</a>

                    <a href="hapus_galeri.php?idgambar=<?php echo $data['idgambar']  ?>" class="btn btn-danger btn-sm btn-block text-light">HAPUS</a>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Akhir Galeri -->

    <!-- Start Footer -->
    <hr class="footer">
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-6">
            <div class="copyright">
              <strong>Copyright</strong> &copy 2021 | Kota Wisata Batu</p>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-end">
            <div class="icon-contact">
              <label class="font-weight-bold">More Updates:  </label>
              <a href="https://www.facebook.com/DispartaKotaBatu/"><img src="image/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
              <a href="https://www.instagram.com/disparta_batu/"><img src="image/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
              <a href="https://www.youtube.com/channel/UCQXusk338O6h8WLgdaxvftQ"><img src="image/yt.png" class="" data-toggle="tooltip" title="Youtube"></a>
            </div>
          </div>
        </div>
      </div>
    <!-- End Footer -->


</body>

</html>
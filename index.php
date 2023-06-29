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

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Proyek Web UAS</title>
</head>

<body id="home">
    <!-- Start Navbar -->
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
    <!-- End Navbar -->
    
    <!-- Start Jumbotron -->
    <section class="jumbotron text-center">
      <img src="image/pemerintahbatu.png" alt="Pemerintah Kota Batu" style="width:100vw"/>
      <h1 class="judul display-4 mt-5" >The Shining Batu</h1>
      <p class="lead">Sebuah kota di Provinsi Jawa Timur, Indonesia yang sering dijuluki sebagai <i>Swiss Kecil di Pulau Jawa</i> </p>
      <div class="container text-center mt-5 mb-5">
        <iframe width="894" height="520" src="https://www.youtube.com/embed/edptei61aIc" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </section>
    <!-- End Jumbotron -->

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
              <label class="font-weight-bold">More Update:  </label>
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
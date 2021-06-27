<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Himpunan Mahasiswa Teknologi Informasi</title>
  <link rel="icon" href="<?= base_url() ?>assets/vendor/usertemp/images/LOGO HMTI.png">


<!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- bootstrap css -->
<!-- css user -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/user/style.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/user/itc.css" />
<!-- css user -->
</head>
<body>
  <!-- Header  -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
      </button>
      <div class="collapse navbar-collapse text-white " id="navbarTogglerDemo01">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link text-white " href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item " href="<?= base_url() ?>visimisi">Visi misi</a>
                <a class="dropdown-item" href="<?= base_url() ?>so">Struktur Organisasi</a>
                <a class="dropdown-item" href="http://jti.polinema.ac.id/">Tentang Jurusan</a>
                <a class="dropdown-item" href="http://wri.polinema.ac.id/">Workshop Riset Informatika</a>
            </div>
          </li>
          <li class="nav-item active ">
            <a class="nav-link text-white " href="<?= base_url() ?>Article">Berita</a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link text-white " href="<?= base_url() ?>Gallery">Galeri</a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link text-white " href="<?= base_url() ?>Aspirasi">Aspirasi</a>
          </li>
          <li class="nav-item active dropdown ">
            <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Event
            </a>
            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url() ?>Itc">ITC</a>
                <a class="dropdown-item" href="<?= base_url() ?>sportif">Sportif</a>
            </div>
          </li>
          <li class="nav-item active ">
            <a class="nav-link text-white " href="<?= base_url() ?>Contact">Kontak</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Header  -->
  <!-- Content -->
  <?= $content ?>
  <!-- Content -->
  <!-- footer -->
  <footer>
    <div class="mt-5 pt-5 pb-5 footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-xs-12 about-company">
            <h4 class="mt-lg-0 mt-sm-3">Artikel</h4>
            <ul class="m-0 p-0">
              <ul class="list-group list-group-flush">
                <?php foreach ($article_footer as $row) { ?>
                  <a href="<?= base_url().'Article/view/'.$row->id_article ?>" class="list-group-item list-space list-group-item-action">
                    <p><?= $row->title ?></p>
                  </a>                  
                <?php } ?>
              </ul>
            </ul>
          </div>
          <div class="col-lg-3 col-xs-12 about-company">
            <h4 class="mt-lg-0 mt-sm-3 mb-sm-2">Program Studi</h4>
              <ul class="list-group list-group-flush">
                <a href="http://jti.polinema.ac.id/index.php/teknik-informatika/" class="list-group-item list-space list-group-item-action">
                    <p>D4 - Teknik Informatika</p>
                </a>
                <a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/" class="list-group-item list-space list-group-item-action">
                    <p>D3 - Manajemen Informatika</p>
                </a>
              </ul>
          </div>
          <div class="col-lg-4 col-xs-12 location">
            <h4 class="mt-lg-0 mt-sm-4 mb-sm-2">Contact</h4>
            <ul class="list-group list-group-horizontal-md">
              <li class="list-group-item list-space">
                <a href="https://facebook.com/HMTIPolinema">
                  <i class="fab fa-facebook-f medsos-icon"></i>
                </a>
              </li>
              <li class="list-group-item list-space">
                <a href="https://www.instagram.com/hmtipolinema/">
                  <i class="fab fa-instagram medsos-icon"></i>
                </a>
              </li>
              <li class="list-group-item list-space">
                <a href="https://twitter.com/HMTIPolinema">
                  <i class="fab fa-twitter medsos-icon"></i>
                </a>
              </li>
              <li class="list-group-item list-space">
                <a href="https://www.youtube.com/channel/UCCYvUmujUiHUCAGDN3zpdew">
                  <i class="fab fa-youtube medsos-icon"></i>
                </a>
              </li>
            </ul>
            <ul class="list-group">
              <li class="list-group-item list-space">
                <p>hmti.polinema@gmail.com</p>
              </li>
              <li class="list-group-item list-space">
                <p>088-7315-1234</p>
              </li>
              <li class="list-group-item list-space">
                <p>Jl. Soekarno Hatta No. 9 Malang,</p>
                <p>Politeknik Negeri Malang</p>
              </li>
            </ul>
            <h4 class="mt-lg-0 mt-sm-4 mb-sm-2">Support By :</h4>
            <ul class="list-group list-group-horizontal-md">
              <li class="list-group-item list-space support">
                <img src="<?= base_url() ?>assets/vendor/usertemp/images/rek.jpg" style="width: 100px" alt="">
              </li>
              <li class="list-group-item list-space support">
                <img src="<?= base_url() ?>assets/vendor/usertemp/images/joss.jpg" alt="">
              </li>
            </ul>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col copyright">
            <p class=""><small class="text-white-50">© Himpunan Mahasiswa Teknologi Informasi Politeknik Negeri Malang 2019. All Rights Reserved.</small></p>
          </div>
        </div>
      </div>
    </div>  
  </footer>
  <!-- footer -->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5b9b57017d.js" crossorigin="anonymous"></script>
</html>
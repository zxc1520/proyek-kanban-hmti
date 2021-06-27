
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Himpunan Mahasiswa Teknologi Informasi</title>

  <link rel="icon" href="<?= base_url() ?>assets/vendor/usertemp/images/LOGO HMTI.png">

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/theme-elements.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/usertemp/css/skel.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/usertemp/css/style.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/usertemp/css/style-xlarge.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/usertemp/css/default.css" />
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
 
  <!-- Skin CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
</head>
<body id="top">

  <!-- Header -->
  <header id="header">
    <ul class="toplogo">
      <img src="<?= base_url() ?>assets/vendor/usertemp/images/logonavbar.png" alt="">
    </ul>
     <ul class="topnav">
        <li><a href="<?= base_url() ?>">Home</a></li>
        <li class="dropdown">
          <a href="#">Profil</a>
          <div class="dropdown-content">
            <ul>
              <li>
                <a href="<?= base_url() ?>visimisi">Visi Misi</a>
              </li>
              <li>
                <a href="<?= base_url() ?>so">SO</a>
              </li>
              <li>
                <a target="_blank" href="http://jti.polinema.ac.id/">Tentang Jurusan</a>
              </li>
              <li>
                <a target="_blank" href="http://wri.polinema.ac.id/">Workshop</a>
              </li>
            </ul>
          </div>
        </li>
        <li><a href="<?= base_url() ?>Article">Berita</a></li>
        <li><a href="<?= base_url() ?>Gallery">Galeri</a></li>
        <li><a href="<?= base_url() ?>Aspirasi">Aspirasi</a></li>
        <li class="dropdown">
          <a href="#">Event</a>
          <div class="dropdown-content">
            <ul>
              <li>
                <a href="http://hmti.polinema.ac.id/itc-2020/">IT Competition</a>
              </li>
            </ul>
          </div>
        </li>
        <!-- <li><a href="<?= base_url() ?>Contact">Kontak</a></li> -->
        <li><a href="<?= base_url() ?>karir">Karir</a></li>
        <li class="icon">
          <a href="javascript:void(0);" onclick="myFunction()">☰</a>
        </li>
    </ul>
 
 <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
 </script>
  </header>
  
  <!-- content here -->
  <?= $content ?>
  <!-- end of content -->

</div>

<!-- Footer -->
<footer id="footer">
  <div class="container">
    <div class="row double">
      <div class="3u">
            <h3>Artikel</h3>
            <ul class="alt">
                <?php foreach ($article_footer as $row) { ?>
                  <li>
                    <a href="<?= base_url().'Article/view/'.$row->id_article ?>">
                      <p><?= $row->title ?></p>
                    </a>
                  </li>
                  <?php } ?>
            </ul>
      </div>

      <div class="4u">
            <h3>Kunjungi Kami</h3>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.524295806668!2d112.61270291432803!3d-7.9446459813392165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788274626fb9f3%3A0xda13d843fee220cc!2sSekretariatan%20HMTI%20Polinema!5e0!3m2!1sid!2sid!4v1579631643551!5m2!1sid!2sid" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
      </div>

      <div class="5u">
        <div class="row collapse-at-2">

        <div class="12u">
            <h3>Contact : </h3>
          <ul class="icons">
            <li><a target="_blank" href="https://facebook.com/HMTIPolinema" class="icon fa-facebook medsos-panel"><span class="label">Facebook</span></a></li>
            <li><a target="_blank" href="https://www.instagram.com/hmtipolinema/" class="icon fa-instagram medsos-panel"><span class="label">Instagram</span></a></li>
            <li><a target="_blank" href="https://twitter.com/HMTIPolinema" class="icon fa-twitter medsos-panel"><span class="label">Twitter</span></a></li>
            <li><a target="_blank" href="https://www.youtube.com/channel/UCCYvUmujUiHUCAGDN3zpdew" class="icon fa-youtube medsos-panel"><span class="label">Youtube</span></a></li>
          </ul>
              <p><br>
              hmti.polinema@gmail.com<br>
              088-7315-1234<br>
              Jl. Soekarno Hatta No. 9 Malang,
              Politeknik Negeri Malang</p>
          
        </div>
          <div class="12u">
            <h3 style="margin-bottom:0.3em;">Support By :</h3>
        <div class="support">
          <img src="<?= base_url() ?>assets/vendor/usertemp/images/rek.jpg" style="width: 88px" alt="">
          <img src="<?= base_url() ?>assets/vendor/usertemp/images/joss.jpg" alt="">
        </div>
      </div>
          </div>
          
      </div>
      </div>
    <ul class="copyright">
      <li>2020 &copy; HMTI All rights reserved.</li>

    </ul>
    </div>
  </div>
</footer>

<!-- Vendor -->
<script src="https://apis.google.com/js/platform.js"></script>
<script src="<?= base_url() ?>assets/vendor/usertemp/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/usertemp/js/skel.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/usertemp/js/skel-layers.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/usertemp/js/init.js"></script>
<script src="<?= base_url() ?>assets/js/list.pagination.min.js"></script>
<script src="<?= base_url() ?>assets/js/list.min.js"></script>
<script src="<?= base_url() ?>assets/js/default.js"></script>
<script src="<?= base_url() ?>assets/vendor/usertemp/js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1600;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin-ext,cyrillic-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />

</body>
</html>

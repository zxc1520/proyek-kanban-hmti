<!-- bootstrap css -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- bootstrap css -->

<!-- Banner -->
<!-- <section id="banner" style="background-image:url(<?= base_url() ?>assets/vendor/usertemp/images/<?= $Sampul[0]->image ?>);">
  <div class="inner">
  </div>
</section> -->

<section>
  <div class="banner banner-slider" style="background:#ececed;">




    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
      <!-- Loading Screen -->
      <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
      </div>
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
        <div>
          <img src="<?= base_url() ?>assets/vendor/usertemp/images/slider1.jpg" alt="slider" style="">
        </div>
        <div>
          <img src="<?= base_url() ?>assets/vendor/usertemp/images/slider7.jpg" alt="title bph" style="">
        </div>
        <div>
          <img src="<?= base_url() ?>assets/vendor/usertemp/images/slider8.jpg" alt="title bph" style="">
        </div>
        <div>
          <img src="<?= base_url() ?>assets/vendor/usertemp/images/slider2.jpg" alt="title bph" style="">
        </div>
        <div>
          <img src="<?= base_url() ?>assets/vendor/usertemp/images/slider3.jpg" alt="title bph" style="">
        </div>
        <div>
          <img src="<?= base_url() ?>assets/vendor/usertemp/images/slider4.jpg" alt="title bph" style="">
        </div>
        <div>
          <img src="<?= base_url() ?>assets/vendor/usertemp/images/slider6.jpg" alt="title bph" style="">
        </div>
        <!-- <div>
          <img src="<?= base_url() ?>assets/vendor/usertemp/images/slider5.jpg" alt="title bph" style="">
        </div> -->
      </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;"></a>
      <!-- Bullet Navigator -->
      <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:15px;height:15px;">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
          </svg>
        </div>
      </div>
      <!-- Arrow Navigator -->
      <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
          <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
      </div>
      <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
          <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
      </div>
    </div>

  </div>
</section>



<!-- One -->
<section id="one" class="wrapper style1 bg-aspirasi">
  <div class="container">
    <div class="row">
      <div class="7u aspirasi">
        <h3>Salurkan Aspirasimu ?</h3>
      </div>
      <div class="4u">
        <a href="<?= base_url() ?>Aspirasi"><button type="button" class="btn btn-dark"> KIRIM ASPIRASI</button></a>
      </div>
    </div>
  </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
  <header class="major">
    <h2>Artikel Terbaru</h2>
  </header>

  <!-- start article -->
  <div class="row-content">

    <div class="row">
      <div class="12u">
        <?php
        foreach ($article as $row) {
          $time = new DateTime($row->date);
        ?>

          <div class="artikel-stage">
            <div class="recent-posts">
              <article class=" clearfix">
                <h5 class="heading-primary">
                  <a href="<?= base_url() ?>Article/view/<?= $row->id_article ?>"><?= $row->title ?></a>
                </h5>
                <div class="date">
                  <span class="day"><?= $time->format('d') ?></span>
                  <span class="month"><?= $time->format('H:i') ?></span>
                </div>

                <div class="image-container-post">
                  <img src="<?= base_url() . 'assets/upload/article/' . $row->image ?>" alt="Image Article">
                </div>
                <p class="text-preview-home">
                  <?= strip_tags($row->posting) ?>
                </p>
                <div class="pull-right btn-next">
                  <a href="<?= base_url() ?>Article/view/<?= $row->id_article ?>" class="">
                    selengkapnya
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </article>
            </div>
          </div>
        <?php } ?>
      </div>

    </div>
  </div>
  <!-- end article -->
  </div>

</section>

<!-- Three -->
<section id="three" class="wrapper style1">
  <header class="major">
    <h2>Galeri Terbaru</h2>
  </header>
  <div class="row-content">
    <!-- start gallery -->
    <div class="row">
      <?php foreach ($gallery as $row) {
        $time = new DateTime($row->date);
      ?>
        <div class="3u">
          <div class="image-gallery-item">
            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
              <a href="<?= base_url() . 'Gallery/view/' . $row->id_gallery ?>" data-whatever="@fat">
                <span class="thumb-info-wrapper">
                  <div class="image-container">
                    <img src="<?= base_url() . 'assets/upload/gallery/' . $row->image ?>" class="img-responsive" alt="">
                  </div>
                  <span class="thumb-info-title">
                    <span class="thumb-info-inner title"><?= $row->title ?></span>
                    <span class="thumb-info-inner date">
                      <i class="fa fa-calendar"></i>
                      <?= $time->format('d/m/Y'); ?>
                    </span>
                  </span>
              </a>
              <span class="thumb-info-action">
                <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
              </span>
            </span>
            </span>
          </div>

        </div>

      <?php } ?>
    </div>
    <!-- end gallery -->
  </div>
</section>


<!-- Four -->
<section id="four" class="wrapper style1">
  <header class="major">
    <h2>Find Us</h2>
  </header>
  <div class="row-content">
    <!-- start sosmed -->

    <?php
    function get_CURL($url)
    {
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($curl);
      curl_close($curl);

      return json_decode($result, true);
      // var_dump($result);

    }

    $result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCCYvUmujUiHUCAGDN3zpdew&key=AIzaSyAAxIsKD2LvJeKcX6rvowMlftfyyAeL_Ok');

    $youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
    $channelName = $result['items'][0]['snippet']['title'];
    $subscriber = $result['items'][0]['statistics']['subscriberCount'];


    //latest video
    $urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyAAxIsKD2LvJeKcX6rvowMlftfyyAeL_Ok&channelId=UCCYvUmujUiHUCAGDN3zpdew&maxResults=1&order=date&part=snippet';
    $result = get_CURL($urlLatestVideo);
    $latestVideoId = $result['items'][0]['id']['videoId'];

    $videos = [];
    foreach ($result['items']  as $video) {
      $videos[] = $video['id']['videoId'];
    }
    ?>
    <div class="container">


      <div class="row justify-content-center find-us">
        <div class="5u">
          <div class="row">
            <div class="4u">
              <img src="<?= $youtubeProfilePic; ?>" width="100" class="rounded-circleimg-thumbnail">
            </div>
            <div class="8u count-sosmed">
              <h3><?= $channelName; ?></h3>
              <p><?= $subscriber; ?> Subscribers</p>
              <div class="g-ytsubscribe" data-channelid="UCCYvUmujUiHUCAGDN3zpdew" data-layout="default" data-count="default"></div>
            </div>
          </div>
          <div class="mt-3 pb-3">
            <div class="col">
              <?php foreach ($videos as $video) : ?>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId; ?>?rel=0" allowfullscreen style="width:100%;"></iframe>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end sosmed -->
  </div>
</section>
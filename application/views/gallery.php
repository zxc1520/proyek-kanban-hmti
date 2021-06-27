<!-- Page Heading -->
<div class="row-content">

  <div class="row">
    <div class="12u">
      <div class="space-top">

        <?php if(isset($error)) { ?>
          <div class="alert alert-danger alert-link"><?=$error?></div>
          <?php } ?>

          <?php if(isset($message)) { ?>
            <div class="alert alert-success alert-link"><?=$message?></div>
            <?php } ?>

            <div class="row">
              <!-- panel left -->
              <div class="8u" id="gallery">

                <div class="form-group">
                  <input class="search form-control" placeholder="Cari Galeri">
                </div>

                <div class="list row">
                  <?php foreach ($gallery as $row) {
                    $time = new DateTime($row->date);
                    ?>
                    <div class="4u">
                      <div class="image-gallery-item">
                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                          <a href="<?= base_url().'Gallery/view/'.$row->id_gallery ?>"  data-whatever="@fat">
                            <span class="thumb-info-wrapper">
                              <div class="image-container">
                                <img src="<?= base_url().'assets/upload/gallery/'.$row->image ?>" class="img-responsive" alt="">
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

                  <ul class="pagination">

                  </ul>
                </div>
                <!-- panel right -->
                <div class="4u">
                  <div class="list-group">
                    <h5 class="list-group-item header">Urutkan Berdasarkan</h5>
                    <a href="#" class="list-group-item sort-gallery active" data-target="date">tanggal</a>
                    <a href="#" class="list-group-item sort-gallery" data-target="title">judul</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

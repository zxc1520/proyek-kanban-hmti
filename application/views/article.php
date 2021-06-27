<div class="row-content">

  <div class="space-top">
    <div class="row">
      <div class="8u" id="article">

        <div class="form-group">
          <input class="search form-control" placeholder="Cari Artikel" />
        </div>


        <div class="list">
          <?php foreach ($article as $row) {
            $time = new DateTime($row->date);
            ?>
            <div class="row article-row">
              <div class="12u">
                <div class="row">
                  <div class="4u 4u 12u">
                    <div class="image-container">
                      <img src="<?= base_url() ?>assets/upload/article/<?= $row->image ?>" alt="Gambar Artikel">
                    </div>
                  </div>

                  <div class="8u 8u 12u">
                    <h4 class="title"><?= $row->title ?></h4>
                    <div class="detail">

                      <time class="date">
                        <span>
                          <i class="fa fa-calendar"></i>
                          <?= $time->format('d/m/Y') ?>
                        </span>

                        <span>
                          <i class="fa fa-clock-o"></i>
                          <?= $time->format('H:i') ?>
                        </span>
                      </time>

                      <span>
                        <i class="fa fa-tag"></i>
                        <span class="category"><?= $row->category ?></span>
                      </span>
                    </div>
                    <p class="text-preview">
                      <?= strip_tags($row->posting) ?>
                    </p>

                    <a href="<?= base_url() ?>Article/view/<?= $row->id_article ?>" style="text-decoration: none" class="btn btn-primary">Selengkapnya</a>
                  </div>
                </div>
                <hr>
              </div>
            </div>
            <?php } ?>
          </div>
          <ul class="pagination"></ul>
        </div>

        <div class="4u">
          <div class="list-group">
            <h5 class="list-group-item header">Pilih Kategori</h5>
            <a href="#" class="list-group-item filter-article-category active" data-target="all category">semua kategori</a>
            <?php foreach ($category as $row) { ?>
              <a href="#"  class="list-group-item filter-article-category" data-target="<?= $row->category ?>"><?= $row->category ?></a>
              <?php } ?>
            </div>

            <div class="list-group">
              <h5 class="list-group-item header">Urutkan Berdasarkan</h5></h5>
              <a href="#" class="list-group-item sort-article active" data-target="date">tanggal</a>
              <a href="#" class="list-group-item sort-article" data-target="title">judul</a>
              <a href="#" class="list-group-item sort-article" data-target="category">kategori</a>
            </div>

          </div>
        </div>
      </div>

    </div>

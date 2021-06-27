<?php $time = new DateTime($gallery[0]->date); ?>
<div class="row-content">

  <div class="space-top">
    <div class="row">
      <div class="12u article-view">

        <h1><?= $gallery[0]->title ?></h1>
        <img src="<?= base_url() ?>assets/upload/gallery/<?= $gallery[0]->image ?>" class="pull-left">
        <p>
          <?= $gallery[0]->description ?>
        </p>

        <ol class="breadcrumb">
          <span>
            <i class="fa fa-calendar"></i>
            <?= $time->format('d/m/Y') ?>
          </span>

          <span>
            <i class="fa fa-clock-o"></i>
            <?= $time->format('H:i') ?>
          </span>

        </ol>
      </div>


    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">

    <?php if(isset($error)) { ?>
			<div class="alert alert-danger alert-link"><?=$error?></div>
		<?php } ?>

    <form action="<?= base_url() ?>admin/Sampul/editSampul/<?= $Sampul[0]->id_sampul ?>" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-5">
          <img src="<?=base_url()?>assets/vendor/usertemp/images/<?= $Sampul[0]->image ?>">
        </div>


        <div class="col-lg-5">
          <div class="form-group">
            <label for="title">Ketik apapun</label>
            <input type="text" id="title" class="form-control" value="" placeholder="Title" name="title">
          </div>
          <div class="form-group">
            <label for="image">Change Image</label>
            <div class="input-group">
              <input type="file" class="form-control" placeholder="" name="image" id="image">
              <span class="input-group-btn">
                <button type="button" class="btn btn-danger" id="clearImage">Clear</button>
              </span>
            </div>
            <p class="help-block">leave blank to keep image</p>

          </div>


          <input type="submit" class="btn btn-primary" value="Save">
          <a href="<?= base_url() ?>admin/Gallery" class="btn btn-danger">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>

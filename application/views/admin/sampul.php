<!-- Page Heading -->
<div class="row">
  <div class="col-lg-12">

    <?php if(isset($error)) { ?>
      <div class="alert alert-danger alert-link"><?=$error?></div>
      <?php } ?>

      <?php if(isset($message)) { ?>
        <div class="alert alert-success alert-link"><?=$message?></div>
        <?php } ?>

        <div class="row">
          <!-- panel left -->
          <div class="col-lg-12" id="gallery">

            <div class="list row">
              <?php foreach ($Sampul as $row) {
                ?>
                <div class="col-md-12">
                  <div class="image-container">
                    <img src="<?= base_url() ?>assets/vendor/usertemp/images/<?=$row->image;?>" alt="">
                  </div>
                  <div class="panel-footer">
                    
                    <div class="btn-group" role="group" aria-label="...">
                    <center>
                      <a class="btn btn-primary" href="<?=base_url()?>admin/Sampul/editSampul/<?=$row->id_sampul?>"><i class="fa fa-edit"></i> &nbspEdit</a>
                      </center>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

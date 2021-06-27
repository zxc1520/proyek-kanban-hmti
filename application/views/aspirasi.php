<div class="row-content">
  <div class="space-top">

<div class="aspirasi">

    <p>
      Untuk memberikan masukan, saran, maupun kritikan, anda dapat menuliskan pada kotak form di bawah ini.
      Wajib menuliskan identitas anda seperti Nama, E-mail, dan pesan yang ingin di sampaikan.<br>
      Apabila ada pertanyaan seputar <b>Himpunan Teknologi Informasi</b>
      dapat menghubungi langsung <a href="<?= base_url() ?>Contact"> kontak yang tersedia di halaman.</a>
    </p>
    <hr>

    <?php if(isset($message)) { ?>
      <div class="alert alert-success"><?= $message ?></div>
      <?php } ?>

      <?php if(isset($error)) { ?>
        <div class="alert alert-danger"><?= $error ?></div>
        <?php } ?>

        <form class="" action="<?= base_url() ?>Aspirasi/sendMessage" method="post">
          <div class="form-group">
            <div class="form-inline">
              <div class="form-group">
                <label for="Nama">Nama <b class="red">*</b></label>
                <input type="text" name="name" class="form-control" id="" placeholder="Nama Lengkap">
              </div>
              <div class="form-group">
                <label for="E-mail">E-Mail <b class="red">*</b></label>
                <input type="email" name="email" class="form-control" id="" placeholder="example@gmail.com">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="Pesan">Pesan <b class="red">*</b></label>
            <textarea name="message" class="form-control" rows="4" cols="80" placeholder="Pesan yang ingin di sampaikan"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">KIRIM</button>
        </form>
      </div>

      </div>
    </div>

  <?php
    $this->load->view('user/header');
    $counter = 1;
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="alert alert-info" role="alert">Info! <br><br> Mohon masukan data dengan benar</div>
    </section>

    <section class="content">
    <?php foreach ($judul as $title){ ?>
      <h1>
        <?php echo $title['judul_quisioner']; ?>
        <small></small>
      </h1>
    <?php } ?>
      <form class="" action="<?php echo base_url('submit'); ?>" method="post">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
              <th>No</th>
              <th class="col-md-6">Pertanyaan</th>
              <th class="col-md-1">Sangat Setuju</th>
              <th class="col-md-1">Setuju</th>
              <th class="col-md-1">Biasa</th>
              <th class="col-md-1">Tidak Setuju</th>
              <th class="col-md-1">Sangat Tidak Setuju</th>
            </tr>
            </thead>
            <tbody>
              <?php

                foreach ($datas as $data) {
              ?>
              <tr>
                <input type="hidden" name="id_soal" value="<?php echo $data['id_sq']; ?>">
                <td><?php echo $counter; ?></td>
                <td><?php echo $data['soal_quisioner']; ?></td>
                <td><input type="radio" name="pilihan[<?php echo $data['id_sq']; ?>]" value="ss"> </td>
                <td><input type="radio" name="pilihan[<?php echo $data['id_sq']; ?>]" value="s"> </td>
                <td><input type="radio" name="pilihan[<?php echo $data['id_sq']; ?>]" value="b"> </td>
                <td><input type="radio" name="pilihan[<?php echo $data['id_sq']; ?>]" value="ts"> </td>
                <td><input type="radio" name="pilihan[<?php echo $data['id_sq']; ?>]" value="sts"> </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <button type="submit" class="btn btn-primary" style="float:right">Submit</button>
      </form>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <?php
    $this->load->view('user/footer');
  ?>

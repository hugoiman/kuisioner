  <?php
    $this->load->view('user/header');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="alert alert-info" role="alert">Info! Mohon masukan data dengan benar</div>
    </section>

    <section class="content">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
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

              foreach ($datas as $datax) {
            ?>
            <tr>
              <td></td>
              <td><?php $datax['soal_quisioner']; ?></td>
              <td><input type="radio" name="x" value=""> </td>
              <td><input type="radio" name="x" value=""> </td>
              <td><input type="radio" name="x" value=""> </td>
              <td><input type="radio" name="x" value=""> </td>
              <td><input type="radio" name="x" value=""> </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <button type="button" class="btn btn-primary" style="float:right">Primary</button>
    </section>
  </div>
  <!-- /.content-wrapper -->



  <?php
    $this->load->view('user/footer');
  ?>

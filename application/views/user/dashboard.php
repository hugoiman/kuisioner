  <?php
    $this->load->view('user/header');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <div class="box">
        <div class="box-body">
          <?php foreach ($judul as $judul): ?>
            <a type="button" class="btn btn-default btn-block" href="<?php echo base_url('judul/'); echo $judul['id_quisioner']; ?>"><?php echo $judul['judul_quisioner']; ?></a>
          <?php endforeach; ?>

        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <?php
    $this->load->view('user/footer');
  ?>

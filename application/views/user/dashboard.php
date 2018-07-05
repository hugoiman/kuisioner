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
          <a type="button" class="btn btn-default btn-block" href="<?php echo base_url('admin_c/show/1'); ?>">Judul 1</a>
          <a type="button" class="btn btn-default btn-block" href="<?php echo base_url('admin_c/show/question2'); ?>">Judul 1</a>
          <a type="button" class="btn btn-default btn-block" href="<?php echo base_url('admin_c/show/question3'); ?>">Judul 1</a>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <?php
    $this->load->view('user/footer');
  ?>

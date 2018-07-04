  <?php
    $this->load->view('user/header');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        sdsdfghjjawrtguhj
        <!-- <small>Control panel</small> -->
      </h1>
    </section>

    <section class="content">
    <!-- Step form -->
    <div class="progress">
      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <form id="regiration_form" novalidate action="action.php"  method="post">
    <fieldset>
      <h2>Judul</h2>
      <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password">
      </div>
      <input type="button" name="password" class="next btn btn-info" value="Next" />
    </fieldset>
    <fieldset>
      <h2> Step 2: Add Personnel Details</h2>
      <div class="form-group">
      <label for="fName">First Name</label>
      <input type="text" class="form-control" name="fName" id="fName" placeholder="First Name">
      </div>
      <div class="form-group">
      <label for="lName">Last Name</label>
      <input type="text" class="form-control" name="lName" id="lName" placeholder="Last Name">
      </div>
      <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
      <input type="button" name="next" class="next btn btn-info" value="Next" />
    </fieldset>
    <fieldset>
      <h2>Step 3: Contact Information</h2>
      <div class="form-group">
      <label for="mob">Mobile Number</label>
      <input type="text" class="form-control" id="mob" placeholder="Mobile Number">
      </div>
      <div class="form-group">
      <label for="address">Address</label>
      <textarea  class="form-control" name="address" placeholder="Communication Address"></textarea>
      </div>
      <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
      <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
    </fieldset>
    </form>
  </div>
</section>
  <!-- /.content-wrapper -->



  <?php
    $this->load->view('user/footer');
  ?>

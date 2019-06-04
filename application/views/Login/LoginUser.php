<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Crowdsourcing</b>.com</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <center>
        <form action="<?php echo base_url('c_login/validate'); ?>" method="post">
        <hr>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" placeholder="username" name="username" required>
          </div>
          <div class="input-group" style="margin-top:10px;">
            <span class="input-group-addon"><i class="fa fa-key"></i></span>
            <input class="form-control" type="password" placeholder="password" name="password" required>
          </div>

          
          <br>
          <div class="has-text-centered">
            <!-- <a class="button is-primary is-outlined">Login</a> -->
            <button type="submit" class="btn btn-block btn-primary utton is-primary is-outlined">Login</button>
          </div>
          <hr>
        </form>
        <a href="#">I forgot my password</a><br>
        <a href="<?php echo base_url('c_user/registrasi_user'); ?>" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
  </div>
  </center>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <!-- <script src="../bower_components/jquery/dist/jquery.min.js"></script> -->
  <script src="<?php echo base_url('assets/Admin/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <!--
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
  <script src="<?php echo base_url('assets/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/Admin/bower_components/bootstrap/js/collapse.js'); ?>"></script>
  <script src="<?php echo base_url('assets/Admin/bower_components/bootstrap/js/transition.js'); ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url('assets/Admin/plugins/iCheck/icheck.min.js'); ?>"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>

</html>
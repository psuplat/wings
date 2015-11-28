<div class="container-fluid">
<div class="row">
<div class="col-xs-1 col-md-4"></div>
<div class="col-xs-10 col-md-4">
  <div class="login-form">
    <div style="background: #fff; width:100%; text-align:center; padding:10px">
  <img src="<?= base_url(); ?>assets/wings/images/logo.png" alt="Wockhardt logo" />
</div>
<div style="padding:50px">
  <h4 class="text-center">WINGS was unable to establish your indentity</h4>
  <h4 class="text-center">You will need to log in</h4><br/><br/>
  <form method="POST" action="<?= base_url(); ?>index.php/login">
    <div class="form-group">
    <label class="sr-only" for="input_login">login</label>
    <div class="input-group">
      <div class="input-group-addon"><i class="fa fa-user"></i></div>
      <input type="text" class="form-control" name="input_login" id="input_login" placeholder="your wockhardt login" autocomplete="off" required>
    </div>
  </div>
  <div class="form-group">
  <label class="sr-only" for="input_login">password</label>
  <div class="input-group">
    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
    <input type="password" class="form-control" name="input_password" id="input_password" placeholder="your password" required>
  </div>
</div>
<br/>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
  </form>
  <br/><br/>
  <div id="login_feedback"></div>
</div>
</div>
</div>
<div class="col-xs-1 col-md-4"></div>
</div>
</div>

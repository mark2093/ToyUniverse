<!--login modal-->
<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h1 class="text-center" style="font-family: Impact;">Login</h1>
</div>
<div class="modal-body">
  <form role="form" action="header.php" method="post" >
    <form class="form col-md-12 center-block">
      <div class="form-group">
        <input type="text" class="form-control input-lg" placeholder="Email" name="email">
      </div>
      <div class="form-group">
        <input type="password" class="form-control input-lg" placeholder="Password" name="pass">
      </div>
      <div class="form-group">
        <button class="btn btn-primary btn-lg btn-block" name="login">Sign In</button>
        <span class="pull-right"><a href="#modal-register" data-toggle="modal" data-target="#modal-register" data-dismiss="modal">Register</a></span><span><a href="#">Need help?</a></span>
      </div>
    </form>
</div>
<div class="modal-footer">
    <div class="col-md-1accordion2">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
  </div>
</div>
</div>
</div>
</div>

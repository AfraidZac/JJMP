
<form class="form-horizontal" action="../../../resources/library/formsgateways/semigateway.php" name='authlogin' method="POST">


<div class="row-fluid">
    <div class="span12 col-sm-3">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-6" for="email">Email or Username</label>
    <div class="col-sm-10 ">
        <input required type="text" name="email_user" class="form-control"  id="email_user" placeholder="Enter email or username" onblur="" ;>
    </div>
</div>
<div class="row-fluid">
    <div class="span12 col-sm-3">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1 " for="pass">Password</label>
    <div class="col-sm-10">
        <input required type="password" oncopy="return false" oncut="return false" onpaste="return false"  class="form-control pwd" name="pass" value="" id="pass" placeholder="Enter password"  onkeyup="javascript:checkpass(),confirmvalidpassword()"/>
    </div>
</div>
<div class="row-fluid">
    <div class="span12 col-sm-3">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-4 ">
        <button class="btn btn-primary btn-block" value="<?php echo $link; ?>"  type="submit" name="login">Login</button>
    </div>
</div>
</form>
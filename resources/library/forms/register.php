<base href="<?php echo $baseUrl ?>">
<form class="form-horizontal" action=" resources/library/formsgateways/semigateway.php" name="Register" method="POST" onsubmit="return authenticate();">
    <script src="public_html/JS/validateajax.js" ></script>




    <div class="form-group">
        <label class="control-label col-sm-6" id="namelabel" for="name">* Nickname: <label id="validatenick"></label></label>
        <div class="col-sm-12 ">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user" aria-hidden="true"></i></span>
                </div>
                <input required type="text" maxlength="16" name="name" class="form-control"  id="name" placeholder="Enter Nickname" onblur="" onkeyup="validatenick();">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-6" id="emaillabel" for="email">* Email: <label id="validateemail"></label></label>

        <div class="col-sm-12">
            <div class="input-group mb-3">
                <div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-envelope" aria-hidden="true"></i></span></div>
                <input required type="email"id="email" for="email" name="email" class="form-control" placeholder="Enter Email" onblur="" onkeyup="validateemail();">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-6" id="passlabel" for="pass">* Password:</label>
        <div class="col-sm-12 ">
            <div class="input-group mb-3">
                <div class="input-group-prepend">  <span class="input-group-text"><i class="fas fa-key" aria-hidden="true"></i></span></div>
                  <input required type="password" oncopy="return false" oncut="return false" onpaste="return false" class="form-control pwd" name="pass" value="" id="pass" placeholder="Enter password" onkeyup="checkpass(),repeatpass();"/>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger-striped" id="password-progress-bar" role="progressbar"
                     aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
                    <span id="showmsg"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-6" id="passlabel" for="passlabel">* Repetir Password:<label id="passvalid"></label></label>
        <div class="col-sm-12">
            <div class="input-group mb-3">
                <div class="input-group-prepend">  <span class="input-group-text"><i class="fas fa-key" aria-hidden="true"></i></span></div>
                <input required type="password" id="confirmpass" name="confirmpass" class="form-control" placeholder="Repetir Password" onblur="" onkeyup="repeatpass();">
            </div>
        </div>
    </div>



    <center>
        <div class="form-group">
            <div class="col-sm-10">
                <button  type="submit" class="btn btn-dark btn-block" id="reg" name="reg" value="<?php echo $link; ?>" >Registar</button>
                <span style="margin-top: 10px;font-size: 8px"  class="badge badge-pill badge-dark"> * Todos os campos são de preenchimento obrigatório. </span>
            </div>
        </div>
    </center>
</form>



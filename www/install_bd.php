<html>
<head>
    <meta charset="UTF-8">
    <title>Admin - Instal BD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>
<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            <center><H1>Install BD</H1></center>
            <hr>

<div class="login">

    <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">

        <?php
        $user;
        $pass;
        $info = '';
        if (isset($_POST['login'])) {
            $user = $_POST['user'];
            $pass = $_POST['password'];

            if($user == "admin" && $pass == "admin2018"){
            $info = '2342342342';
            }
            else{
                echo '<div class="alert alert-danger" role="alert">Erro no login</div>';
                $info = '';
            }

        }
        ?>

        <input id="user" type="text"  style="margin-top: 10px" class="form-control" name="user" value="" placeholder="" required>
        <input id="password" type="password"  style="margin-top: 10px" class="form-control" name="password" placeholder=""required  >
        <button type="submit" style="margin-top: 10px" id="login" name="login" class="btn btn-primary btn-block btn-large"><i class="glyphicon glyphicon-log-in"></i> Log in</button>
    </form>
</div>
        </div>
        <div class="col">
        </div>
    </div>

</div>
<?php
echo $info;
?>
</body>

</html>

<?php
$x = "75";
?>
<div style="margin-top: 50px; height:<?php echo $x;?> px">
    <center>
        <form class="form-horizontal" name="publish" method="POST">
            <?php

            if (isset($_POST['pubq'])) {
                $perguntavai = "INSERT INTO `forum` (`idpergunta`, `nickname`, `pergunta`) VALUES (NULL , '" . $_SESSION['email_user'] . "' , '" . $_POST['txtpergunta'] . "');";
                $perguntago = mysqli_query($jjmpconn, $perguntavai);
                unset($_POST['pubq'], $_POST['publish']);
                header("refresh:0");

            }
            ?>
            <div style="width: 70%; background-color: #d3d0d8; height: 100%">
                <left>
                    <input name="txtpergunta"
                           style="float: left; margin-left: 50px; margin-right: 50px ; margin-bottom:20px; margin-top: 20px"
                           class="col-sm-8 form-control">
                    <button class="col-sm-2 btn btn-primary" name="pubq" style="float: left; margin-top: 20px; margin-left: 5px;">
                        Publicar
                    </button>
                </left>


                <div style="float: left; background-color: gainsboro; " class="container" >
                    <div id='accordion' role='tablist' style='margin-left: 50px; margin-right: 50px;'>


                        <?php
                        $query = "Select * from forum ORDER BY idpergunta DESC";
                        $querygot = mysqli_query($jjmpconn, $query);

                        if ($querygot->num_rows > 0) {
                            while ($row = $querygot->fetch_assoc()) {
                                $btnid = $row["idpergunta"];
                                echo "
                             <div class='card' >
                             <div   class='card-header' role='tab' id='heading" . $row['idpergunta'] . "'>
                                 <h5 class='mb-0'>
                                     <a style='color: darkgrey;' data-toggle='collapse' href='#collapse" . $row['idpergunta'] . "' aria-expanded='true' aria-controls='collapse" . $row['idpergunta'] . "'>
                                       " . $row['nickname'] . " : " . $row['pergunta'] . "
                                     </a>
                                 </h5>
                             </div>";
                                $x = $x +120;
                                $querya = "Select * from respostas Where idpergunta = $btnid";
                                $queryagot = mysqli_query($jjmpconn, $querya);
                                if ($queryagot->num_rows > 0) {

                                    echo "<div id='collapse" . $row['idpergunta'] . "' class='collapse' role='tabpanel' aria-labelledby='heading" . $row['idpergunta'] . "' data-parent='#accordion'>";
                                    while ($row = $queryagot->fetch_assoc()) {

                                        echo "
                          
                                 <div class='card-body' style='text-align: right; color: darkgrey;'>
                                    " . $row['resposta'] . " : " . $row['nickname'] . "
                                 </div>       
                                               
                                 
                          ";$x = $x +40;
                                    }

                                    echo "</div><br>";
                                }

                                echo "
                                 <button class='btn btn-primary'name='" . $btnid . "' =\"float: left; margin-top: 20px; margin-left: 5px;\">Responder</button>
                        
                             ";
                                if (isset($_POST[$btnid])) {
                                    $perguntaresp = "INSERT INTO `respostas` (`idpergunta`, `nickname`, `resposta`) VALUES (NULL , '" . $_SESSION['email_user'] . "' , '" . $_POST['txtpergunta'] . "');";
                                    $perguntarespgo = mysqli_query($jjmpconn, $perguntaresp);
                                    header("refresh:0");
                                }
                            }

                            echo "</div>";
                        } else {


                        }


                        ?>
                    </div>


                </div>

            </div>

</form>
</center>

</div>
<?php
echo"
<div style='margin-top:".$x."px'></div>
";
?>
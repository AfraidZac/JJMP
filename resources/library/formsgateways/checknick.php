<?php

require_once("../../config.php");

$name = $_POST['name'];

$checknick = "SELECT email FROM info WHERE nickname = '$name'";

$nickresult = mysqli_query($jjmpconn, $checknick);

If ($name == "") {
    echo('');
}else if ($nickresult->num_rows > 0) {
    while ($row = $nickresult->fetch_assoc()) {
        echo('<span style="color:#ff0000;"><i class="fa fa-times" aria-hidden="true"></i> Nickname em uso!</span>');
    }
} else {
    echo('<span style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> Nickname Valido!</span>');
}
?>
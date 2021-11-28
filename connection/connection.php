<?php
$connection= mysqli_connect("localhost","root","","laboratorio_pweb");

//check connection
if (mysqli_connect_errno()) {
    echo ("Failed to connect to MYSQL: " .mysqli_connect_errno());
} else{
    //echo ("Success!");
}


?>
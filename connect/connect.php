<?php 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "qlhb";

    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if($con){
        mysqli_query($con, "SET NAMES 'utf8'");
    }else{
        echo "Kết nối thất bại!".mysqli_connect_error();
    }
?>
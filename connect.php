<?php
$sever = "localhost";
$username = "root";
$password = "";
$database = "qlhb_2";
$conn = new mysqli($sever,$username,$password,$database);
if($conn ->  connect_error){
    die("connection failed: ".$conn->connect_error);
}
?>
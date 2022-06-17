<?php
$sever = "localhost";
$username = "root";
$password = "";
$database = "qlhb";
$conn = new mysqli($sever,$username,$password,$database);
if($conn ->  connect_error){
    die("connection failed: ".$conn->connect_error);
}
?>
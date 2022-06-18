<?php
    $sever = "localhost";
    $username = "root";
    $password = "";
    $database = "qlhb_2";
    $conn = new mysqli($sever,$username,$password,$database);
    if($conn ->  connect_error){
        die("connection failed: ".$conn->connect_error);
    }
    function page_redirect($location)
    {
      echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
      exit; 
    }

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];
        $sql = "delete from `dsdudieukien` where maDS = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            page_redirect("http://localhost/QLHB/index.php?router=DuyetHB");
        }else{
            die(mysqli_error($conn));
        }
    }
   
?>
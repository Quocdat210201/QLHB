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

    if(isset($_GET['updatehb'])){
        $idhb = $_GET['updatehb'];
        $sql_updatehb = "update `dsdudieukien` set trangthaiduyet = 1, ngayduyet = curdate()  where maSV = '$idhb' ";
        $result = mysqli_query($conn,$sql_updatehb);
        if($result){
            page_redirect("http://localhost/QLHB/index.php?router=DuyetHB");
        }else{
            die(mysqli_error($conn));
        }
    }else if(isset($_GET['updatehb2'])){
        $idhb = $_GET['updatehb2'];
        $sql_updatehb = "update `dsdudieukien` set trangthaiduyet = 0 , ngayduyet = NULL where maSV = '$idhb' ";
        $result = mysqli_query($conn,$sql_updatehb);
        if($result){
            page_redirect("http://localhost/QLHB/dsDaDuyetHB.php");
        }else{
            die(mysqli_error($conn));
        }
    }
   
?>
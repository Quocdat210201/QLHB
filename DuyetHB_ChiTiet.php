<?php 
    include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        td {
            border: 1px solid black;
            background-color: white;
        }

        .navigation {
            width: 300px;
        }

        .mainmenu,
        .submenu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .mainmenu a {
            display: block;
            background-color: lightblue;
            text-decoration: none;
            padding: 10px;
            color: #000;
        }

        .mainmenu a:hover {
            background-color: red;
        }

        .mainmenu li:hover .submenu {
            display: block;
            max-height: 200px;
        }
    </style>
</head>

<body>
    <?php include "system/header.php" ?>
    <div class="wrappercl">
        <div class="col-12 col-lg-9" style="margin-left:16% ; margin-right: auto;">
            <table class="table table-striped" style="width:60%">
                <thead>
                    <tr style=" background-color: #053FC9;color: whitesmoke; text-align: center; ">
                        <th scope="col">STT</th>
                        <th scope="col">Mã sinh viên</th>
                        <th scope="col">Tên sinh viên</th>
                        <th scope="col">Điểm rèn luyện</th>
                        <th scope="col">Điểm TB Học kì</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    if (isset($_GET['updateid']) || isset($_GET['xemHK'])) {
                        $id ="1";
                        if (isset($_GET['updateid'])){
                            $id = $_GET['updateid'];
                        }else{
                            $id = $_GET['xemHK'];
                        }
                        
                        
                        $sql_get = "SELECT maDS,ds.maSV,sv.tenSV,`1.1`+`1.2`+`1.3`+`1.4`+`1.5`+`1.6`+`1.7`+`1.8`+`2.1`+`2.2`+`2.3`+`2.4`+`3.1`+`3.2`+`3.3`+`3.4`+`4.1`+`4.2`+`4.3`+`4.4`+`4.5`+`5.1`+`5.2`+`5.3`+`5.4` as diemRL  FROM `dsdudieukien` ds, `sinhvien` sv,`diemrenluyen` drl WHERE ds.maSV = sv.maSV  and sv.maSV = drl.maSV and ds.maSV=$id";
                        $result = mysqli_query($conn, $sql_get);
                        
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $maSV = $row['maSV'];
                                $tenSV = $row['tenSV'];
                                $drl = $row['diemRL'];
                                echo '<tr>
                                    <td style="text-align: center ;" scope="row">' . 1 . '</td>
                                    <td style="text-align: center ;">' . $maSV . '</td>
                                    <td style="font-weight: bold    ;">' . $tenSV . '</td>
                                    <td style="text-align: center ;">' . $drl . '</td>
                                    <td style="text-align: center ;">3.9</td>
                                </tr>';
                            }
                        } else {
                            die(mysqli_error($conn));
                            
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
                </br></br>
    </div>
  <?php
    if(isset($_GET['updateid'])){
        include "DuyetHB_DRL.php";
    }elseif(isset($_GET['xemHK'])){
        include "DuyetHB_HK.php";
    }
  ?>
</body>

</html>
<?php
$sever = "localhost";
$username = "root";
$password = "";
$database = "qlhb";
$conn = new mysqli($sever, $username, $password, $database);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
function page_redirect($location)
{
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=' . $location . '">';
    exit;
}
if (isset($_POST['duyetALL'])) {
    $sqlupdate_all = "UPDATE `dsdudieukien` SET trangthaiduyet = 1, ngayduyet = curdate()  WHERE trangthaiduyet = 0";
    $result_update = mysqli_query($conn, $sqlupdate_all);
    if ($result_update) {
        header("Refresh:0");
    } else {
        echo "Chua update dc";
    }
}
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        td {
            border: 1px solid black;
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="wrappercl">
        <label style="font-weight: bold;margin-left: 150px; margin-bottom: 20px;">Danh s??ch x??t duy???t h???c b???ng Khoa C??ng ngh??? s??? : </label>
        <div class="combox" style="margin-left: 150px;">
            <label for="" style="font-weight: bold ;">Lo???i h???c b???ng: </label>
            <select name="loaiHB" id="loaiHB">
                <optgroup label="Lo???i H???c B???ng: ">
                    <option value="hb0">
                        T???t c???
                    </option>
                    <option value="hb1">
                        Khuy???n kh??ch h???c t???p
                    </option>
                    <option value="hb2">H???c b???ng ch???p c??nh ?????c m??</option>
                    <option value="hb3">H???c b???ng th??? th??ch UTE</option>
                    <option value="hb4">H???ng b???ng v?????t kh??</option>
                </optgroup>
            </select>

            <label for="" style="font-weight: bold ; padding-left: 30px; margin-right: -30px;">Ng??nh: </label>
            <select name="nganh" id="nganh">
                <optgroup label="Ng??nh">
                    <option value="test">
                        T???t c???
                    </option>
                    <option value="test1">
                        C??ng ngh??? th??ng tin
                    </option>
                    <option value="test2">??i???n t??? vi???n th??ng</option>
                    <option value="test3">M???ng</option>
                </optgroup>
            </select>
            <form class="form-inline" action="" style="display: inline; margin-left: 280px;" method="POST">
                <input class="form-control mr-sm-2" type="text" placeholder="T??m ki???m sinh vi??n..." name="valueToSearch">
                <input class="btn btn-success" type="submit" name="search" value="T??m ki???m"></input>
            </form>
        </div>
    </div>

    <div class="container" style="margin-left:10%; margin-right: auto;">
        <form action="dsDaDuyetHB.php" method="POST">
            <input type="submit" class="btn btn-info" style=" width: 19%; margin-bottom: 20px;" value="Xem danh s??ch ???? duy???t">
        </form>
        <div class="row">
            <div class="col-12 col-lg-10">
                <form action="" method="POST">
                    <table class="table table-striped" style="width:170%">
                        <thead>
                            <tr style=" background-color: #053FC9;color: whitesmoke; text-align: center; ">
                                <th scope="col">STT</th>
                                <th scope="col">M?? sinh vi??n</th>
                                <th scope="col">T??n sinh vi??n</th>
                                <th scope="col">Lo???i h???c b???ng</th>
                                <th scope="col">X???p lo???i HB</th>
                                <th scope="col">Tr???ng th??i duy???t</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            if (isset($_POST['search'])) {
                                $valueToSearch = $_POST['valueToSearch'];
                                $query =  "SELECT maDS,ds.maSV,sv.tenSV,hb.tenHB,xl.tenXL, ds.trangthaiduyet FROM `dsdudieukien` ds, `sinhvien` sv,`loaihocbong` hb,`xeploai` xl WHERE ds.maSV = sv.maSV and ds.maHB = hb.maHB and ds.maXL = xl.maXL and trangthaiduyet = 0 and tenSV like '%" . $valueToSearch . "%'";
                                $search_result = filterTable($query);
                            } else {
                                $query =  "SELECT maDS,ds.maSV,sv.tenSV,hb.tenHB,xl.tenXL, ds.trangthaiduyet FROM `dsdudieukien` ds, `sinhvien` sv,`loaihocbong` hb,`xeploai` xl WHERE ds.maSV = sv.maSV and ds.maHB = hb.maHB and ds.maXL = xl.maXL and trangthaiduyet = 0";
                                $search_result = filterTable($query);
                            }

                            function filterTable($query)
                            {
                                $connnect = mysqli_connect("localhost", "root", "", "qlhb");
                                $filter_Result = mysqli_query($connnect, $query);
                                return $filter_Result;
                            }

                            $stt = 0;
                                while ($row = mysqli_fetch_assoc($search_result)) {
                                    $stt++;
                                    $maHB = $row['maDS'];
                                    $maSV = $row['maSV'];
                                    $tenSV = $row['tenSV'];
                                    $hb = $row['tenHB'];
                                    $xl = $row['tenXL'];


                                    echo '<tr>
                                <td style="text-align: center ;" scope="row">' . $stt . '</td>
                                <td style="text-align: center ;">' . $maSV . '</td>
                                <td style="font-weight: bold    ;">' . $tenSV . '</td>
                                <td style="font-weight: bold    ;">' . $hb . '</td>
                                <td style="font-weight: bold    ;">' . $xl . '</td>
                                <td style="font-weight: bold    ; color: red;">Ch??a duy???t</td>
                                <td style="color: red; text-align: center;"><a href="deleteDuyetHB.php?deleteid=' .  $maHB . '" style="color: red;">H???y k???t qu???</a></td>
                                <td style="font-style: italic; color: blue; text-align: center;"><a href="DuyetHB_ChiTiet.php?updateid=' .  $maSV . '">Xem chi ti???t</a></td>
                                <td style="font-style: italic; color: blue; text-align: center;"><a href="DuyetHB_Rieng.php?updatehb=' .  $maSV . '"><button type="button" class="btn btn-outline-success" >Duy???t</button></a> </td>
                                </tr>';
                                }
                            
                            ?>
                        </tbody>
                    </table>
                    </br>
                    <input type="hidden" name="duyetALL" value="duyetALL">
                    <input type="submit" class="btn btn-primary" style="margin-left: 150%; width: 20%;" value="Duy???t t???t c???">
                </form>

            </div>
        </div>
    </div>


</body>

</html>
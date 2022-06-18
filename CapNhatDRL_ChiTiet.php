<?php
$sever = "localhost";
$username = "root";
$password = "";
$database = "qlhb_2";
$conn = new mysqli($sever, $username, $password, $database);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
function page_redirect($location)
{
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=' . $location . '">';
    exit;
}
$id = $_GET['updateid'];
if (isset($_POST['customCheckU11'])) {
    $d11 = (int) ($_POST['customCheckU11']);
    $d12 = (int) ($_POST['customCheckU12']);
    $d13 = (int) ($_POST['customCheckU13']);
    $d14 = (int) ($_POST['customCheckU14']);
    $d15 = (int) ($_POST['customCheckU15']);
    $d16 = (int) ($_POST['customCheckU16']);
    $d17 = (int) ($_POST['customCheckU17']);
    $d18 = (int) ($_POST['customCheckU18']);
    $d21 = (int) ($_POST['customCheckU21']);
    $d22 = (int) ($_POST['customCheckU22']);
    $d23 = (int) ($_POST['customCheckU23']);
    $d24 = (int) ($_POST['customCheckU24']);
    $d31 = (int) ($_POST['customCheckU31']);
    $d32 = (int) ($_POST['customCheckU32']);
    $d33 = (int) ($_POST['customCheckU33']);
    $d34 = (int) ($_POST['customCheckU34']);
    $d41 = (int) ($_POST['customCheckU41']);
    $d42 = (int) ($_POST['customCheckU42']);
    $d43 = (int) ($_POST['customCheckU43']);
    $d44 = (int) ($_POST['customCheckU44']);
    $d45 = (int) ($_POST['customCheckU45']);
    $d51 = (int) ($_POST['customCheckU51']);
    $d52 = (int) ($_POST['customCheckU52']);
    $d53 = (int) ($_POST['customCheckU53']);
    $d54 = (int) ($_POST['customCheckU54']);

    $sqlupdate = "UPDATE `diemrenluyen` SET `1.1` = $d11, `1.2` = $d12, `1.3` = $d13, `1.4` = $d14, `1.5` = $d15, `1.6` = $d16, `1.7` = $d17, `1.8` = $d18, `2.1` = $d21, `2.2` = $d22, `2.3` = $d23, `2.4` = $d24, `3.1` = $d31, `3.2` = $d32, `3.3` = $d33, `3.4` = $d34, `4.1` = $d41, `4.2` = $d42, `4.3` = $d43, `4.4` = $d44, `4.5` = $d45, `5.1` = $d51, `5.2` = $d52, `5.3` = $d53, `5.4` = $d54  WHERE maDRL = '$id'";
    $result_update = mysqli_query($conn, $sqlupdate);
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
    </style>
</head>

<body>
    <?php include("system/header.php"); ?>
    <div class="wrappercl">
        <div class="container-wrap">
            <div class="col-12 col-lg-9">
                <label>Chi tiết điểm rèn luyện: </label>
                <table class="table table-striped" style="width:134%">
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

                        if (isset($_GET['updateid'])) {
                            $id = $_GET['updateid'];
                            $sql_get = "SELECT maDRL,drl.maSV,sv.tenSV, `1.1`+`1.2`+`1.3`+`1.4`+`1.5`+`1.6`+`1.7`+`1.8`+`2.1`+`2.2`+`2.3`+`2.4`+`3.1`+`3.2`+`3.3`+`3.4`+`4.1`+`4.2`+`4.3`+`4.4`+`4.5`+`5.1`+`5.2`+`5.3`+`5.4` as diemRL FROM `diemrenluyen` drl, `sinhvien` sv WHERE drl.maSV = sv.maSV and drl.maDRL = '$id'";
                            $result = mysqli_query($conn, $sql_get);
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $maDRL = $row['maDRL'];
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
        </div>
    </div>

    <div class="container" style="max-width:90%; margin: 0 auto 10px; padding: 10px 13px;">
        <div class="row">
            <div class="col-12 col-lg-10">
                <form action="" method="POST">
                    <!-- <tr style=" background-color: #053FC9;color: whitesmoke; text-align: center; "> -->
                    <table class="table table-bordered" style="width: 145%">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center;">Nội dung đánh giá</th>
                                <th scope="col" style="text-align: center;">Điểm</th>
                                <th scope="col" style="text-align: center;">Chọn cũ</th>
                                <th scope="col" style="text-align: center;">Chọn mới</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql_get2 = "SELECT `1.1`,`1.2`,`1.3`,`1.4`,`1.5`,`1.6`,`1.7`,`1.8`,`2.1`,`2.2`,`2.3`,`2.4`,`3.1`,`3.2`,`3.3`,`3.4`,`4.1`,`4.2`,`4.3`,`4.4`,`4.5`,`5.1`,`5.2`,`5.3`,`5.4`  FROM `diemrenluyen` drl WHERE drl.maDRL = '$id'";
                            $result2 = mysqli_query($conn, $sql_get2);
                            if ($result2) {
                                while ($row = mysqli_fetch_assoc($result2)) {
                                    $m11 = $row['1.1'];
                                    $m12 = $row['1.2'];
                                    $m13 = $row['1.3'];
                                    $m14 = $row['1.4'];
                                    $m15 = $row['1.5'];
                                    $m16 = $row['1.6'];
                                    $m17 = $row['1.7'];
                                    $m18 = $row['1.8'];
                                    $m21 = $row['2.1'];
                                    $m22 = $row['2.2'];
                                    $m23 = $row['2.3'];
                                    $m24 = $row['2.4'];
                                    $m31 = $row['3.1'];
                                    $m32 = $row['3.2'];
                                    $m33 = $row['3.3'];
                                    $m34 = $row['3.4'];
                                    $m41 = $row['4.1'];
                                    $m42 = $row['4.2'];
                                    $m43 = $row['4.3'];
                                    $m44 = $row['4.4'];
                                    $m45 = $row['4.5'];
                                    $m51 = $row['5.1'];
                                    $m52 = $row['5.2'];
                                    $m53 = $row['5.3'];
                                    $m54 = $row['5.4'];
                                }
                            } else {
                                die(mysqli_error($conn));
                            }
                            ?>
                            <tr>
                                <td style="font-weight: bold ;">I. Đánh giá về ý thức học tập</td>
                                <td style="text-align: center;">20</td>
                                <td style="text-align: center;">

                                </td>
                                <td style="text-align: center;">

                                </td>
                            </tr>

                            <tr>
                                <td>- Có đi học chuyên cần, đúng giờ, nghiêm túc trong giờ học; đủ điều kiện dự thi tất cả các học phần</td>
                                <td style="text-align: center;">4</td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m11 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck11" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck11" disabled>';
                                        }
                                        ?>
                                        <label class="custom-control-label" for="customCheck11"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU11" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU11" name="customCheckU11" value="4">
                                        <label class="custom-control-label" for="customCheckU11"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- Có ý thức tham gia các câu lạc bộ học thuật, các hoạt động học thuật, hoạt động ngoại khóa</p></br>
                                    <p>- Có đăng ký, thực hiện, báo cáo đề tài NCKH đúng tiến độ hoặc đăng ký, tham dự kỳ thi sinh viên giỏi các cấp </p>
                                </td>
                                <td style="text-align: center;">
                                    <p>2</p></br>
                                    <p>2</p>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m12 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck12" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck12" disabled>';
                                        }
                                        ?>
                                        <label class="custom-control-label" for="customCheck12"></label>
                                    </div>
                                    <p></br></p>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m13 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck13" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck13" disabled>';
                                        }
                                        ?>
                                        <label class="custom-control-label" for="customCheck13"></label>
                                    </div>

                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU12" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU12" name="customCheckU12" value="2">
                                        <label class="custom-control-label" for="customCheckU12"></label>
                                    </div>
                                    <p></br></p>
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU13" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU13" name="customCheckU13" value="2">
                                        <label class="custom-control-label" for="customCheckU13"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- Không vi phạm quy chế thi và kiểm tra</p>
                                </td>
                                <td style="text-align: center;">6</td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m14 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck14" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck14" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck14"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU14" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU14" name="customCheckU14" value="6">
                                        <label class="custom-control-label" for="customCheckU14"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- Được tập thể lớp công nhận có tinh thần vượt khó, phấn đấu vươn lên trong học tập</p>
                                </td>
                                <td style="text-align: center;">2</td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m15 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck15" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck15" disabled>';
                                        }
                                        ?>
                                        <label class="custom-control-label" for="customCheck15"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU15" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU15" name="customCheckU15" value="2">
                                        <label class="custom-control-label" for="customCheckU15"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- ĐTBCHK từ 3,2 đến 4,0</p>
                                    <p>- ĐTBCHK từ 2,0 đến 3,19</p>
                                    <p>- ĐTBCHK dưới 2,0</p>
                                </td>
                                <td style="text-align: center;">
                                    <p>4</p>
                                    <p>2</p>
                                    <p>0</p>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m16 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck16" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck16" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck16"></label>
                                    </div>
                                    <p> </p>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m17 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck17" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck17" disabled>';
                                        }
                                        ?>
                                        <label class="custom-control-label" for="customCheck17"></label>
                                    </div>
                                    <p> </p>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m18 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck18" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck18" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck18"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU16" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU16" name="customCheckU16" value="4">
                                        <label class="custom-control-label" for="customCheckU16"></label>
                                    </div>
                                    <p> </p>
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU17" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU17" name="customCheckU17" value="2">
                                        <label class="custom-control-label" for="customCheckU17"></label>
                                    </div>
                                    <p> </p>
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU18" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU18" name="customCheckU18" value="0">
                                        <label class="custom-control-label" for="customCheckU18"></label>
                                    </div>
                                </td>
                            </tr>

                            <!-- Nội dung chấm II  -->
                            <tr>
                                <td style="font-weight: bold ;">II. Đánh giá về ý thức chấp hành nội quy, quy chế trong nhà trường</td>
                                <td style="text-align: center;">25</td>
                                <td style="text-align: center;">

                                </td>
                                <td style="text-align: center;">

                                </td>
                            </tr>

                            <tr>
                                <td>- Có ý thức chấp hành các văn bản chỉ đạo của ngành, cấp trên và ĐHĐN được thực hiện trong nhà trường</td>
                                <td style="text-align: center;">6</td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m21 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck21" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck21" disabled>';
                                        }
                                        ?>
                                        <label class="custom-control-label" for="customCheck21"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU21" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU21"  name="customCheckU21"  value="6">
                                        <label class="custom-control-label" for="customCheckU21"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- Có ý thức tham gia đầy đủ, đạt yêu cầu các cuộc vận động, sinh hoạt chính trị theo chủ trương, của cấp trên, ĐHĐN và nhà trường</p>
                                </td>
                                <td style="text-align: center;">
                                    <p>4</p>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m22 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck22" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck22" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck22"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU22" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU22"  name="customCheckU22"  value="4">
                                        <label class="custom-control-label" for="customCheckU22"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- Có ý thức chấp hành nội quy, quy chế và các quy định của nhà trường</p>
                                    <p>- Đóng học phí và các khoản thu khác đầy đủ, đúng hạn</p>
                                </td>
                                <td style="text-align: center;">
                                    <p>10</p>
                                    <p>5</p>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m23 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck23" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck23" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck23"></label>
                                    </div>
                                    <p> </p>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m24 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck24" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck24" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck24"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU23" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU23"  name="customCheckU23" value="10">
                                        <label class="custom-control-label" for="customCheckU23"></label>
                                    </div>
                                    <p> </p>
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU24" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU24" name="customCheckU24" value="5">
                                        <label class="custom-control-label" for="customCheckU24"></label>
                                    </div>
                                </td>
                            </tr>
                            <!-- Nội dung  chấm III -->
                            <tr>
                                <td style="font-weight: bold ;">III. ĐÁNH GIÁ VỀ Ý THỨC THAM GIA CÁC HOẠT ĐỘNG CHÍNH TRỊ- XÃ HỘI, VHVN, TDTT, PHÒNG CHỐNG TỘI PHẠM VÀ CÁC TỆ NẠN XÃ HỘI</td>
                                <td style="text-align: center;">20</td>
                                <td style="text-align: center;">

                                </td>
                                <td style="text-align: center;">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- Tham gia đầy đủ, đạt yêu cầu “ Tuần sinh hoạt công dân sinh viên” đầu khóa năm học và cuối khóa.</p></br>
                                    <p>- Có ý thức tham gia đầy đủ, nghiêm túc hoạt động rèn luyện về chính trị, xã hội, văn hóa, văn nghệ, thể thao do nhà trường và ĐHĐN tổ chức, điều động</p>
                                </td>
                                <td style="text-align: center;">
                                    <p>10</p></br>
                                    <p>6</p>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m31 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck31" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck31" disabled>';
                                        }
                                        ?>
                                        <label class="custom-control-label" for="customCheck31"></label>
                                    </div>
                                    <p></br></p>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m32 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck32" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck32" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck32"></label>
                                    </div>

                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU31" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU31" name="customCheckU31" value="10">
                                        <label class="custom-control-label" for="customCheckU31"></label>
                                    </div>
                                    <p></br></p>
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU32" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU32" name="customCheckU32" value="6">
                                        <label class="custom-control-label" for="customCheckU32"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- Không vi phạm quy chế thi và kiểm tra</p>
                                </td>
                                <td style="text-align: center;">2</td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m33 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck33" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck33" disabled>';
                                        }
                                        ?>
                                        <label class="custom-control-label" for="customCheck33"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU33" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU33" name="customCheckU33" value="2">
                                        <label class="custom-control-label" for="customCheckU33"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- Có ý thức tuyên truyền, phòng chống tội phạm và các tệ nạn xã hội</p>
                                </td>
                                <td style="text-align: center;">2</td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m34 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck34" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck34" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck34"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU34" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU34" name="customCheckU34" value="2">
                                        <label class="custom-control-label" for="customCheckU34"></label>
                                    </div>
                                </td>
                            </tr>
                            <!-- Nội dung chấm IV  -->
                            <tr>
                                <td style="font-weight: bold ;">IV. ĐÁNH GIÁ VỀ Ý THỨC CÔNG DÂN TRONG QUAN HỆ VỚI CỘNG ĐỒNG</td>
                                <td style="text-align: center;">25</td>
                                <td style="text-align: center;">

                                </td>
                                <td style="text-align: center;">

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>- Có ý thức chấp hành, tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước</p>
                                    <p>- Có ý thức chấp hành, tham gia tuyên truyền các quy định về đảm bảo an toàn giao thông và “văn hóa giao thông”</p>
                                    <p>- Có tham gia bảo hiểm y tế ( bắt buộc) theo Luật bảo hiểm y tế.</p>
                                </td>
                                <td style="text-align: center;">
                                    <p>4</p>
                                    <p>10</p>
                                    <p>5</p>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m41 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck41" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck41" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck41"></label>
                                    </div>
                                    <p> </p>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m42 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck42" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck42" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck42"></label>
                                    </div>
                                    <p> </p>
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m43 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck43" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck43" disabled>';
                                        }
                                        ?>
                                        <label class="custom-control-label" for="customCheck43"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU41" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU41" name="customCheckU41" value="4">
                                        <label class="custom-control-label" for="customCheckU41"></label>
                                    </div>
                                    <p> </p>
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU42" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU42" name="customCheckU42" value="10">
                                        <label class="custom-control-label" for="customCheckU42"></label>
                                    </div>
                                    <p> </p>
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU43" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU43" name="customCheckU43" value="5">
                                        <label class="custom-control-label" for="customCheckU43"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- Có ý thức tham gia các hoạt động xã hội có thành tích được ghi nhận, biểu dương khen thưởng</p>
                                </td>
                                <td style="text-align: center;">4</td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m44 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck44"  disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck44" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck44"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU44" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU44" name="customCheckU44"  value="4">
                                        <label class="custom-control-label" for="customCheckU44"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- Có tinh thần chia sẻ, giúp đỡ người gặp khó khăn, hoạn nạn</p>
                                </td>
                                <td style="text-align: center;">2</td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m45 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck45" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck45" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck45"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU45" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU45" name="customCheckU45" value="2">
                                        <label class="custom-control-label" for="customCheckU45"></label>
                                    </div>
                                </td>
                            </tr>

                            <!-- Nội dung chấm V -->
                            <tr>
                                <td style="font-weight: bold ;">V. ĐÁNH GIÁ VỀ Ý THỨC VÀ KẾT QUẢ KHI THAM GIA CÔNG TÁC CÁN BỘ LỚP, CÁC ĐOÀN THỂ, TỔ CHỨC TRONG NHÀ TRƯỜNG HOẶC SINH VIÊN ĐẠT ĐƯỢC THÀNH TÍCH TRONG HỌC TẬP, RÈN LUYỆN</td>
                                <td style="text-align: center;">10</td>
                                <td style="text-align: center;">

                                </td>
                                <td style="text-align: center;">

                                </td>
                            </tr>

                            <tr>
                                <td>- Có ý thức, uy tín và hoàn thành tốt nhiệm vụ quản lý lớp, các tổ chức Đảng, Đoàn Thanh niên, Hội Sinh viên, tổ chức khác trong nhà trường</td>
                                <td style="text-align: center;">2</td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m51 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck51" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck51" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck51"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU51" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU51" name="customCheckU51" value="2">
                                        <label class="custom-control-label" for="customCheckU51"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- Có kỹ năng tổ chức, quản lý lớp, các tổ chức Đảng, Đoàn Thanh niên, Hội Sinh viên và các tổ chức khác trong nhà trường</p>
                                </td>
                                <td style="text-align: center;">3</td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m52 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck52" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck52" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck52"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU52" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU52" name="customCheckU52" value="3">
                                        <label class="custom-control-label" for="customCheckU52"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- Hỗ trợ tham gia tích cực vào các hoạt động chung của lớp, tập thể khoa, trường và Đại học Đà Nẵng</p>
                                </td>
                                <td style="text-align: center;">2</td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m53 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck53" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck53" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck53"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU53" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU53" name="customCheckU53" value="2">
                                        <label class="custom-control-label" for="customCheckU53"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>- Đạt thành tích trong học tập, rèn luyện (được tặng bằng khen, giấy khen, chứng nhận, thư khen của các cấp)</p>
                                </td>
                                <td style="text-align: center;">3</td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <?php if ($m54 != 0) {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck54" disabled checked>';
                                        } else {
                                            echo '<input type="checkbox" class="custom-control-input" id="customCheck54" disabled>';
                                        }
                                        ?>

                                        <label class="custom-control-label" for="customCheck54"></label>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" name="customCheckU54" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="customCheckU54" name="customCheckU54" value="3">
                                        <label class="custom-control-label" for="customCheckU54"></label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <input type="submit" class="btn btn-primary" style="margin-left: 124%; width: 20%;" value="Cập nhật">
                </form>
                </br></br></br>
            </div>
        </div>

    </div>

</body>

</html>
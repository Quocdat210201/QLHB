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
                            $sql_get = "SELECT maDRL,drl.maSV,sv.tenSV,diemRL FROM `diemrenluyen` drl, `sinhvien` sv WHERE drl.maSV = sv.maSV and drl.maDRL = '$id'";
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
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" disabled checked>
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>- Có ý thức tham gia các câu lạc bộ học thuật, các hoạt động học thuật, hoạt động ngoại khóa</p>
                                <p>- Có đăng ký, thực hiện, báo cáo đề tài NCKH đúng tiến độ hoặc đăng ký, tham dự kỳ thi sinh viên giỏi các cấp </p>
                            </td>
                            <td style="text-align: center;">
                                <p>2</p></br>
                                <p>2</p>
                            </td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3" disabled checked>
                                    <label class="custom-control-label" for="customCheck3"></label>
                                </div>
                                <p></br></p>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3" disabled checked>
                                    <label class="custom-control-label" for="customCheck3"></label>
                                </div>

                            </td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4"></label>
                                </div>
                                <p></br></p>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck121">
                                    <label class="custom-control-label" for="customCheck121"></label>
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
                                    <input type="checkbox" class="custom-control-input" id="customCheck5" disabled checked>
                                    <label class="custom-control-label" for="customCheck5"></label>
                                </div>
                            </td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label" for="customCheck6"></label>
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
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" disabled checked>
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                    <label class="custom-control-label" for="customCheck7"></label>
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
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" disabled checked>
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                                <p> </p>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" disabled>
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                                <p> </p>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" disabled>
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                    <label class="custom-control-label" for="customCheck8"></label>
                                </div>
                                <p> </p>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck12">
                                    <label class="custom-control-label" for="customCheck12"></label>
                                </div>
                                <p> </p>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                                    <label class="custom-control-label" for="customCheck11"></label>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>

                
                <nav aria-label="..." style="width: 99%;margin: 30px 0 0 57%;">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">CÁC MỤC CHẤM </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">I</a></li>
                        <li class="page-item ">
                            <a class="page-link" href="#">II <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">III</a></li>
                        <li class="page-item"><a class="page-link" href="#">IV</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <button type="button" class="btn btn-primary" style="margin-left: 124%; width: 20%;">Cập nhật</button>
            </div>
        </div>

    </div>

</body>

</html>
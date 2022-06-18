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
        <label style="font-weight: bold;margin-left: 150px; margin-bottom: 20px;">Danh sách xét duyệt học bổng Khoa Công nghệ số : </label>
        <div class="combox" style="margin-left: 150px;">
            <label for="" style="font-weight: bold ;">Loại học bổng: </label>
            <select name="loaiHB" id="loaiHB">
                <optgroup label="Loại Học Bổng: ">
                    <option value="hb0">
                        Tất cả
                    </option>
                    <option value="hb1">
                        Khuyến khích học tập
                    </option>
                    <option value="hb2">Học bổng chắp cánh ước mơ</option>
                    <option value="hb3">Học bổng thử thách UTE</option>
                    <option value="hb4">Hổng bổng vượt khó</option>
                </optgroup>
            </select>

            <label for="" style="font-weight: bold ; padding-left: 30px; margin-right: -30px;">Ngành: </label>
            <select name="nganh" id="nganh">
                <optgroup label="Ngành">
                    <option value="test">
                        Tất cả
                    </option>
                    <option value="test1">
                        Công nghệ thông tin
                    </option>
                    <option value="test2">Điện tử viễn thông</option>
                    <option value="test3">Mạng</option>
                </optgroup>
            </select>
            <form class="form-inline" action="/action_page.php" style="display: inline; margin-left: 150px;">
                <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm sinh viên...">
                <button class="btn btn-success" type="submit">Tìm kiếm</button>
            </form>
        </div>
    </div>

    <div class="container" style="margin-left:10%; margin-right: auto;">
        <form action="dsDaDuyetHB.php" method="POST">
            <input type="submit" class="btn btn-info" style=" width: 19%; margin-bottom: 20px;" value="Xem danh sách đã duyệt">
        </form>
        <div class="row">
            <div class="col-12 col-lg-10">
                <form action="" method="POST">
                    <table class="table table-striped" style="width:170%">
                        <thead>
                            <tr style=" background-color: #053FC9;color: whitesmoke; text-align: center; ">
                                <th scope="col">STT</th>
                                <th scope="col">Mã sinh viên</th>
                                <th scope="col">Tên sinh viên</th>
                                <th scope="col">Loại học bổng</th>
                                <th scope="col">Xếp loại HB</th>
                                <th scope="col">Trạng thái duyệt</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $sql = "SELECT maDS,ds.maSV,sv.tenSV,hb.tenHB,xl.tenXL, ds.trangthaiduyet FROM `dsdudieukien` ds, `sinhvien` sv,`loaihocbong` hb,`xeploai` xl WHERE ds.maSV = sv.maSV and ds.maHB = hb.maHB and ds.maXL = xl.maXL and trangthaiduyet = 0";
                            $result = mysqli_query($conn, $sql);
                            $stt = 0;
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
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
                                <td style="font-weight: bold    ; color: red;">Chưa duyệt</td>
                                <td style="color: red; text-align: center;"><a href="deleteDuyetHB.php?deleteid=' .  $maHB . '" style="color: red;">Hủy kết quả</a></td>
                                <td style="font-style: italic; color: blue; text-align: center;"><a href="DuyetHB_ChiTiet.php?updateid=' .  $maSV . '">Xem chi tiết</a></td>
                                <td style="font-style: italic; color: blue; text-align: center;"><a href="DuyetHB_Rieng.php?updatehb=' .  $maSV . '"><button type="button" class="btn btn-outline-success" >Duyệt</button></a> </td>
                                </tr>';
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    </br>
                    <input type="hidden" name="duyetALL" value="duyetALL">
                    <input type="submit" class="btn btn-primary" style="margin-left: 150%; width: 20%;" value="Duyệt tất cả">
                </form>

            </div>
        </div>
    </div>


</body>

</html>
<?php
    include "connect.php";
    if(isset($_GET['updateid'])){
        $id = $_GET['updateid'];
        $sql_get = "SELECT maDRL,drl.maSV,sv.tenSV,diemRL FROM `diemrenluyen` drl, `sinhvien` sv WHERE drl.maSV = sv.maSV and drl.maDRL = '$id'";

        $result = mysqli_query($conn,$sql);
        
        if($result){
            page_redirect("http://localhost/QLHB/index.php?router=updateDRL");
        }else{
            die(mysqli_error($conn));
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
    <link rel="stylesheet" href="jquery.bootstrap-growl.min.js">
    

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
        <div class="combox" style="margin-left: 90px">
            <label for="" style="font-weight: bold ;">Khoa: </label>
            <select name="Khoa" id="type">
                <optgroup label="Khoa">
                    <option value="item1">Công Nghệ Số</option>
                    <option value="item2">Cơ Khí</option>
                    <option value="item3">Điện - Điện Tử</option>
                </optgroup>
            </select>

            <label for="" style="font-weight: bold ; padding-left: 30px; margin-right: -30px;">Ngành: </label>
            <select name="nganh" id="nganh">
                <optgroup label="Ngành">
                    <option value="">-- select one -- </option>
                </optgroup>
            </select>

            <label for="" style="font-weight: bold ; padding-left: 30px; margin-right: -30px;">Lớp: </label>
            <select name="lop" id="lop">
                <optgroup label="Lớp">
                    <option value="">-- select one -- </option>
                </optgroup>
            </select>
            <form class="form-inline" action="/action_page.php" style="display: inline; margin-left: 280px;">
                <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm sinh viên...">
                <button class="btn btn-success" type="submit">Tìm kiếm</button>
            </form>
        </div>
    </div>

    <div class="container-wrap" style="width: 1333px">
        <div class="row">
            <div class="col-12 col-lg-10">
                <table class="table table-striped" style="width: 146%; margin: auto;">
                    <thead>
                        <tr style=" background-color: #053FC9;color: whitesmoke; text-align: center; ">
                            <th scope="col">STT</th>
                            <th scope="col">Mã sinh viên</th>
                            <th scope="col">Tên sinh viên</th>
                            <th scope="col">Điểm rèn luyện</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td style="text-align: center ;" scope="row">1</td>
                            <td style="text-align: center ;">1911505310109</td>
                            <td style="font-weight: bold    ;">Nguyễn Vũ Dũng</td>
                            <td style="text-align: center ;">90</td>
                            <td style="color: red; text-align: center;">Hủy kết quả</td>
                            <td style="font-style: italic; color: blue; text-align: center;"><a href="index.php?router=detail_updateDRL">Xem chi tiết</a></td>
                        </tr>
                         -->

                        <?php

                        $sql = "SELECT maDRL,drl.maSV,sv.tenSV, `1.1`+`1.2`+`1.3`+`1.4`+`1.5`+`1.6`+`1.7`+`1.8`+`2.1`+`2.2`+`2.3`+`2.4`+`3.1`+`3.2`+`3.3`+`3.4`+`4.1`+`4.2`+`4.3`+`4.4`+`4.5`+`5.1`+`5.2`+`5.3`+`5.4` as diemRL FROM `diemrenluyen` drl, `sinhvien` sv WHERE drl.maSV = sv.maSV;";
                        $result = mysqli_query($conn, $sql);
                        $stt = 0;
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $stt++;
                                $maDRL = $row['maDRL'];
                                $maSV = $row['maSV'];
                                $tenSV = $row['tenSV'];
                                $drl = $row['diemRL'];

                                echo '<tr>
                                    <td style="text-align: center ;" scope="row">' . $stt . '</td>
                                    <td style="text-align: center ;">' . $maSV . '</td>
                                    <td style="font-weight: bold    ;">' . $tenSV . '</td>
                                    <td style="text-align: center ;">' . $drl . '</td>
                                    <td style="color: red; text-align: center;"><a href="deleteDRL.php?deleteid=' . $maDRL . '" style="color: red;">Hủy kết quả</a></td>
                                    <td style="font-style: italic; color: blue; text-align: center;"><a href="CapNhatDRL_ChiTiet.php?updateid='.$maDRL.'">Xem chi tiết</a></td>
                                </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>

                <nav aria-label="..." style="width: 99%;margin: 30px 0 0 57%;">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item ">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#type").change(function() {
                var val = $(this).val();
                if (val == "item1") {
                    $("#nganh").html(" <option value='test'>Công Nghệ Thông Tin</option> <option value='test2'>Trí tuệ nhân tạo</option> <option value='test3'>Điện tử viễn thông</option> ");
                } else if (val == "item2") {
                    $("#nganh").html("<option value='test'>Kỹ thuật ô tô</option><option value='test2'>Kỹ thuật cơ khí</option>");
                } else if (val == "item3") {
                    $("#nganh").html("<option value='test'>Kỹ thuật nhiệt</option><option value='test2'>Cơ điện tử</option>");
                } else if (val == "item0") {
                    $("#nganh").html(" <option value='test'>Công Nghệ Thông Tin</option> <option value='test2'>Trí tuệ nhân tạo</option> <option value='test3'>Điện tử viễn thông</option> ");
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#nganh").change(function() {
                var val = $(this).val();
                var val2 = $("#type").val();
                if (val2 == "item1") {
                    if (val == "test") {
                        $("#lop").html(" <option value='lop'>19T1</option> <option value='lop2'>19T2</option> <option value='lop3'>19T3</option> ");
                    } else if (val == "test2") {
                        $("#lop").html("<option value='lop'>19TTNT1</option><option value='lop2'>19TTNT2</option>");
                    } else if (val == "test3") {
                        $("#lop").html("<option value='lop'>19DTVT1</option><option value='lop2'>19DTVT2</option>");
                    } else if (val == "test") {
                        $("#lop").html(" <option value='lop'>19T1</option> <option value='lop2'>19T2</option> <option value='lop3'>19T3</option> ");
                    }
                } else if (val2 == "item2") {
                    if (val == "test") {
                        $("#lop").html(" <option value='lop'>19KTOT1</option> <option value='lop2'>19KTO2</option>");
                    } else if (val == "test2") {
                        $("#lop").html("<option value='lop'>19KTCK1</option><option value='lop2'>19KTCK2</option>");
                    }
                } else if (val2 == "item3") {
                    if (val == "test") {
                        $("#lop").html(" <option value='lop'>19KTN1</option> <option value='lop2'>19KTN2</option>");
                    } else if (val == "test2") {
                        $("#lop").html("<option value='lop'>19CDT1</option><option value='lop2'>19CDT2</option>");
                    }
                }

            });
        });
    </script>
</body>

</html>
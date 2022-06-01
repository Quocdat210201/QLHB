<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/style.css">
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
    <div class="wrappercl">
        <div class="col-12 col-lg-9" style="margin-left:auto ; margin-right: auto;">
            <label>Cập nhật điểm rèn luyện: </label>
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
                    <tr>
                        <td style="text-align: center ;" scope="row">1</td>
                        <td style="text-align: center ;">1911505310109</td>
                        <td style="font-weight: bold    ;">Nguyễn Vũ Dũng</td>
                        <td style="text-align: center ;">90</td>
                        <td style="color: red; text-align: center;">3.9</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container" style="margin-left:10px; margin-left: auto; margin-right: auto; margin-top: -50px; width: 100%;">
        <div class="row" style="width: 120%;">
            <div class="col-12 col-lg-10" >
                <!-- <tr style=" background-color: #053FC9;color: whitesmoke; text-align: center; "> -->
                <table class="table table-bordered" style="width: 70%; float: left; ">
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

                <nav class="navigation" style="display:flex; margin-top: 7%;">
                    <ul class="mainmenu">
                        <li><a href=""> Mục I </a></li>
                        <li><a href=""> Mục II</a></li>
                        <li><a href=""> Mục III</a></li>
                        <li><a href=""> Mục IV</a></li>
                        <li><a href=""> Mục V</a></li>
                    </ul>
                </nav>
            </div>
            <button type="button"  class="btn btn-secondary" style="margin-left: 10%; width: 12%;" disabled>Xem DRL</button>
            <button type="button" class="btn btn-primary" style="margin-left: 10%; width: 12%;" onclick="location.href='index.php?router=DuyetHB_HK'">Xem điểm Học Kì</button>
        </div>
    </div>
</body>

</html>
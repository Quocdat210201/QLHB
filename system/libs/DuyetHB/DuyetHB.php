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
    </style>
</head>

<body>
    <div class="wrappercl">
        <label style="font-weight: bold;margin-left: 150px; margin-bottom: 50px;">Danh sách xét duyệt học bổng Khoa Công nghệ số : </label>
        <div class="combox" style="margin-left: 150px;">
            <label for="" style="font-weight: bold ;">Khoa: </label>
            <select name="loaiHB">
                <optgroup label="Loại Học Bổng: ">
                    <option value="2.0 or higher">
                        Học bổng khuyến khích
                    </option>
                    <option value="1.5.x">Học bổng Panasonic</option>
                    <option value="1.0.x">Học bổng Nhật Bản</option>
                </optgroup>
            </select>
            <label for="" style="font-weight: bold ; padding-left: 30px; margin-right: -30px;">Ngành: </label>
            <select name="nganh">
                <optgroup label="Ngành">
                    <option value="2.0 or higher">
                        Công nghệ thông tin
                    </option>
                    <option value="1.5.x">Điện tử viễn thông</option>
                    <option value="1.0.x">Mạng</option>
                </optgroup>
            </select>
            <label for="" style="font-weight: bold ; padding-left: 30px; margin-right: -30px;">Lớp: </label>
            <select name="lop">
                <optgroup label="Lớp">
                    <option value="2.0 or higher">
                        19T1
                    </option>
                    <option value="1.5.x">19T2</option>
                    <option value="1.0.x">19T3</option>
                </optgroup>
            </select>
            <form class="form-inline" action="/action_page.php" style="display: inline; margin-left: 150px;">
                <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm sinh viên...">
                <button class="btn btn-success" type="submit">Tìm kiếm</button>
            </form>
        </div>
    </div>

    <div class="container" style="margin-left:10px; margin-left: auto; margin-right: auto;">
        <div class="row">
            <div class="col-12 col-lg-10">
                <table class="table table-striped" style="width:150%">
                    <thead>
                        <tr style=" background-color: #053FC9;color: whitesmoke; text-align: center; ">
                            <th scope="col">STT</th>
                            <th scope="col">Mã sinh viên</th>
                            <th scope="col">Tên sinh viên</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center ;" scope="row">1</td>
                            <td style="text-align: center ;">1911505310109</td>
                            <td style="font-weight: bold    ;">Nguyễn Vũ Dũng</td>
                            <td style="color: red; text-align: center;">Hủy kết quả</td>
                            <td style="font-style: italic; color: blue; text-align: center;"><a href="index.php?router=DuyetHB_DRL">Xem chi tiết</a></td>
                        </tr>
                        <tr>
                            <td style="text-align: center ;" scope="row">2</td>
                            <td style="text-align: center ;">1911505310111</td>
                            <td style="font-weight: bold    ;">Ông Văn Chương</td>
                            <td style="color: red; text-align: center;">Hủy kết quả</td>
                            <td style="font-style: italic; color: blue; text-align: center;"><a href="index.php?router=DuyetHB_DRL">Xem chi tiết</a></td>
                        </tr>
                        <tr>
                            <td style="text-align: center ;" scope="row">3</td>
                            <td style="text-align: center ;">1911505310123</td>
                            <td style="font-weight: bold    ;">Phan Quốc Đạt</td>
                            <td style="color: red; text-align: center;">Hủy kết quả</td>
                            <td style="font-style: italic; color: blue; text-align: center;"><a href="index.php?router=DuyetHB_DRL">Xem chi tiết</a></td>
                        </tr>
                        <tr>
                            <td style="text-align: center ;" scope="row">4</td>
                            <td style="text-align: center ;">1911505310110</td>
                            <td style="font-weight: bold    ;">Ngô Hoàng Anh</td>
                            <td style="color: red; text-align: center;">Hủy kết quả</td>
                            <td style="font-style: italic; color: blue; text-align: center;"><a href="index.php?router=DuyetHB_DRL">Xem chi tiết</a></td>
                        </tr>
                        <tr>
                            <td style="text-align: center ;" scope="row">5</td>
                            <td style="text-align: center ;">1911505310111</td>
                            <td style="font-weight: bold    ;">Mai Quốc Dũng</td>
                            <td style="color: red; text-align: center;">Hủy kết quả</td>
                            <td style="font-style: italic; color: blue; text-align: center;"><a href="index.php?router=DuyetHB_DRL">Xem chi tiết</a></td>
                        </tr>
                    
                    </tbody>
                </table>
                <nav aria-label="..." style="margin-left: 50%;">
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
                <button type="button" class="btn btn-primary" style="margin-left: 130%; width: 20%;">Duyệt</button>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Thống kê</title>

</head>
<body>
    <div class="wrappercl">
        <div class="combox">
            <select name="browser">
                <optgroup label="Lớp">
                    <option value="2.0 or higher">
                        19T1
                    </option>
                    <option value="1.5.x">Firefox 1.5.x</option>
                    <option value="1.0.x">Firefox 1.0.x</option>
                </optgroup>
            </select>
            <select name="khoa">
                <optgroup label="Khoa">
                    <option value="2.0 or higher">
                        Khoa công nghệ số
                    </option>
                    <option value="1.5.x">Firefox 1.5.x</option>
                    <option value="1.0.x">Firefox 1.0.x</option>
                </optgroup>
            </select>
            <select name="classify">
                <optgroup label="Phân loại">
                    <option value="2.0 or higher">
                        Giỏi
                    </option>
                    <option value="1.5.x">Khá</option>
                    <option value="1.0.x">Xuất sắc</option>
                </optgroup>
            </select>
            <select name="scholarshipname">
                <optgroup label="Tên học bổng">
                    <option value="2.0 or higher">
                        Thử thách UTE
                    </option>
                    <option value="1.5.x">Khá</option>
                    <option value="1.0.x">Xuất sắc</option>
                </optgroup>
            </select>
            <input type="button" id="btntk" value="Thống kê">
        </div>
        <div class="container-wrap">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Lớp</th>
                            <th scope="col">Khoa</th>
                            <th scope="col">Xếp loại</th>
                            <th scope="col">Tên học bổng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Phan Thị Đạt</td>
                            <td>19T1</td>
                            <td>Công nghệ số</td>
                            <td>Giỏi</td>
                            <td>Thử thách UTE</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Phan Thị Đạt</td>
                            <td>19T1</td>
                            <td>Công nghệ số</td>
                            <td>Giỏi</td>
                            <td>Thử thách UTE</td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>Phan Thị Đạt</td>
                            <td>19T1</td>
                            <td>Công nghệ số</td>
                            <td>Giỏi</td>
                            <td>Thử thách UTE</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Phan Thị Đạt</td>
                            <td>19T1</td>
                            <td>Công nghệ số</td>
                            <td>Giỏi</td>
                            <td>Thử thách UTE</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Phan Thị Đạt</td>
                            <td>19T1</td>
                            <td>Công nghệ số</td>
                            <td>Giỏi</td>
                            <td>Thử thách UTE</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Phan Thị Đạt</td>
                            <td>19T1</td>
                            <td>Công nghệ số</td>
                            <td>Giỏi</td>
                            <td>Thử thách UTE</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        
            <div class="chart">
            <!-- <h3>World population distribution</h3> -->

                <div id="my-pie-chart-container">
                <div id="my-pie-chart"></div>

                <div id="legenda">
                    <div class="entry">
                    <div id="color-brown" class="entry-color"></div>
                    <div class="entry-text">Xuất sắc</div>
                    </div>
                    <div class="entry">
                    <div id="color-black" class="entry-color"></div>
                    <div class="entry-text">Tốt</div>
                    </div>
                    <div class="entry">
                    <div id="color-blue" class="entry-color"></div>
                    <div class="entry-text">Khá</div>
                    </div>
                    <div class="entry">
                    <div id="color-red" class="entry-color"></div>
                    <div class="entry-text">Trung bình</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
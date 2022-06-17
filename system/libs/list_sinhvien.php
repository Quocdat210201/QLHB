<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/base.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Quản lý học bổng</title>
</head>

<body>
    <div class="app" style = "width : 100%">


        <?php
        if (isset($_POST['search'])) {
            $valueToSearch = $_POST['valueToSearch'];
            $query = "SELECT * FROM `dsdathb` AS ds,`sinhvien` as sv WHERE ds.maSV = sv.maSV and tenSV like '%" . $valueToSearch . "%'";
            $search_result = filterTable($query);
        } else {
            $query = "SELECT * FROM `dsdathb` AS ds,`sinhvien` as sv WHERE ds.maSV = sv.maSV";
            $search_result = filterTable($query);
        }

        function filterTable($query)
        {
            $connnect = mysqli_connect("localhost", "root", "", "qlhb");
            $filter_Result = mysqli_query($connnect, $query);
            return $filter_Result;
        }
        ?>


        <div class="app" style="width: 100%">
            <div class="list-student" style="width: 1350px; margin:24px auto ">
                <h4 class="list-student-desc">
                    Danh sách sinh viên
                </h4>
                <form class="form-inline" action="" style="display: inline; margin-left: 280px;" method="POST">
                    <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm sinh viên..." name="valueToSearch">
                    <input class="btn btn-success" type="submit" name="search" value="Tìm kiếm"></input>
                </form>
                <table class="table table-striped" style="width: 100%; margin: 10px auto 50px;">
                    <thead>
                        <tr style=" background-color: #053FC9;color: whitesmoke; text-align: center; ">
                            <th scope="col">STT</th>
                            <th scope="col">Mã sinh viên</th>
                            <th scope="col">Tên sinh viên</th>
                            <th scope="col">Lớp</th>
                            <th scope="col">Email</th>
                            <th scope="col">Số lần nhận học bổng</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($data = mysqli_fetch_array($search_result)) {

                            $stt = 1; ?>
                            <tr>
                                <td style="text-align: center ;" scope="row"><?php echo $stt++ ?></td>
                                <td style="text-align: center ;"><?php echo $data['maSV'] ?></td>
                                <td style="font-weight: bold    ;"><?php echo $data['tenSV'] ?></td>
                                <td style="text-align: center ;"><?php echo $data['maLop'] ?></td>
                                <td style="text-align: center ;"><?php echo $data['email'] ?></td>
                                <td style="text-align: center ;"><?php echo $data['soLan'] ?></td>
                                <td style="font-style: italic; color: blue; text-align: center;"><a href="#">Xem chi tiết</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>


    </div>
</body>

</html>
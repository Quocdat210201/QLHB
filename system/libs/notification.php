<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Thông báo</title>
    <!-- javascript -->
    <script type="text/javascript">
        function selects() {
            var ele = document.getElementsByName('chk');
            for (var i = 0; i < ele.length; i++) {
                if (ele[i].type == 'checkbox')
                    ele[i].checked = true;
            }
        }

        function deSelect() {
            var ele = document.getElementsByName('chk');
            for (var i = 0; i < ele.length; i++) {
                if (ele[i].type == 'checkbox')
                    ele[i].checked = false;

            }
        }
    </script>
</head>

<body>
    <div class="content-wrap" style="width: 100%">
        <div class="custom">
            <input type="button" onclick='selects()' value="Select All" class="btn btn-primary" />
            <input type="button" onclick='deSelect()' value="Deselect All" class="btn btn-secondary" />
            <input type="submit" name="login" value="Sửa" class="btn btn-warning" />
            <input type="submit" name="login" value="Xóa" class="btn btn-danger" />
        </div>
        <div class="container-wrap">
            <h2>Thông báo</h2>

            <table class="table table-striped">

                <tbody>
                    <tr>
                        <td class="col-1">
                            <input type="checkbox" name="chk" id="">
                        </td>
                        <td>
                            <div>
                                <div><u>
                                        <h5>Thông báo cho sinh viên về thủ tục xét học bổng thử thách UTE</h5>
                                    </u></div>
                                <div>Tác giả: Phòng CTSV</div>
                            </div>
                        </td>
                        <td>
                            <a href="">Xem chi tiết</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="chk" id="">
                        </td>
                        <td>
                            <div>
                                <div><u>
                                        <h5>Thông báo cho sinh viên về thủ tục xét học bổng thử thách UTE</h5>
                                    </u></div>
                                <div>Tác giả: Phòng CTSV</div>
                            </div>
                        </td>
                        <td>
                            <a href="">Xem chi tiết</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="chk" id="">
                        </td>
                        <td>
                            <div>
                                <div><u>
                                        <h5>Thông báo cho sinh viên về thủ tục xét học bổng thử thách UTE</h5>
                                    </u></div>
                                <div>Tác giả: Phòng CTSV</div>
                            </div>
                        </td>
                        <td>
                            <a href="">Xem chi tiết</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="chk" id="">
                        </td>
                        <td>
                            <div>
                                <div><u>
                                        <h5>Thông báo cho sinh viên về thủ tục xét học bổng thử thách UTE</h5>
                                    </u></div>
                                <div>Tác giả: Phòng CTSV</div>
                            </div>
                        </td>
                        <td>
                            <a href="">Xem chi tiết</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="chk" id="">
                        </td>
                        <td>
                            <div>
                                <div><u>
                                        <h5>Thông báo cho sinh viên về thủ tục xét học bổng thử thách UTE</h5>
                                    </u></div>
                                <div>Tác giả: Phòng CTSV</div>
                            </div>
                        </td>
                        <td>
                            <a href="">Xem chi tiết</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- <a style="padding:10px;display:block;" href="http://androidcss.com/css/css3-floating-button-tutorial/" target="_blank">Click here for complete tutorial</a> -->
    <!-- Code begins here -->
    <a href="#" class="float">
        <i class="fa fa-plus my-float"></i>
    </a>
</body>

</html>
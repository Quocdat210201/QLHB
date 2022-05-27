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
</head>
<body>
    <!-- <h5>Cập nhật thông tin cá nhân</h5> -->
    <div class="updateInfo">
        <div class="avatar">
            <div>
                <img src="././img/c.jpg" alt="">
                <p>Ảnh đại diện</p>
            </div>
            <div>
                <input type="file">
            </div>
        </div>
        <div class="userinfo">
            <div id="label">
                <h5>Mã sinh viên: </h5>
                
            </div>
            <div id="label">
                <h5>Họ và tên: </h5>
            </div>
            <div id="label">
                <h5>Email: </h5>
            </div>
            <div id="label">
                    <h5>Giới tính: </h5>
                    
            </div>
            <div id="label">
                <h5>Ngày sinh: </h5>
            </div>
            <div id="label">
                <h5>Số điện thoại: </h5>
            </div>
            <div>
                <input type="button" class="btn btn-primary" value="Cập nhật">
            </div>
        </div>
        <div class="datainfo">
            <div><h5>1911505310101</h5></div>
            <div><h5>Ngô Hoàng Anh</h5></div>
            <div><h5>1911505310101@sv.ute.udn.vn</h5></div>
            <div><input type="radio" id="sex" name="male" value="male" checked>
            <label for="huey">Nam</label>
            <input type="radio" id="sex" name="female" value="female" >
            <label for="huey">Nữ</label></div>
            <div class="date"><input type="date" id="date" name="date" value="" ></div>
            <div class="date"><input type="tel" id="tel" name="tel" value=""></div>
            
        </div>
        
    </div>
</body>
</html>
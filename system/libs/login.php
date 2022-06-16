<?php
    if(isset($_POST['login'])) {
        $taikhoan = $_POST['taikhoan'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM TaiKhoan WHERE maNguoiDung = '".$taikhoan."' AND matKhau = '".$matkhau."' LIMIT 1 ";
        
        $row = mysqli_query($con, $sql);
        $count = mysqli_num_rows($row);
        if ($count > 0) {
            $row_data = mysqli_fetch_array($row);
            $_SESSION['login'] = $row_data['maQuyen'];
            $_SESSION['nguoidung'] = $row_data['maNguoiDung'];
            echo "<script> window.location.href='index.php?router=homepage';</script>";
        }else{
            echo '<p style="color:red;"> Sai mật khẩu! </p>';
        }
    }
?>
<div class="login">
    <div id="formlogin">
        <form action="" method="POST" >
            <table>
                <tr>
                    <td colspan="2" style="padding-top: 20px;"><h3 style="color: #238dff;">Đăng nhập</h3></td>
                </tr>
                <tr>
                    <td ><input type="text" name="taikhoan" placeholder="Tài khoản..." id="iplogin"></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Mật khẩu..." id="iplogin"></td>
                </tr>
                <tr>
                    <td colspan="2" style="padding: 25px 0; ">
                        <input type="submit" name="login" value="Đăng nhập" id="btnlogin">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div id="logologin">
        <img src="././assets/img/logologin.png">
    </div>
        
</div>
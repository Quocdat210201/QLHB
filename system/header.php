<?php

    if (isset($_GET['logout']) && $_GET['logout'] == 1) {
        unset($_SESSION['login']);
    }

?>
    <div class="grad1">
        <div id="header" class="mw-1400">
            <img src="./assets/img/headerx.png" alt="">
            <div id="login">
            <?php
                if (isset($_SESSION['login'])) {
            ?>
                <div>
                    <?php 
                        if (isset($_SESSION['nguoidung'])) {
                            echo 'Xin chào '.'<span style="color:red;">'.$_SESSION['nguoidung'].'</span>';
                        }
                        ?>
                </div>
                <div><a name="btnlogin" id="btnlogin" class="btn btn-danger btn-login" href="index.php?logout=1" role="button">Đăng Xuất</a></div>
            <?php
                }else{
            ?>
                <div><a name="btnlogin" id="btnlogin" class="btn btn-danger btn-login" href="index.php?router=login" role="button">Đăng nhập</a></div>
                <div><a name="btnlogin365" id="btnlogin365" class="btn btn-warning" href="#" role="button">Đăng nhập bằng tài khoản office 365</a></div>
            <?php
                }
            ?>
            </div>
        </div>
    </div>
    <div class="nvbar">
        <nav class="navbar-wrap navbar-expand-sm navbar-dark mw-1400">
            <a class="navbar-brand" href="index.php?router=homepage">Trang chủ</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Xem lịch sử nhận học bổng</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?router=updateDRL">Xem điểm</a>
                    </li>
                    <?php
                        if(isset($_SESSION['login']) && $_SESSION['login'] == 'MQCBK' ){
                    ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?router=statistical">Thống kê</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?router=DuyetHB">Duyệt học bổng</a>
                        </li>
                    
                    <?php
                        }
                    ?>
                    <?php
                        if(isset($_SESSION['login']) && $_SESSION['login'] == 'CTSV' ){
                    ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?router=statistical">Thống kê</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?router=updateDRL">Duyệt điểm rèn luyện</a>
                        </li>
                    
                    <?php
                        }
                    ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?router=notification">Thông báo</a>
                    </li>
                </ul>
                
            </div>
        </nav>
    </div>
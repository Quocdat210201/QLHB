<?php
include "connect.php";
?>
<div class="container" style="margin-left:10px; margin-left: auto; margin-right: auto; margin-top: -50px; width: 100%;">
    <div class="row" style="width: 120%;  margin-bottom: 70px;">
        <form action="DuyetHB_ChiTiet.php" method="GET">
        <input type="hidden" name="xemHK" value="<?php echo $id; ?>" />
            <div class="col-12 col-lg-10">
                <!-- <tr style=" background-color: #053FC9;color: whitesmoke; text-align: center; "> -->

                <table class="table table-bordered" style="width: 90%">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center;">Nội dung đánh giá</th>
                            <th scope="col" style="text-align: center;">Điểm</th>
                            <th scope="col" style="text-align: center;">Chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_get2 = "SELECT `1.1`,`1.2`,`1.3`,`1.4`,`1.5`,`1.6`,`1.7`,`1.8`,`2.1`,`2.2`,`2.3`,`2.4`,`3.1`,`3.2`,`3.3`,`3.4`,`4.1`,`4.2`,`4.3`,`4.4`,`4.5`,`5.1`,`5.2`,`5.3`,`5.4`  FROM `diemrenluyen` drl WHERE drl.maSV = '$id'";
                        $result2 = mysqli_query($conn, $sql_get2);
                        if ($result2) {
                            while ($row = mysqli_fetch_assoc($result2)) {
                                $m11 = $row['1.1'];
                                $m12 = $row['1.2'];
                                $m13 = $row['1.3'];
                                $m14 = $row['1.4'];
                                $m15 = $row['1.5'];
                                $m16 = $row['1.6'];
                                $m17 = $row['1.7'];
                                $m18 = $row['1.8'];
                                $m21 = $row['2.1'];
                                $m22 = $row['2.2'];
                                $m23 = $row['2.3'];
                                $m24 = $row['2.4'];
                                $m31 = $row['3.1'];
                                $m32 = $row['3.2'];
                                $m33 = $row['3.3'];
                                $m34 = $row['3.4'];
                                $m41 = $row['4.1'];
                                $m42 = $row['4.2'];
                                $m43 = $row['4.3'];
                                $m44 = $row['4.4'];
                                $m45 = $row['4.5'];
                                $m51 = $row['5.1'];
                                $m52 = $row['5.2'];
                                $m53 = $row['5.3'];
                                $m54 = $row['5.4'];
                            }
                        } else {
                            die(mysqli_error($conn));
                        }
                        ?>
                        <tr>
                            <td style="font-weight: bold ;">I. Đánh giá về ý thức học tập</td>
                            <td style="text-align: center;">20</td>
                            <td style="text-align: center;">

                            </td>
                        </tr>

                        <tr>
                            <td>- Có đi học chuyên cần, đúng giờ, nghiêm túc trong giờ học; đủ điều kiện dự thi tất cả các học phần</td>
                            <td style="text-align: center;">4</td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m11 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck11" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck11" disabled>';
                                    }
                                    ?>
                                    <label class="custom-control-label" for="customCheck11"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>- Có ý thức tham gia các câu lạc bộ học thuật, các hoạt động học thuật, hoạt động ngoại khóa</p></br>
                                <p>- Có đăng ký, thực hiện, báo cáo đề tài NCKH đúng tiến độ hoặc đăng ký, tham dự kỳ thi sinh viên giỏi các cấp </p>
                            </td>
                            <td style="text-align: center;">
                                <p>2</p></br>
                                <p>2</p>
                            </td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m12 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck12" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck12" disabled>';
                                    }
                                    ?>
                                    <label class="custom-control-label" for="customCheck12"></label>
                                </div>
                                <p></br></p>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m13 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck13" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck13" disabled>';
                                    }
                                    ?>
                                    <label class="custom-control-label" for="customCheck13"></label>
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
                                    <?php if ($m14 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck14" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck14" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck14"></label>
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
                                    <?php if ($m15 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck15" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck15" disabled>';
                                    }
                                    ?>
                                    <label class="custom-control-label" for="customCheck15"></label>
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
                                    <?php if ($m16 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck16" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck16" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck16"></label>
                                </div>
                                <p> </p>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m17 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck17" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck17" disabled>';
                                    }
                                    ?>
                                    <label class="custom-control-label" for="customCheck17"></label>
                                </div>
                                <p> </p>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m18 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck18" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck18" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck18"></label>
                                </div>
                            </td>

                        </tr>

                        <!-- Nội dung chấm II  -->
                        <tr>
                            <td style="font-weight: bold ;">II. Đánh giá về ý thức chấp hành nội quy, quy chế trong nhà trường</td>
                            <td style="text-align: center;">25</td>
                            <td style="text-align: center;">

                            </td>
                        </tr>

                        <tr>
                            <td>- Có ý thức chấp hành các văn bản chỉ đạo của ngành, cấp trên và ĐHĐN được thực hiện trong nhà trường</td>
                            <td style="text-align: center;">6</td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m21 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck21" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck21" disabled>';
                                    }
                                    ?>
                                    <label class="custom-control-label" for="customCheck21"></label>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <p>- Có ý thức tham gia đầy đủ, đạt yêu cầu các cuộc vận động, sinh hoạt chính trị theo chủ trương, của cấp trên, ĐHĐN và nhà trường</p>
                            </td>
                            <td style="text-align: center;">
                                <p>4</p>
                            </td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m22 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck22" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck22" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck22"></label>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <p>- Có ý thức chấp hành nội quy, quy chế và các quy định của nhà trường</p>
                                <p>- Đóng học phí và các khoản thu khác đầy đủ, đúng hạn</p>
                            </td>
                            <td style="text-align: center;">
                                <p>10</p>
                                <p>5</p>
                            </td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m23 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck23" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck23" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck23"></label>
                                </div>
                                <p> </p>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m24 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck24" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck24" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck24"></label>
                                </div>
                            </td>

                        </tr>
                        <!-- Nội dung  chấm III -->
                        <tr>
                            <td style="font-weight: bold ;">III. ĐÁNH GIÁ VỀ Ý THỨC THAM GIA CÁC HOẠT ĐỘNG CHÍNH TRỊ- XÃ HỘI, VHVN, TDTT, PHÒNG CHỐNG TỘI PHẠM VÀ CÁC TỆ NẠN XÃ HỘI</td>
                            <td style="text-align: center;">20</td>
                            <td style="text-align: center;">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>- Tham gia đầy đủ, đạt yêu cầu “ Tuần sinh hoạt công dân sinh viên” đầu khóa năm học và cuối khóa.</p></br>
                                <p>- Có ý thức tham gia đầy đủ, nghiêm túc hoạt động rèn luyện về chính trị, xã hội, văn hóa, văn nghệ, thể thao do nhà trường và ĐHĐN tổ chức, điều động</p>
                            </td>
                            <td style="text-align: center;">
                                <p>10</p></br>
                                <p>6</p>
                            </td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m31 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck31" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck31" disabled>';
                                    }
                                    ?>
                                    <label class="custom-control-label" for="customCheck31"></label>
                                </div>
                                <p></br></p>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m32 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck32" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck32" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck32"></label>
                                </div>

                            </td>

                        </tr>
                        <tr>
                            <td>
                                <p>- Không vi phạm quy chế thi và kiểm tra</p>
                            </td>
                            <td style="text-align: center;">2</td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m33 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck33" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck33" disabled>';
                                    }
                                    ?>
                                    <label class="custom-control-label" for="customCheck33"></label>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <p>- Có ý thức tuyên truyền, phòng chống tội phạm và các tệ nạn xã hội</p>
                            </td>
                            <td style="text-align: center;">2</td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m34 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck34" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck34" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck34"></label>
                                </div>
                            </td>

                        </tr>
                        <!-- Nội dung chấm IV  -->
                        <tr>
                            <td style="font-weight: bold ;">IV. ĐÁNH GIÁ VỀ Ý THỨC CÔNG DÂN TRONG QUAN HỆ VỚI CỘNG ĐỒNG</td>
                            <td style="text-align: center;">25</td>
                            <td style="text-align: center;">

                            </td>

                        </tr>

                        <tr>
                            <td>
                                <p>- Có ý thức chấp hành, tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước</p>
                                <p>- Có ý thức chấp hành, tham gia tuyên truyền các quy định về đảm bảo an toàn giao thông và “văn hóa giao thông”</p>
                                <p>- Có tham gia bảo hiểm y tế ( bắt buộc) theo Luật bảo hiểm y tế.</p>
                            </td>
                            <td style="text-align: center;">
                                <p>4</p>
                                <p>10</p>
                                <p>5</p>
                            </td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m41 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck41" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck41" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck41"></label>
                                </div>
                                <p> </p>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m42 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck42" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck42" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck42"></label>
                                </div>
                                <p> </p>
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m43 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck43" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck43" disabled>';
                                    }
                                    ?>
                                    <label class="custom-control-label" for="customCheck43"></label>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <p>- Có ý thức tham gia các hoạt động xã hội có thành tích được ghi nhận, biểu dương khen thưởng</p>
                            </td>
                            <td style="text-align: center;">4</td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m44 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck44"  disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck44" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck44"></label>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <p>- Có tinh thần chia sẻ, giúp đỡ người gặp khó khăn, hoạn nạn</p>
                            </td>
                            <td style="text-align: center;">2</td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m45 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck45" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck45" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck45"></label>
                                </div>
                            </td>

                        </tr>

                        <!-- Nội dung chấm V -->
                        <tr>
                            <td style="font-weight: bold ;">V. ĐÁNH GIÁ VỀ Ý THỨC VÀ KẾT QUẢ KHI THAM GIA CÔNG TÁC CÁN BỘ LỚP, CÁC ĐOÀN THỂ, TỔ CHỨC TRONG NHÀ TRƯỜNG HOẶC SINH VIÊN ĐẠT ĐƯỢC THÀNH TÍCH TRONG HỌC TẬP, RÈN LUYỆN</td>
                            <td style="text-align: center;">10</td>
                            <td style="text-align: center;">

                            </td>
                        </tr>

                        <tr>
                            <td>- Có ý thức, uy tín và hoàn thành tốt nhiệm vụ quản lý lớp, các tổ chức Đảng, Đoàn Thanh niên, Hội Sinh viên, tổ chức khác trong nhà trường</td>
                            <td style="text-align: center;">2</td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m51 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck51" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck51" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck51"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>- Có kỹ năng tổ chức, quản lý lớp, các tổ chức Đảng, Đoàn Thanh niên, Hội Sinh viên và các tổ chức khác trong nhà trường</p>
                            </td>
                            <td style="text-align: center;">3</td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m52 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck52" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck52" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck52"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>- Hỗ trợ tham gia tích cực vào các hoạt động chung của lớp, tập thể khoa, trường và Đại học Đà Nẵng</p>
                            </td>
                            <td style="text-align: center;">2</td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m53 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck53" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck53" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck53"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>- Đạt thành tích trong học tập, rèn luyện (được tặng bằng khen, giấy khen, chứng nhận, thư khen của các cấp)</p>
                            </td>
                            <td style="text-align: center;">3</td>
                            <td style="text-align: center;">
                                <div class="custom-control custom-checkbox">
                                    <?php if ($m54 != 0) {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck54" disabled checked>';
                                    } else {
                                        echo '<input type="checkbox" class="custom-control-input" id="customCheck54" disabled>';
                                    }
                                    ?>

                                    <label class="custom-control-label" for="customCheck54"></label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <input type="submit" class="btn btn-secondary" style="margin-left: 13%; width: 12%;" disabled value="Xem DRL">
            <input type="submit" class="btn btn-primary" style="margin-left: 13%; width: 12%;" value="Xem điểm Học Kì">
        </form>
    </div>
</div>
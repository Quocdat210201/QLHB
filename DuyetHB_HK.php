<?php
include "connect.php";
$idhk = $_GET['xemHK'];
?>
<div class="container" style="margin-left:10px; margin-left: auto; margin-right: auto;">
    <div class="row">
        <form action="DuyetHB_ChiTiet.php" method="GET">
            <input type="hidden" name="updateid" value="<?php echo $idhk; ?>" />
            <div class="col-12 col-lg-10">
                <table class="table table-striped" style="width:150%">
                    <thead>
                        <tr style=" background-color: #053FC9;color: whitesmoke; text-align: center; ">
                            <th scope="col">Mã Học Phần</th>
                            <th scope="col">Tên Học Phần</th>
                            <th scope="col">Điểm TK</th>
                            <th scope="col">Điểm Chữ</th>
                            <th scope="col">Số Tín Chỉ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $sql_diem = "SELECT d.maHP, hp.tenHP, d.diem,d.diemchu,d.soTC  FROM `diem` d, `hocphan` hp WHERE d.maHP = hp.maHP and d.maSV = '$idhk'";
                        $result = mysqli_query($conn, $sql_diem);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $maHP = $row['maHP'];
                                $tenHP = $row['tenHP'];
                                $diem = $row['diem'];
                                $diemchu = $row['diemchu'];
                                $soTC = $row['soTC'];

                                echo '<tr>
                                <td style="text-align: center ;" scope="row">'.$maHP.'</td>
                                <td style="font-weight: bold    ;">'.$tenHP.'</td>
                                <td style="color: red; text-align: center;">'.$diem.'</td>
                                <td style="color: red; text-align: center;">'.$diemchu.'</td>
                                <td style="color: red; text-align: center;">'.$soTC.'</td>
                            </tr>';
                            }
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>
            <input type="submit" class="btn btn-primary" style="margin-left: 30%; width: 23%;" value="Xem điểm rèn luyện">
            <input type="submit" class="btn btn-secondary" style="margin-left: 10%; width: 20%;" disabled value="Xem điểm Học Kì">
        </form>
    </div>
</div>
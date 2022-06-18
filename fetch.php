<?php 

    require_once('../QLHBProject/');

if (isset($_POST['request'])) {
    $request = $_POST['request'];

    $query = "SELECT maDS,ds.maSV,sv.tenSV,hb.tenHB,xl.tenXL,xl.tiennhan,DATE_FORMAT(ngayduyet,'%d/%m/%Y') as ngayduyet, ds.trangthaiduyet FROM `dsdudieukien` ds, `sinhvien` sv,`loaihocbong` hb,`xeploai` xl WHERE ds.maSV = sv.maSV and ds.maHB = hb.maHB and ds.maXL = xl.maXL and trangthaiduyet = 1 and hb.tenHB = '$request'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
}
?>

<table class="table table-striped" style="width:190%">
    <?php
    if (isset($count)) {
    ?>
        <thead>
            <tr style=" background-color: #053FC9;color: whitesmoke; text-align: center; ">
                <th scope="col">STT</th>
                <th scope="col">Mã sinh viên</th>
                <th scope="col">Tên sinh viên</th>
                <th scope="col">Loại học bổng</th>
                <th scope="col">Xếp loại HB</th>
                <th scope="col">Số tiền nhận</th>
                <th scope="col">Ngày duyệt</th>
                <th scope="col">Trạng thái duyệt</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>

        <?php
    } else {
        echo "Không tìm thấy";
    }
        ?>
        </thead>
        <tbody>
            <?php
            $stt = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $stt++;
                $maHB = $row['maDS'];
                $maSV = $row['maSV'];
                $tenSV = $row['tenSV'];
                $hb = $row['tenHB'];
                $xl = $row['tenXL'];
                $tien = $row['tiennhan'];
                $ngayduyet = $row['ngayduyet'];
                $tien = number_format($tien);

                echo '<tr>
                                <td style="text-align: center ;" scope="row">' . $stt . '</td>
                                <td style="text-align: center ;">' . $maSV . '</td>
                                <td style="font-weight: bold    ;">' . $tenSV . '</td>
                                <td style="font-weight: bold    ;">' . $hb . '</td>
                                <td style="font-weight: bold    ;">' . $xl . '</td>
                                <td style="font-weight: bold    ;">' . $tien . '</td>
                                <td style="font-weight: bold    ;">' . $ngayduyet . '</td>
                                <td style="font-weight: bold    ; color: #0000cc;">Đã duyệt</td>
                                <td style="color: red; text-align: center;"><a href="deleteDuyetHB.php?deleteid=' .  $maHB . '" style="color: red;">Hủy kết quả</a></td>
                                <td style="font-style: italic; color: blue; text-align: center;"><a href="DuyetHB_ChiTiet.php?updateid=' .  $maSV . '">Xem chi tiết</a></td>
                                <td style="font-style: italic; color: blue; text-align: center;"><a href="DuyetHB_Rieng.php?updatehb2=' .  $maSV . '"><button type="button" class="btn btn-outline-danger" >Xóa Duyệt</button></a> </td>
                                </tr>';
            }
            ?>
        </tbody>
</table>
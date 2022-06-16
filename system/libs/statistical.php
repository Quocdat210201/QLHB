<?php
    $sql_selectall = "SELECT * FROM DSDatHB, SinhVien Where DSDatHB.maSV = SinhVien.maSV ";
    $query_selectall = mysqli_query($con, $sql_selectall);
?>

<script>
    $(document).ready(function () {
  $('#dtDynamicVerticalScrollExample').DataTable({
    "scrollY": "50vh",
    "scrollCollapse": true,
  });
  $('.dataTables_length').addClass('bs-select');
});
</script>
<style>
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
    bottom: .5em;
    }
</style>
<div class="wrappercl">
    <div class="combox">
        <form action="" method="POST">
            <select name="lopOption">
                <option value="2.0 or higher"> Lớp </option>
                <?php
                        $sql_lop = "select * from Lop";
                        $result = mysqli_query($con, $sql_lop);
                        while ($rows = $result->fetch_assoc()) {
                    ?>
                    
                        <option value="<?php echo $rows['maLop']; ?>"><?php echo $rows['tenLop']; ?></option>
                    <?php
                        }
                    ?>
            </select>
            <select name="khoaOption">
                <option value="2.0 or higher"> Khoa </option>
                <?php
                    $sql_khoa = "select * from Khoa";
                    $result = mysqli_query($con, $sql_khoa);
                    while ($rows = $result->fetch_assoc()) {
                ?>
                
                    <option value="<?php echo $rows['maKhoa']; ?>"><?php echo $rows['tenKhoa']; ?></option>
                <?php
                    }
                ?>
            </select>
            <select name="xeploaiOption">
                <option value="2.0 or higher"> Xếp loại </option>
                <?php
                    $sql_xl = "select * from XepLoai";
                    $result = mysqli_query($con, $sql_xl);
                    while ($rows = $result->fetch_assoc()) {
                ?>
                
                    <option value="<?php echo $rows['maXL']; ?>"><?php echo $rows['tenXL']; ?></option>
                <?php
                    }
                ?>
            </select>
            <select name="tenhocbongOption">
                <option value="2.0 or higher"> Tên học bổng </option>
                <?php
                    $sql_hb = "select * from LoaiHocBong";
                    $result = mysqli_query($con, $sql_hb);
                    while ($rows = $result->fetch_assoc()) {
                ?>
                
                    <option value="<?php echo $rows['maHB']; ?>"><?php echo $rows['tenHB']; ?></option>
                <?php
                    }
                ?>
            </select>
            <input type="button" id="btntk" name="thongke" value="Thống kê">
        </form>
    </div>
        <div class="container-wrap">
            <div class="row">
                <div class="col-12 col-lg-10">
                <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">STT </th>
                            <th class="th-sm">Mã sinh viên </th>
                            <th class="th-sm">Họ và tên </th>
                            <th class="th-sm">Lớp </th>
                            <th class="th-sm">Số tiền </th>
                            <th class="th-sm">Ngày nhận  </th>
                            <th class="th-sm">Tên học bổng </th>
                            <th class="th-sm">Số lần nhận </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0;
                            while($row = mysqli_fetch_array($query_selectall)){
                                $i++;
                        ?>
                            <tr>
                            <td><?php echo $i ?></td>
                            <td> <?php echo $row['maSV'] ?></td>
                            <td> <?php echo $row['tenSV'] ?></td>
                            <td><?php echo $row['maLop'] ?></td>
                            <td><?php echo number_format($row['money']).'đ'; ?></td>
                            <td><?php echo $row['ngaynhan'] ?></td>
                            <td><?php echo $row['maHB'] ?></td>
                            <td><?php echo $row['soLan'] ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                </div>
            </div>
        
            <div class="chart">

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

<?php
include "template/header.php"
?>
    <main>
        <div class="container">
            <h3 class="text-center mt-5 text-primary display-6">Giảng Viên Đại Học Thủy Lợi</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã giảng viên</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col" > Ngày sinh</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Trình độ</th>
                        <th scope="col" > Chuyên môn</th>
                        <th scope="col">Học hàm</th>
                        <th scope="col"> Học vị</th>
                        <th scope="col"> Cơ quan/Đơn vị </th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- kết nối vói cơ sở dữ liệu -->
                    <?php
                        $conn = mysqli_connect('localhost','root','','1951061107_daihocthuyloi');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT * FROM giangvien";
                        $result = mysqli_query($conn,$sql);
                    // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                            <tr>
                                <th scope="row"><?php echo $row['magv']; ?></th>
                                <td><?php echo $row['hovaten']; ?></td>
                                <td><?php echo $row['ngaysinh']; ?></td>
                                <td><?php echo $row['gioitinh']; ?></td>
                                <td><?php echo $row['trinhdo']; ?></td>
                                <td><?php echo $row['chuyenmon']; ?></td>
                                <td><?php echo $row['hocham']; ?></td>
                                <td><?php echo $row['hocvi']; ?></td>
                                <td><?php echo $row['coquan']; ?></td>
                                <td><a href="sua_nhan_vien.php?id=<?php echo $row['magv']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="xoa_nhan_vien.php?id=<?php echo $row['magv']; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                <?php
                        }
                    }
                ?>        
                </tbody>
                        </table>
            </table>
</main> 
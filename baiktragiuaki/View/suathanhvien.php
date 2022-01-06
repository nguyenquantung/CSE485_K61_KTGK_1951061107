<?php include("template/header.php");?>

    <main>
        <div class="container">
        <h5 class="text-center text-primary mt-5">Sửa Thông Tin Giảng Viên</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="" method="POST">
            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="hovaten" value="<?php echo $da placeholder="Nhập họ tên">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtngaysinh">Ngày Sinh</label>
                <input type="text" class="form-control" id="txtChucVu" name="ngaysinh" placeholder="Nhập Ngày Sinh">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtgioitinh">Giới tính</label>
                <input type="tel" class="form-control" id="txtgioitinh" name="gioitinh" placeholder="Nhập Giới tính">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txttrinhdo"> Trình độ</label>
                <input type="text" class="form-control" id="txttrinhdo" name="trinhdo" placeholder="Nhập Trình độ">
                
            </div>
            <div class="form-group">
                <label for="txtchuyenmon"> Chuyên môn</label>
                <input type="text" class="form-control" id="txtchuyenmon" name="chuyenmon" placeholder="Nhập Chuyên môn">
               
            </div>
            <div class="form-group">
                <label for="txthocham"> Học hàm</label>
                <input type="text" class="form-control" id="txthocham" name="hocham" placeholder="Học hàm">
                
            </div>
            <div class="form-group">
                <label for="txthocvi"> Học vị</label>
                <input type="text" class="form-control" id="txthocvi" name="hocvi" placeholder="Học vị">
                
            </div>
            <div class="form-group">
                <label for="txtcoquan">  Cơ quan/Đơn vị </label>
                <input type="text" class="form-control" id="txtcoquan" name="coquan" placeholder=" Cơ quan/Đơn vị">
            </div>
            <button type="submit" name="add_user" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
        </div>
    </main>
    <?php
        if(isset($thanhcong)&& in_array('add_success',$thanhcong)){
          echo "thêm thành công";
        }
    ?>
   
   
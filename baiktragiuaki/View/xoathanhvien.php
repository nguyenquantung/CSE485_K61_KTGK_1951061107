<?php
    include"template/header.php";
      // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $magv = $_GET['magv'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','1951061107_daihocthuyloi');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM giangvien WHERE magv = '$magv'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: index.php?controller=thanh-vien&action=list"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>
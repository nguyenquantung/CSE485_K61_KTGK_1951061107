<?php
 if(isset($_GET['action'])){
     $action = $_GET['action'];
 }
 else{
     $action='';
 }

 $thanhcong = array();
 switch($action){
     case 'add':{
         if(isset($_POST['add_user'])){
             $hovaten= $_POST['hovaten'];
             $ngaysinh = $_POST['ngaysinh'];
             $gioitinh = $_POST ['gioitinh'];
             $trinhdo =$_POST ['trinhdo'];
             $chuyenmon =$_POST ['chuyenmon'];
             $hocham=$_POST['hocham'];
             $hocvi=$_POST['hocvi'];
             $coquan=$_POST['coquan'];

             if($db->InsertData($hovaten, $ngaysinh, $gioitinh, $trinhdo, $chuyenmon, $hocham, $hocvi, $coquan)){
                $thanhcong[] = 'add_success';
             }
         }
         require_once('View/themthanhvien.php');
         break;
     }

     case 'edit':{
         if(isset($_GET['magv'])){
             $magv = $_GET['magv'];
            $tblTable = "giangvien";
             $db->getDataid($tblTable, $magv);
            }
         require_once('View/suathanhvien.php');
        break;
     }
     case 'delete':{
        require_once('View/xoathanhvien.php');
        break;
    }
    case 'list':{
        require_once('View/hienthi.php');
        break;
    }
    default:{
        require_once('View/hienthi.php');
        break;
    }
}

?>
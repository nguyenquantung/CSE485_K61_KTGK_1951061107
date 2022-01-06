<?php   
    class Database{
        private $hostname = 'localhost';
        private $username = 'root';
        private $pass='';
        private $dbname ='1951061107_daihocthuyloi';

        private $conn=NULL;
        private $result = NULL;

        public function connect(){
            $this -> conn = new mysqli($this ->hostname, $this -> username, $this ->pass,$this ->dbname);
            if (!$this->conn){
                echo "kết nối thất bại";
                exit();
            }
            else{
                mysqli_set_charset($this->conn, 'utf8');
            }
            return $this->conn;
        }
        //chạy truy vấn
        public function execute($sql){
            $this->result = $this->conn->query($sql);
            return $this->result;
        }


        //phương thức lấy dữ liệu
        public function getData(){
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
        }
        //lấy dữ liệu cần sửa
        public function getDataid($table, $magv){
            $sql = "SELECT*FROM $table Where magv = '$magv'";
            $this->execute($sql);
            if($this->num_rows()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
        }
        
        //phương thức thêm
        public function InsertData($hovaten,$ngaysinh,$gioitinh,$trinhdo,$chuyenmon,$hocham,$hocvi,$coquan){
            $sql = "INSERT INTO giangvien(magv, hovaten, ngaysinh, gioitinh, trinhdo, chuyenmon, hocham, hocvi, coquan )VALUES(null, '$hovaten', '$ngaysinh','$gioitinh', '$trinhdo', '$chuyenmon', '$hocham', '$hocvi', '$coquan')";
            return  $this->execute($sql);

        }

        //phương thức sửa
        public function UpdateData($hovaten,$ngaysinh,$gioitinh,$trinhdo,$chuyenmon,$hocham,$hocvi,$coquan){
            $sql = "UPDATE giangvien SET hovaten='$hovaten', ngaysinh='$ngaysinh', gioitinh='$gioitinh', trinhdo='$trinhdo', chuyenmon='$chuyenmon', hocham='$hocham', hocvi='$hocvi', coquan='$coquan' WHERE magv = '$magv'";
            return $this->execute($sql);
        }
            

        //xóa
        public function DeltelData($magv){
            $sql = "DELETE FROM giangvien WHERE magv = '$magv'";
            return $this->execute($sql);
            }
    }
?>
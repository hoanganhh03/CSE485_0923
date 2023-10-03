<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class QuanLyBaiHatService {
        private $conn;
    
        public function __construct($conn) {
            $this->conn = $conn;
        }
    
        public function themTheLoai($tenTheLoai) {
            $query = "INSERT INTO TheLoai (tenTheLoai) VALUES ('$tenTheLoai')";
            $this->conn->query($query);
        }
    
        public function themBaiHat($tenBaiHat, $caSi, $idTheLoai) {
            $query = "INSERT INTO BaiHat (tenBaiHat, caSi, idTheLoai) VALUES ('$tenBaiHat', '$caSi', $idTheLoai)";
            $this->conn->query($query);
        }
    
        public function layDanhSachTheLoai() {
            $query = "SELECT * FROM TheLoai";
            $result = $this->conn->query($query);
            $danhSachTheLoai = array();
            while ($row = $result->fetch_assoc()) {
                $theLoai = new TheLoai($row['id'], $row['tenTheLoai']);
                $danhSachTheLoai[] = $theLoai;
            }
            return $danhSachTheLoai;
        }
    
        public function layDanhSachBaiHat() {
            $query = "SELECT * FROM BaiHat";
            $result = $this->conn->query($query);
            $danhSachBaiHat = array();
            while ($row = $result->fetch_assoc()) {
                $baiHat = new BaiHat($row['id'], $row['tenBaiHat'], $row['caSi'], $row['idTheLoai']);
                $danhSachBaiHat[] = $baiHat;
            }
            return $danhSachBaiHat;
        }
    
        // Các phương thức khác để xóa, sửa thông tin, ...
    }
    
    class TheLoai {
        public $id;
        public $tenTheLoai;
    
        public function __construct($id, $tenTheLoai) {
            $this->id = $id;
            $this->tenTheLoai = $tenTheLoai;
        }
    }
    
    class BaiHat {
        public $id;
        public $tenBaiHat;
        public $caSi;
        public $idTheLoai;
    
        public function __construct($id, $tenBaiHat, $caSi, $idTheLoai) {
            $this->id = $id;
            $this->tenBaiHat = $tenBaiHat;
            $this->caSi = $caSi;
            $this->idTheLoai = $idTheLoai;
        }
    }
    ?>
    
</body>
</html>
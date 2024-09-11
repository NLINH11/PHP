<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    const DB_TYPE='mysql';
    const DB_HOST='localhost';
    const DB_NAME="quanlisanpham";
    const USER_NAME="root";
    const USER_PASSWORD="";

   // Tạo chuỗi DSN để kết nối cơ sở dữ liệu
$dsn = DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME;

try {
    // Tạo kết nối PDO
    $connect = new PDO($dsn, USER_NAME, USER_PASSWORD);
    
    // Thiết lập chế độ báo lỗi
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Kết nối thành công!";
} catch (PDOException $e) {
    echo "Lỗi kết nối: " . $e->getMessage();
}


// Thêm dữ liệu vào bảng nhân viên
function Nhanvien($MaNV, $HoTen, $GioiTinh, $NgaySinh) {
    global $connect;
    try {
        $sql = "INSERT INTO Nhanvien (MaNV, HoTen, GioiTinh, NgaySinh) 
                VALUES (:MaNV, :HoTen, :GioiTinh, :NgaySinh)";
        $stmt = $connect->prepare($sql);

        // Gán giá trị cho các tham số
        $stmt->bindParam(':MaNV', $MaNV);
        $stmt->bindParam(':HoTen', $HoTen);
        $stmt->bindParam(':GioiTinh', $GioiTinh);
        $stmt->bindParam(':NgaySinh', $NgaySinh);

        // Thực thi câu lệnh
        $stmt->execute();
        echo "Dữ liệu đã được thêm thành công!";
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
Nhanvien('1', 'Nguyen van a', '0', '1990-05-05');
Nhanvien('2', 'Tran thi b', '1', '1995-02-02');


 // Cập nhật dữ liệu cho nhân viên
 function updateNhanvien($MaNV, $newName) {
    global $connect;
    try {
        $sql = "UPDATE nhanvien SET HoTen = :HoTen WHERE MaNV = :MaNV";
        $stmt = $connect->prepare($sql);

        // Gán giá trị cho các tham số
        $stmt->bindParam(':HoTen', $newName);
        $stmt->bindParam(':MaNV', $MaNV);

        // Thực thi câu lệnh
        $stmt->execute();
        echo "Dữ liệu đã được cập nhật thành công!";
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}

// Cập nhật tên nhân viên có MaNV='2'
updateNhanvien('2', 'Trần Thị Lan');

 // Xóa dữ liệu của nhân viên
 function deleteNhanvien($MaNV) {
    global $connect;
    try {
        $sql = "DELETE FROM nhanvien WHERE MaNV = :MaNV";
        $stmt = $connect->prepare($sql);

        // Gán giá trị cho tham số
        $stmt->bindParam(':MaNV', $MaNV);

        // Thực thi câu lệnh
        $stmt->execute();
        echo "Dữ liệu đã được xóa thành công!";
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
 }
  // Xóa nhân viên có MaNV='1'
  deleteNhanvien('1');


// Hàm hiển thị thông tin nhân viên
function thongtinnhanvien($MaNV) {
    global $connect;
    try {
        $sql = "SELECT * FROM nhanvien WHERE MaNV = :MaNV";
        $stmt = $connect->prepare($sql);
        
        // Gán giá trị cho tham số
        $stmt->bindParam(':MaNV', $MaNV);

        // Thực thi câu lệnh
        $stmt->execute();

        // Lấy dữ liệu
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            echo "<h3>Thông tin nhân viên:</h3>";
            echo "Mã nhân viên: " . htmlspecialchars($result['MaNV']) . "<br>";
            echo "Họ tên: " . htmlspecialchars($result['HoTen']) . "<br>";
            echo "Giới tính: " . htmlspecialchars($result['GioiTinh']) . "<br>";
            echo "Ngày sinh: " . htmlspecialchars($result['NgaySinh']) . "<br>";
        } else {
            echo "Không tìm thấy nhân viên với mã nhân viên: " . htmlspecialchars($MaNV);
        }
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}

// Hiển thị thông tin của nhân viên có MaNV='2'
thongtinnhanvien('2');

     ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $username="root";
    $password="";
    $server="localhost";
    $dbname="quanlisanpham";
    // kết nối với database
    $connect= new mysqli($server,$username,$password,$dbname);

  /*  

// Thêm dữ liệu vào bảng hang
$sql = "INSERT INTO hang(Mahang, Tenhang, Dongia, Soluong)
VALUES (1,'ao','200000',2),
       (2, 'quan','300000',4),
       (3, 'khan mat', '50000',3)";
// Thực thi câu lệnh SQL
if ($connect->query($sql) === TRUE) {
echo "Dữ liệu đã được thêm thành công.<br>";
}   else {
echo "Lỗi: " . $connect->error;
}                                                             */
echo"Thêm dữ liệu vào bảng<br>";
echo"<img src='img3/thêm dữ liệu.png'><br>";       


    
// Cập nhật dữ liệu bảng hang
$s="UPDATE hang SET Dongia= 40000, Soluong=5 WHERE 'Mahang' = 3";
    // Thực thi câu lệnh SQL
if ($connect->query($s) === TRUE) {
    echo "Dữ liệu đã được cập nhật thành công.<br>";
} else {
    echo "Lỗi: " . $connect->error;
}
echo"<img src='img3/update.png'><br>";



// Xoá dữ liệu trong bảng
$x="DELETE hang WHERE 'Mahang'=3";    
if ($connect->query($s) === TRUE) {
    echo "Xóa thành công.<br>";
} else {
    echo "Lỗi: " . $connect->error;
}
echo"<img src='img3/delete.png'><br>";    


// Hiển thị dữ liệu

echo"<b>In dữ liệu ra màn hình</b><br>";
$y="SELECT * FROM hang";
$ketqua=$connect->query($y);
   // Nếu kết quả không được thì báo lỗi và thoát
   if(!$ketqua){
    die("Không thể thực hiện câu lệnh sql:".$connect->connect_error);
    exit();
   }

   while ($row=$ketqua->fetch_array(MYSQLI_ASSOC)){
     echo"<p>Mahang:".$row['Mahang']."</p>";
     echo"<p>Tenhang:".$row['Tenhang']."</p>";
     echo"<p>Dongia:".$row['Dongia']."</p>";
     echo"<p>Soluong:".$row['Mahang']."</p>";
     echo"<hr>";
   }



     ?>
</body>
</html>
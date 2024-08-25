<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyễn Thị Ngọc Linh</title>
</head>
<body bgcolor="beige">
    <center><p>Họ và tên: Nguyễn Thị Ngọc Linh</p></center>
    <center><p>Mã sinh viên: 22D192047</p></center>

    <?php
    //1.Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen()
    echo"Câu 1: ";
    echo strlen("Nguyen Thi Ngoc Linh");
    echo"<br>";
     ?>

     <?php
     //2.Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
     echo"Câu 2: ";
     echo str_word_count("Nguyen Thi Ngoc Linh");
     echo"<br>";
     ?>

     <?php
     //3.Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
     echo"Câu 3: ";
     echo strrev("NgocLinh");
     echo"<br>";
     ?>

     <?php
     //4.Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
     echo"Câu 4: ";
     echo strpos("Nguyen Thi Ngoc Linh", "Linh");
     echo"<br>";
     ?>

     <?php
     //5.Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
     echo"Câu 5: ";
     echo str_replace("Linh","Hà","Nguyễn Ngọc Linh");
     echo"<br>";
     ?>

     <?php
     //6.Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
     echo"Câu 6: ";
     $str1 = "ngoclinh.edu.vn";
     $str2 = "ngoclinh";
     if((strncmp($str1, $str2, "4"))===0){
        echo"Chuỗi bắt đầu bằng một chuỗi con khác!";
     }
     else{
        echo"Chuỗi không bắt đầu bằng một chuỗi con khác!";
     }
     echo"<br>";
     ?>

     <?php
     //7.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper()
     echo"Câu 7: ";
     echo strtoupper("ngoc linh");
     echo"<br>";
     ?>

     <?php
     //8.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
     echo"Câu 8: ";
     echo strtolower("NGUYEN NGOC TUAN ANH");
     echo"<br>";
     ?>

     <?php
     //9.Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
     echo"Câu 9: ";
     echo ucwords("nguyễn thị ngọc linh");
     echo"<br>";
     ?>

     <?php
     //10.Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
     echo"Câu 10: ";
     echo trim("        Hellooooooooooo Ngọc Linh!");
     echo"<br>";
     ?>

     <?php
     //11.Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()
     // CÁCH 1:
     echo"Câu 11: ";
     echo ltrim("Ngọc Linh","N");
     echo"<br>";
     ?>

    <?php
     //11.Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()
     // CÁCH 2:
     echo"Câu 11: ";
     $str="Ngọc Linh";
     echo "Chuỗi sau khi loại bỏ kí tự đầu tiên là: ".ltrim($str,$str[0]);
     echo"<br>";
     ?>

    <?php
    //12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
    echo"Câu 12: ";
    $x="Ngọc Linh";
    echo rtrim($x,$x[-1]);
    echo"<br>";
    ?>

    <?php
    //13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
    echo"Câu 13: ";
    $chuoi="mận, táo, ổi";
    $mang= explode(",",$chuoi);
    print_r ($mang);
    echo"<br>";
    ?>

    <?php
    //14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
    echo"Câu 14: ";
    $ten=array("Ngọc Linh","Tuấn Anh","Nguyễn Ngọc");
    $chuoi=implode(" ",$ten);
    echo $chuoi;
    echo"<br>";
    ?>

    <?php
    // 15.Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
    echo"Câu 15: ";
    $str1="Chao ngay moi";
    $str2="Chao buoi sang";
    echo"Thêm một chuỗi vào đầu một chuỗi khác khi sử dụng hàm str_pad: ".str_pad($str1,23,"Ngoc Linh ", STR_PAD_LEFT);
    echo"<br>";
    echo"Thêm một chuỗi vào cuối một chuỗi khác khi sử dụng hàm str_pad: ".str_pad($str2,24," Ngoc Linh", STR_PAD_RIGHT);
    echo"<br>";
    ?>

    <?php
    //16.Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
    echo"Câu 16: ";
    $str1="Chao mung ban den voi";
    $char="Linh";
    if(strrchr($str1,$char)===$char){
        echo"Chuỗi kết thúc bằng chuỗi con khác!";
    }
    else{
        echo"Chuỗi không kết thúc bằng chuỗi con khác!";
    }
    echo"<br>";
    ?>

    <?php
    //17.Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
    echo"Câu 17: ";
    $str1="Ngay moi vui ve!!!";
    $str2="v";
    if(strstr($str1,$str2)){
        echo"Chuỗi có chứa một chuỗi con khác!";
    }
    else{
        echo"Chuỗi không chứa một chuỗi con khác!";
    }
    echo"<br>";
    ?>


    <?php
    //18.Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()
    echo"Câu 18: ";
    $str1="!@#$%^&NgocLinh65@#%%";
    echo preg_replace("/\W+/","_",$str1);
    echo"<br>";
   ?>

   <?php
   //19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
   echo"Câu 19: ";
   $x=34;
   if(is_int($x)){
    echo"Biến x thuộc kiểu số nguyên";
   }
   else{
    echo"Biến x không thuộc kiểu số nguyên";
   }
   echo"<br>";
   ?>

   <?php
   // 20.Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()
   echo"Câu 20: ";
   $str1="ngoclinhnguyen@gmail.com";
   $str2="ngoclinhnguyen";
   if(filter_var($str2, FILTER_VALIDATE_EMAIL)){
    echo"Email hợp lệ!";
   }
   else{
    echo"Email không hợp lệ!";
   }
   ?>


</body>
</html>
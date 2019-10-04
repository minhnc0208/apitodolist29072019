<?php

// 1 Khai báo biến

// 2 Toán tử

//3 Câu điều kiện

//4 Vòng lặp
//5 Object method
//6 Array method
//7 OOP
//8 Xu ly file
 $hostname = "localhost";
 $username = "root"
 $password = "";
 $database ="quanlycongviec29072019";
 $con = mysqli_connect($hostname,$username,$password);
 if(mysqli_connect_erro()){
     echo "Loi" . mysqli_connect_erro();

 }else{
     echo"Thanh cong";
 }

?>
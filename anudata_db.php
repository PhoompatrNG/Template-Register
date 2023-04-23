<?php
include 'condb.php';

//ส่วนระบบ Register
//ตัวแปร
$day  = $_POST['day'];
$number  = $_POST['number'];
$data = $_POST['dat'];
$get   = $_POST['get'];
$price = $_POST['pri'];
$location   = $_POST['loc'];
$dayedit   = $_POST['edit'];
$note   = $_POST['note'];
$status   = $_POST['sta'];

//เช็คข้อมูลซ้ำ
$mysqlcheck = "SELECT * FROM data1 WHERE itemcode = '$number' ";
$row =mysqli_fetch_assoc(mysqli_query($conn,$mysqlcheck));

if($row){
    if($row['itemcode'] === $number){
        mysqli_close($conn);
        echo "<script> alert('ซ้ำ'); </script> " ;
        echo "<script> window.location= 'anudata.php' ; </script>";
    }
}

//กรอกข้อมูล
$mysql = "INSERT INTO data1(day,itemcode,detail,get1,price,location,edit,note,status) 
Values('$day','$number','$data','$get','$price','$location','$dayedit','$note','$status') ";
$result = mysqli_query($conn,$mysql);

    if($result){
        echo "<script> alert('เรียบร้อย'); </script> " ;
        echo "<script> window.location= 'anudata.php' ; </script>";
    }

mysqli_close($conn);

?>
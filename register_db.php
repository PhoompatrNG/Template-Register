<?php
include 'condb.php';

//ส่วนระบบ Register
//ตัวแปร
$username = $_POST['username'];
$password = $_POST['password'];
$name     = $_POST['firstname'];
$name2    = $_POST['lastname'];


//เข้ารหัส password(sha512)
$password=hash('sha512',$password);

//เช็คข้อมูลซ้ำ
$mysqlcheck = "SELECT * FROM 1user WHERE username = '$username' ";
$query = mysqli_query($conn,$mysqlcheck);
$row =mysqli_fetch_assoc($query);

if($row){
    if($row['username'] === $username){
        mysqli_close($conn);
        echo "<script> alert('ซ้ำ'); </script> " ;
        echo "<script> window.location= 'register.php' ; </script>";
    }
}

//กรอกข้อมูล
$mysql = "INSERT INTO 1user(username,password,firstname,lastname,userlevel) 
Values('$username','$password','$name','$name2','member') ";
$result = mysqli_query($conn,$mysql);

    if($result){
        echo "<script> alert('เรียบร้อย'); </script> " ;
        echo "<script> window.location= 'login.php' ; </script>";
    }

mysqli_close($conn);

?>
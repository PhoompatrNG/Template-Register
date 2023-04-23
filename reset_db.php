<?php 
//Reset_password
include 'condb.php';
session_start();
//ส่วนระบบ Reset
//ตัวแปร
$username = $_POST['username'];
$password = $_POST['password'];
$passwordnew = $_POST['passwordnew'];


//เข้ารหัส password(sha512)
$password=hash('sha512',$password);
$passwordnew=hash('sha512',$passwordnew);


//เช็คข้อมูล
$mysql = "SELECT * FROM 1user WHERE username = '$username' and password = '$password' ";
$result = mysqli_query($conn,$mysql);
$row = mysqli_fetch_array($result);


if($row > 0){
    $_SESSION["username"] =$row['username'];
    $_SESSION["password"] =$row['password'];
//Update password
    $mysql = "UPDATE 1user SET password='$passwordnew' WHERE username = '$username'";
    if(mysqli_query($conn, $mysql)){
        echo "<script> alert('เรียบร้อย'); </script> " ;
        echo "<script> window.location= 'login.php' ; </script>";
    }

}else{
        echo "<script> alert('รหัสผิด'); </script> " ;
        echo "<script> window.location= 'reset.php' ; </script>";
}
echo $show;

?>
<!-- ส่วนระบบ Login -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include 'condb.php';
session_start();

//ตัวแปร
$username =$_POST['username'];
$password =$_POST['password'];
$member   = 'admin';

//เข้ารหัส password(sha512)
$password=hash('sha512',$password);

//เช็ค Username and password
$mysql = "SELECT * FROM 1user WHERE username = '$username' and password = '$password' ";
$result = mysqli_query($conn,$mysql);
$row = mysqli_fetch_array($result);



if($row > 0){
    $_SESSION["username"] =$row['username'];
    $_SESSION["password"] =$row['password'];
    
//เก็บ SESSION
    $_SESSION["firstname"] =$row['firstname'];
    $_SESSION["lastname"] =$row['lastname'];
    $_SESSION["userlevel"] =$row['userlevel'];
    $_SESSION["id"] =$row['id'];
    $show = header("location: index.php");
    

    /*if($username === $member){
        $show = header("location: data/user_db.php");
    }*/
}else{
    //$_SESSION["Error"] = "<p> ไม่ถูกต้อง </p>";
    $show = header("location: login.php");
}
echo $show;

?>

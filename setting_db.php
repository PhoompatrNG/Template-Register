<?php
include 'condb.php';
session_start();
//ส่วนระบบ Reset
//ตัวแปร
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$id = $_SESSION['username'];
//$member = 'admin';

//ตรวจสอบ SESSION and Update
if($_SESSION['username'] === $id){
    $mysql = "UPDATE 1user SET firstname='$firstname',
    lastname='$lastname' WHERE username = '$id'";
    if(mysqli_query($conn, $mysql)){
        echo "<script> alert('เรียบร้อย'); </script> " ;
        echo "<script> window.location= 'setting.php' ; </script>";
        //ให้สิทAdmin เมื่อแก้ไข
        /*if($_SESSION['userlevel'] === $member){
            $mysql = "UPDATE 1user SET userlevel='$member'
            WHERE username = '$id'";
            if(mysqli_query($conn, $mysql)){
                echo "<script> alert('เรียบร้อย'); </script> " ;
                echo "<script> window.location= 'setting.php' ; </script>";
                
            }
        }*/

    }
}
?>
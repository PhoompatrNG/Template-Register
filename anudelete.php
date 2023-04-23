<?php 
    include 'condb.php';
    session_start();
//ลบข้อมูล
    $id = $_GET['id'];
    $mysql = "DELETE FROM data1 WHERE number =$id";
    if (mysqli_query($conn, $mysql)) {
        echo "<script> alert('เรียบร้อย'); </script> " ;
        echo "<script> window.location= 'anudata.php' ; </script>";
    }
?>
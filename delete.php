<?php 
    include 'condb.php';
    session_start();
//ลบข้อมูล
    $id = $_GET['id'];
    $mysql = "DELETE FROM 1user WHERE id=$id";
    if (mysqli_query($conn, $mysql)) {
        echo "<script> alert('เรียบร้อย'); </script> " ;
        echo "<script> window.location= 'user_db.php' ; </script>";
    }
?>
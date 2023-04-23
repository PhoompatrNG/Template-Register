<?php 
    include 'condb.php';
    session_start();
    //ตัวแปล
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $userlevel = $_POST['userlevel'];
    $member = $_POST['userlevel'];

    //Update data
    $mysql = "UPDATE 1user SET firstname='$firstname',
    lastname='$lastname', userlevel = '$userlevel' WHERE id = '$id'";
    if(mysqli_query($conn, $mysql)){
        echo "<script> alert('เรียบร้อย'); </script> " ;
        echo "<script> window.location= 'user_db.php' ; </script>";
        
}
?>
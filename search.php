<?php 
    include 'condb.php';
    session_start();
    //ตัวแปล
    $search = $_POST['Search'];

    //Update data
    $mysql = "SELECT * FROM data1 WHERE day LIKE '%or%' = '$search';
    if(mysqli_query($conn, $mysql)){
        echo "<script> alert('เรียบร้อย'); </script> " ;
        echo "<script> window.location= 'user_db.php' ; </script>";
        
}
?>
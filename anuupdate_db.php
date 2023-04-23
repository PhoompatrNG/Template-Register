<?php 
    include 'condb.php';
    session_start();
    //ตัวแปล
    $id = $_POST['number55'];
    $day = $_POST['day'];
    $number2 = $_POST['number2'];
    $dat = $_POST['dat'];
    $get1 = $_POST['get1'];
    $pri = $_POST['pri'];
    $loc = $_POST['loc'];
    $edit = $_POST['edit'];
    $note = $_POST['note'];
    $sta = $_POST['sta'];
    //Update data
    $mysql = "UPDATE data1 SET day ='$day',
     itemcode='$number2', detail = '$dat' , get1 = '$get1' , price = '$pri' , location = '$loc' , edit = '$edit'
    , note = '$note' , status = '$sta'  WHERE number = '$id'";
    if(mysqli_query($conn, $mysql)){
        echo "<script> alert('เรียบร้อย'); </script> " ;
        echo "<script> window.location= 'anudata.php' ; </script>";
        
}
?>
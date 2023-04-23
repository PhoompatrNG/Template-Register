<!--ตรวจสอบ SESSION----------------------------------------------------------------------------------------------->
<?php
    include 'condb.php';
   session_start();

   if ($_SESSION['userlevel'] != 'admin' ) {
        header('location: login.php');
   }
   
   if (isset($_GET['logout'])) {
       session_destroy();
       unset($_SESSION['username']);
       header('location: login.php');
   }
?>
<!------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="zstyle.css">

</head>
<body>
    <br>
    <h1>ข้อมูล User</h1>
    <a href="index.php" class="btn btn-outline-info"> <h4> Home </h4></a>
    <a href="forad.php" class="btn btn-outline-info"> <h4> back </h4></a>
    <br>
    <br>
    <div>
        
<!--สร้างหัวข้อ Table----------------------------------------------------------------------------------------------->
    <table class="table table-striped table-bordered table-hover">

            <tr style="background-color: lightblue;">
            
                <th> Level </th>
                <th> ID </th>
                <th> Username </th>
                <th> Fullname </th>
                <th> แก้ไข </th>
                <th> ลบ </th>


            </tr>
<!--ดึงข้อมูลจาก Table----------------------------------------------------------------------------------------------->
            <?php // start loop
                $mysql = "SELECT * FROM 1user";
                $result = mysqli_query($conn,$mysql);
                //while($row = $result){
                while($row = mysqli_fetch_array($result)){

                
            ?>
<!--แสดงข้อมูล Teble----------------------------------------------------------------------------------------------->
            <tr>
                <td><?php echo $row ["userlevel"]; ?></td>
                <td><?php echo $row ["id"]; ?></td>
                <td><?php echo $row ["username"]; ?></td>
                <td><?php echo $row ["firstname"]." ".$row["lastname"]; ?></td>
<!--Update and delete----------------------------------------------------------------------------------------------->
                <td><a href="update.php?id=<?=$row['id'];?>" class="btn btn-success">แก้ไข</a></td>
<!--ตรวจสอบ admin or member----------------------------------------------------------------------------------------------->                
                <?php if ($row['userlevel'] != 'admin'){?>
                    <td><a href="delete.php?id=<?=$row['id'];?>" class="btn btn-danger">ลบ</a></td>
                <?php } ?>
<!------------------------------------------------------------------------------------------------->
            </tr>

            <?php } // End Loop?>

        </table>

    </div>



</body>
</html>
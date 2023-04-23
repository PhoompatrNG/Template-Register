<!-- ส่วนของ UI -->
<?php 
session_start();
include 'condb.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="zstyle.css">

</head>
<body>
<div class="container">
    <br>
    <h1>แก้ไขข้อมูล</h1>
    <br>
    <a href="index.php" class="btn btn-outline-info"> <h4> Home </h4></a><br>
    <br>
    <br>

<form action="setting_db.php" method="POST">
<div  class="center" >
<table class="table table-striped table-bordered table-hover">

            <tr style="background-color: lightblue;">
            
                <th> Level </th>
                <th> ID </th>
                <th> Username </th>
                <th> Fullname </th>


            </tr>
            <?php $username = $_SESSION['username']?>
            <?php // start loop
                $mysql = "SELECT * FROM 1user WHERE username= '$username'";
                $result = mysqli_query($conn,$mysql);

                while($row = mysqli_fetch_array($result)){

                
            ?>

            <tr>
                <td><?php echo $row ["userlevel"]; ?></td>
                <td><?php echo $row ["id"]; ?></td>
                <td><?php echo $row ["username"]; ?></td>
                <td><?php echo $row ["firstname"]." ".$row["lastname"]; ?></td>

            </tr>
            </div>
            
            <?php
                
            ?>

        </table>
<br>

<!------ Text Box --------------------------------------------------------------------------------------->
<b>ชื่อ</b><br>
<input type="text" placeholder="Firstname" value="<?php echo $row['firstname']?>" name="firstname" required><p>
<b>นามสกุล</b><br>
<input type="text" placeholder="Lastname"  value="<?php echo $row['lastname']?>" name="lastname" required><br>
<br>
<?php } // End Loop?>
<input type="submit" name="submit" value="บันทืก" class="btn btn-warning">
<br>

</form>
</div>


</body>
</html>
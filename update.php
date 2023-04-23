<?php
    include 'condb.php';
    session_start();
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="zstyle.css">

</head>
<body>

    <?php //เช็คไอดี
    $id = $_GET['id'];
    $mysql = "SELECT id, firstname, lastname, userlevel FROM 1user WHERE id = $id";
    $row = mysqli_fetch_assoc(mysqli_query($conn,$mysql))
    ?>
    
    <form action="update_db.php" method="POST">
        <h1>แก้ไขข้อมูล</h1>
<!----------- ส่งข้อมูล ไอดี -------------------------------------------------------------------------------------->
        <input type="text" value="<?php echo $row['id']?>" readoly hidden name="id">
        <input type="text" value="<?php echo $row['userlevel']?>" readoly hidden name="userlevel">
<!------------------------------------------------------------------------------------------------->
        <a href="user_db.php" class="btn btn-outline-info"> <h4> back </h4></a><br><br>
        <input type="text" placeholder="Firstname" value="<?php echo $row['firstname']?>" name = "firstname" required>
       <p>
            <br>
        <input type="text" placeholder="Lastname" value="<?php echo $row['lastname']?>"  name = "lastname" required>
        <p>
<!--ตรวจสอบ admin or member----------------------------------------------------------------------------------------------->
        <?php if ($row['userlevel'] != 'admin'){?>
            <select name="userlevel" required>
                <option value="" >--เลือก--</option>
                <option value="member" >--member--</option>
                <option value="admin" >--admin--</option>
            </select>
        <?php 
              
        } ?>
        
<br>
<br>
        <button type="submit" class="btn btn-success">แก้ไข</button>

    </form>
</body>
</html>
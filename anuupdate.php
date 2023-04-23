<?php
    include 'condb.php';
    session_start();

   if (!isset($_SESSION['username'])) {
       header('location: login.php');
   }
   
   if (isset($_GET['logout'])) {
       session_destroy();
       unset($_SESSION['username']);
       header('location: login.php');
   }
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
    $mysql = "SELECT * FROM data1 WHERE number = $id";
    $row = mysqli_fetch_assoc(mysqli_query($conn,$mysql))
    ?>

    <form action="anuupdate_db.php" method="POST" >
        <h1>แก้ไขข้อมูล</h1>
        
<!----------- ส่งข้อมูล ไอดี -------------------------------------------------------------------------------------->
        <input type="text" name="number55" value="<?php echo $row['number']?>" readoly hidden >
<!------------------------------------------------------------------------------------------------->
        <a href="anudata.php" class="btn btn-outline-info"> <h4> back </h4></a><br><br>

        <br>
        
        <label for="day" >วัน เดือน ปี ที่ได้รับ</label><br>
        <?php echo $row['day'] ;?><br>
        <input type="date" id="day" name="day" required><br>
        <br>
        <input type="text" name="number2" placeholder="หมายเลขประจำครุภัณฑ์" value="<?php echo $row['itemcode']?>" required><br>
        <br>
        <input type="text" name="dat" placeholder="สเปค" value="<?php echo $row['detail']?>" required><br>
        <br>
        <input type="text" name="get1" placeholder="ได้มาโดยวิธีใด" value="<?php echo $row['get1']?>"required><br>
        <br>
        <input type="text" name="pri" placeholder="ราคา" value="<?php echo $row['price']?>"required><br>
        <br>
        <input type="text" name="loc" placeholder="อยู่ห้องไหน" value="<?php echo $row['location']?>"required><br>
        <br>
        <label for="day">วัน เดือน ปี แก้ไข</label><br>
        <input type="date" name="edit" value="<?php echo $row['edit']?>" required><br>
        <br>
        <input type="text" name="note" placeholder="หมายเหตุ"><p>
        สถานะครุ<br>
            <select name="sta" required>
                    <option value="ใช้ได้">-ใช้ได้-</option>
                    <option value="ใช้ไม่ได้">-ใช้ไม่ได้-</option>
                    <option value="ส่งซ่อม">-ส่งซ่อม-</option>
                    <option value="หาย">-หาย-</option>

            </select>
        <p> 

        <button type="submit" class="btn btn-success">แก้ไข</button>
        
    </form>
</body>
</html>
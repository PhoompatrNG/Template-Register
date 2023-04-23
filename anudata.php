<!-- ส่วนของ UI -->
<!--ตรวจสอบ SESSION----------------------------------------------------------------------------------------------->
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
<!------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการครุภัณฑ์</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="zstyle.css">

</head>
<body>

<div class="container">
    <br>
<h2>รายการครุภัณฑ์</h2>
<br>
<a href="index.php" class="btn btn-outline-info"> <h4> Home </h4></a>
<a href="forad.php" class="btn btn-outline-info"> <h4> back </h4></a>
<br>
<br>
<form action="anudata_db.php" method="POST" >

<!---- text box --------------------------------------------------------------------------------------->
<label for="day">วัน เดือน ปี ที่ได้รับ</label><br>
<input type="date" id="day" name="day" required><br>
<br>
<input type="text" name="number" placeholder="หมายเลขประจำครุภัณฑ์" required><br>
<br>
<input type="text" name="dat" placeholder="สเปค" required><br>
<br>
<input type="text" name="get" placeholder="ได้มาโดยวิธีใด" required><br>
<br>
<input type="text" name="pri" placeholder="ราคา" required><br>
<br>
<input type="text" name="loc" placeholder="สถานที่" required><br>
<br>
<label for="day">วัน เดือน ปี แก้ไข</label><br>
<input type="date"  name="edit" required value="<?php echo $row['edit']?>"><br>
<br>
<input type="text" name="note" placeholder="หมายเหตุ"><p>
สถานะ<br>
    <select name="sta" required>
            <option value="ใช้ได้">-ใช้ได้-</option>
            <option value="ใช้ไม่ได้">-ใช้ไม่ได้-</option>
            <option value="ส่งซ่อม">-ส่งซ่อม-</option>
            <option value="หาย">-หาย-</option>

    </select>
<p>
<!------ button --------------------------------------------------------------------------------------->
<input type="submit" name="submit" value="เพิ่ม" class="btn btn-warning">

<div class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            
    <table class="table table-striped table-bordered table-hover">


                <tr style="background-color: lightblue;">
                    <th> วัน เดือน ปี</th>
                    <th> หมายเลขประจำครุภัณฑ์</th>
                    <th> รายละเอียด</th>
                    <th> ได้มาโดยวิธีใด</th>
                    <th> ราคา</th>
                    <th> ตำแหน่ง</th>
                    <th> วันที่แก้ไข</th>
                    <th> หมายเหตุ</th>
                    <th> สถานะครุภัณฑ์</th>
                    <th> แก้ไข</th>
                    <th> ลบ</th>
                    
                </tr>

                <?php //$username = $_SESSION['username']?>
                <?php // start loop
                    $mysql = "SELECT * FROM data1";
                    $result = mysqli_query($conn,$mysql);

                    while($row = mysqli_fetch_array($result)){
                
                ?>

                    <tr>
                        <td><?php echo $row ["day"]; ?></td>
                        <td><?php echo $row ["itemcode"]; ?></td>
                        <td><?php echo $row ["detail"]; ?></td>
                        <td><?php echo $row ["get1"]; ?></td>
                        <td><?php echo $row["price"]; ?></td>
                        <td><?php echo $row["location"]; ?></td>
                        <td><?php echo $row["edit"]; ?></td>
                        <td><?php echo $row["note"]; ?></td>
                        <td><?php echo $row["status"]; ?></td>
<!--Update and delete----------------------------------------------------------------------------------------------->
                       
                        <td><a href="anuupdate.php?id=<?php echo $row["number"]; ?>" class="btn btn-success">Edit</a></td>
                        <td><a onclick="myFunction()" class="btn btn-danger">Delete</a></td>

                            <p id="<?php echo $row["number"]; ?>"></p>

                            <script>
                            function myFunction() {
                            var txt;
                            if (confirm("Press a button!")) {
                                window.location= 'anudelete.php?id=<?=$row['number'];?>' ;
                            } else {
                                txt = "You pressed Cancel!";
                            }
                            document.getElementById("demo").innerHTML = txt;
                            }
                            </script>

                    </tr>
                        
            <?php } // End Loop?>           
            </table>
            </div>


<br>

</div>


</body>
</html>
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
    <title>เทคโนโลยีสารสนเทศ</title>
    

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="zstyle.css">
</head>
<body >
    
        <div class="fixed-top">
            <header class="p-3 bg-dark text-white">
                <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                        <img src="222.png" alt="Avatar Logo" style="width: 100px;" class="rounded-pill"> 
                        </a>
                    </div>
                    </nav>
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="setting.php" class="nav-link px-2 text-white">แก้ไขข้อมูล</a></li>
                    <?php if ($_SESSION['userlevel'] === 'admin'){?>
                    <li><a href="forad.php" class="nav-link px-2 text-white">For admin</a></li><?php } ?>
                    <li><a href="reset.php" class="nav-link px-2 text-white">เปลี่ยนรหัสผ่าน</a></li>
                    <li><a href="index.php?logout='1'" class="nav-link px-2 text-white">Logout</a></li>
                    </ul>

                    <form action="index.php?search='2'" method="POST" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input  class="form-control form-control-dark" placeholder="Search..." name = "search" >
                    </form>

                
                </div>
            </header>
        </div>

        <div class="container">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p></p>
                    

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
                    
                </tr>

                <?php //$username = $_SESSION['username']?>
                <?php // start loop
                isset( $_POST['search'] ) ? $sea = $_POST['search'] : $sea = "";
                    $mysql = "SELECT * FROM data1 WHERE detail LIKE'%$sea%'";
                    $result = mysqli_query($conn,$mysql);
                    if($sea = ""){
                        $mysql = "SELECT * FROM data1";
                        $result = mysqli_query($conn,$mysql);
                    }
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
                    </tr>
                        
            <?php }  // End Loop?>           
            </table>
            </div>
        </div>
    </div>  
            
<!------------------------------------------------------------------------------------------------->
        <?php  ?>

    <script> src="js/bootstrap.min.js"</script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</div>

</body>
</html>

    
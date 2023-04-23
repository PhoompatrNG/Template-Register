<!-- ส่วนของ UI -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="zstyle.css">

</head>
<body>

<div class="container">
<div class="fixed-top">
            <header class="p-3 bg-dark text-white">
                <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                        <a class="navbar-brand" href="index.php">
                        <img src="222.png" alt="Avatar Logo" style="width: 150px;" class="rounded-pill"> 
                        </a>
                        <h2>ระบบบริหารจัดการครุภัณฑ์ แผนกวิชาเทคโนโลยีสารสนเทศ วิทยาลัยเทคนิคนครนายก</h2>
                    </nav>
                    
                
                </div>
            </header>
            
<br>

<h2>Login</h2>
<br>

<form action="login_db.php" method="POST">

<!---- text box --------------------------------------------------------------------------------------------->
<div class="cen">
<input type="text" name="username" placeholder="Username" ><br><br>
<input type="password" name="password" placeholder="Password" ><br>
<br></div>
<!------ button --------------------------------------------------------------------------------------->
<input type="submit" name="submit" value="เข้าสู่ระบบ" class="btn btn-warning">

<!-------ไปที่ register------------------------------------------------------------------------------------->
<a href="register.php" class="btn btn-dark"> Register </a>
</form>
</div>


</body>
</html>
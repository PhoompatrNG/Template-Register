<!-- ส่วนของ UI -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="zstyle.css">

</head>
<body>
<div class="container">
<br>
<h2>Register</h2>
<br>
<form action="register_db.php" method="POST">
<!---- text box --------------------------------------------------------------------------------------->
Username <br> <input type="text" name="username" required><br>
Password <br><input type="password" name="password" required><br>
ชื่อ  <br>     <input type="text" name="firstname" required><br>
นามสกุล <br>  <input type="text" name="lastname" required><br><br>
<!------ button --------------------------------------------------------------------------------------->
<input type="submit" name="submit" value="บันทืก" class="btn btn-warning">

<!---------ไปที่ login---------------------------------------------------------------------------------------->
<a href="login.php" class="btn btn-dark"> Login </a>
</form>
</div>


</body>
</html>
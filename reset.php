<!-- ส่วนของ UI -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset</title>

    <link rel="stylesheet" href="zstyle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<div class="container">
<br>
<h1>เปลี่ยนรหัสผ่าน</h1>
<br>
<a href="index.php" class="btn btn-outline-info"> <h4> Home </h4></a><br>

<br>
<!------ Action to --------------------------------------------------------------------------------------->
<form action="reset_db.php" method="POST">
<!------ Text Box --------------------------------------------------------------------------------------->
Username <br> <input type="text" name="username" required><br>
Password <br><input type="password" name="password" required><br>
NEWPassword <br> <input type="password" name="passwordnew" required><br>
<br>
<!------ Button --------------------------------------------------------------------------------------->
<input type="submit" name="submit" value="บันทืก" class="btn btn-warning">
<br>

</form>
</div>


</body>
</html>
<?php include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Login Form</title>
</head>
<body>
    <div class="login">
        <h2>Login</h2>
        <form action="login.php" method="POST">
           <label>Username : </label>
           <input type="text" name="username" id="username" placeholde="Enter Username"><br>
           <br>
           <label>Password : </label>
           <input type="password" name="userpass" id="pass" placeholde="Password"><br><br>
            <input id="btn"type="submit" value="Login" name="submit">
        </form>
    </div>
</body>
</html>
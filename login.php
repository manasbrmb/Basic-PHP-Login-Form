<?php
include("connect.php");

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['userpass'];

    $sql = "select * from user where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count==1){
        header("Location:user.php");
    }
    else{
        echo "";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Failed</title>
</head>
<body>
    <H1>invalid username or password</H1>
    <h2>go back try again</h2>
</body>
</html>
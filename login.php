<?php
include_once("header.php")


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
  <title>SQL-TO-THE-TEST</title>
</head>
<body>

<?php
session_start();
if (isset($_SESSION['message'])):
?>

<div class ="alert">
<?php

echo $_SESSION["message"];
unset($_SESSION['message']);
?>

</div>
<?php
endif
?>

<div class="container">
        <form action="auth.php" method="POST">
<div class="user">
        <input type="text" name="user">
</div>
<div class="pass">
        <input type="password" name="pass">
</div>
<div class="login">
        <button type="submit" name='login'>Login</button>
</div>
        <a href="register.php">Signup Here</a>
        
        </form>
</div>
</body>
</html>
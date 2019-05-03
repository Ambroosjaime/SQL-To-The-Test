<?php
include_once("header.php")


?>



<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <head>
    <title>Document</title>
</head>
<body>
  
<form action="auth.php" method="POST">
<div class="container">
<h1>Register</h1>
<hr>
<label for="username"><b>username</b></label>
<input type="text" placeholder="username" name="user" required>

<label for="firstname"><b>first name</b></label>
<input type="text" placeholder="firstname" name="Firstname" required>

<label for="lastname"><b>last name</b></label>
<input type="text" placeholder="lastname" name="Lastname" required>

<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="Email" required>

<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="pass" required minlength="4" size="10">

<label for="psw-repeat"><b>Repeat Password</b></label>
<input type="password" placeholder="Repeat Password" name="psw-repeat" required minlength="4" size="10">
<hr>


<button type="submit" name="submit" class="registerbtn">Register</button>
</div>

<div class="container signin">
<p>Already have an account? <a href=login.php>Sign in</a>.</p>
</div>

</form>
</body>
</html>

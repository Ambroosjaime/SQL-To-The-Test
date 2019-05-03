<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


require_once ('header.php');

session_start();

if(isset($_SESSION['email'])){

$username = $_SESSION['username'];

$query = ['username'=> $username];

$sql = "SELECT * FROM users WHERE username =:username";

$sqlExec = $handler->prepare($sql);

$sqlExec->execute($query);
$rowcount = $sqlExec->fetch(PDO::FETCH_ASSOC);

$_SESSION['Username'] = $rowcount['Username'];
$_SESSION['FirstName'] = $rowcount['FirstName'];
$_SESSION['LastName'] = $rowcount['LastName'];
$_SESSION['Email'] = $rowcount['Email'];


}

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
<h1>update</h1>
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


<button type="submit" name="update" class="update">update</button>
</div>


<div class="login">
        <button type="submit" name='login'>Login</button>
</div>
<div class="container signin">
<p>Already have an account? <a href=login.php>Sign in</a>.</p>
</div>

</form>
</body>
</html>
<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

require_once 'header.php';

if (isset($_POST['submit'])) {
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $user = $_POST['user'];
        $first = $_POST['Firstname'];
        $last = $_POST['Lastname'];
        $email = $_POST['Email'];
        $pass = $_POST['pass'];
        $passcomf = $_POST['psw-repeat'];

        if ($pass === $passcomf) {
            $query = [
                'Username' => $user
            ];
           

            $sqlExec = $login->prepare("SELECT * FROM users WHERE Username=':Username'");
            $sqlExec->execute($query);
            
            $userX = $sqlExec->fetch(PDO::FETCH_ASSOC);

            //check if there is already an entry for that username

            if ($userX > 0) {
                echo "Username already exists!";
            } else {
                $query = [
                    'Username' => $user,
                    'FirstName' => $first,
                    'LastName' => $last,
                    'Email' => $email,
                    'Password' => $pass
                ];

                $sqlExec = $login->prepare("INSERT INTO users(Username, FirstName, LastName, Email, Password) VALUES (:Username,:FirstName,:LastName,:Email,:Password)");
                $sqlExec->execute($query);

                header("location:home.php");
            }
        } else {
            echo 'password did not match!';
        }
    }
}
?>

<?php
//including the database connection file
include_once("header.php");
session_start();


if (isset($_POST['login'])) {
    $myusername = $_POST['user'];
    $mypassword = $_POST['pass'];

    // $myusername = stripslashes($myusername);
    // $mypassword = stripslashes($mypassword);

    $result = ("SELECT * FROM users WHERE Username=:myusername and Password=:mypassword");
    // $count = $result->fetchColumn();
    $stmt = $login->prepare($result);
    $stmt->bindParam(":myusername", $myusername);
    $stmt->bindParam(":mypassword", $mypassword);
    $stmt->execute();

    $count = $stmt->rowCount();

    if ($count > 0) {
    
        
        $_SESSION['username'] = $myusername;
        $_SESSION['login'] = time();
        header("location:home.php");
        
    // header("location:index2.php");
    } else {
        /*echo '*** Incorrect - Unknown Username or Password';*/

        $_SESSION['message']= "username or password are incorrect";
        header("location:login.php");
    }
}

if(isset($_POST['logout'])){

    session_destroy();
    header('location: login.php');
}


?>



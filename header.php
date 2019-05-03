<?php

try {
    
    $login = new PDO('mysql:host=localhost;dbname=sql_ex;charset=utf8', 'root', 'jaime&é"');


    $login->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('error connecting to database'. $e-> getMessage());
}

?>
<?php
define($HOST,'127.0.0.1:3306');
define($User,'root');
define($password,'mariadb');
define($dbname,'atn');

try {
    $connect=mysqli_connect($HOST,$User,$password,$dbname);
    if(!$connect){
        die("Database connection error!".mysqli_connect_error());
    }
    else{
        echo "Database connected successfully!";
    }

    
} catch (Exception $e) {
    die($e->getMessage());
}

?>

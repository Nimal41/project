<?php
define('SERVERNAME', '127.0.0.1:3306');
define('USERNAME', 'root');
define('PASSWORD', 'mariadb');
define('DBNAME', 'atn');

try {
    $connect=mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
    if(!$connect){
        die("Database connection error!".mysqli_connect_error());
    }
    else{
        //echo "Database connected successfully!";
    }

    
} catch (Exception $e) {
    die($e->getMessage());
}

?>

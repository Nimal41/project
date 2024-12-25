<?php
require_once 'dbconf.php';

if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Prepare the SQL query to fetch the username and hashed password
    $sql = "SELECT username, password  FROM user WHERE username = '$username'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"]; // Fetch the hashed password

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            //session_start(); // Start the session
            
           //$_SESSION["user_name"] = $row["username"];
            
            header("Location: ../product.html");
            exit; // Ensure no further code runs after redirection
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }

    $connect->close(); // Close the database connection
    //header("Location: ../login.html?error=" . urlencode($error));
   // exit;
}
?>

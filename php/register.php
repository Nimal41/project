<?php
	require_once 'dbconf.php';
	function AddData($connect,$username,$email,$password){
		try {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO user VALUES('$username','$email','$hashed_password')";
			$result = mysqli_query($connect,$sql);
			if ($result) {
				
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../login.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		AddData($connect,$username,$email,$password);
	}

	?>
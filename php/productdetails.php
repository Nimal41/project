<?php
	require_once 'dbconf.php';
	function AddData($connect,$Productname,$Price,$Customer_name,$Email,$Address){
		try {
           // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO orders (product_name,price,customer_name,email,shipping_address) VALUES('$Productname','$Price','$Customer_name','$Email','$Address')";
			$result = mysqli_query($connect,$sql);
			if ($result) {
				
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../productdetails.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$Productname = $_POST['Productname'];
		$Price= $_POST['Price'];
		$Customer_name = $_POST['YourName'];
        $Email= $_POST['Email'];
        $Address= $_POST['Address'];


		AddData($connect,$Productname,$Price,$Customer_name,$Email,$Address);
	}

	?>
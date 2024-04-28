<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost:3307','root','','register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$query="insert into registration(firstName, lastName, gender, email,password, number) values($firstName,$lastName, $gender, $email, 
      $password, $number )";
		//$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
      mysqli_query($conn, $query);
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
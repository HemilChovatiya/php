<?php
    $fName = $_POST['firstName'];
	$lName = $_POST['lastName'];
	$gen=$_POST['gender'];
	$ema = $_POST['email'];
	$pass = $_POST['password'];
	$no = $_POST['number'];
	$conn = new mysqli('localhost:3307','root','','register');
	echo $fName;
	echo $lName;
	echo $gen;
	echo $ema;
	echo $pass;
	echo $no;
	// Database connection
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		
		$pstmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$pstmt->bind_param("sssssi", $fName, $lName, $gen, $ema, $pass, $no);
		$execval = $pstmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$pstmt->close();
		$conn->close();
	}
?>
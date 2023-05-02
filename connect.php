<?php
    
		$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$comment = $_POST['comment'];
    $project = $_POST['project'];
    $paymentMethod = $_POST['paymentMethod'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$amount = $_POST['amount'];

	// Database connection
	$conn = new mysqli('localhost','root','','mssschools');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into donate(firstName, lastName, email, number, comment, project,paymentMethod,amount) values( ?, ?, ?, ?, ?,?,?,?)");
		$stmt->bind_param("sssisssi", $firstName, $lastName, $email, $number, $comment,$project,$paymentMethod,$amount);
		$execval = $stmt->execute();
		
		echo $execval;
		echo "Registration successfully...";
		
		$stmt->close();
		$conn->close();
	}
	
	
?>
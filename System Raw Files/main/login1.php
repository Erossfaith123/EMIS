<?php
	$idno = $_POST['idno'];
	$password = $_POST['password'];

	$con = new mysqli("localhost","root","","emis");
	if($con->connect_error) {
		die("Failed to connect : ".$con->connection_error);
	} else {
		$stmt = $con->prepare("select * from logins where idno = ?");
		$stmt->bind_param("s",$idno);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if ($stmt_result->num_rows > 0) {	
		$data = $stmt_result->fetch_assoc();
		if($data['password'] === $password){
			include ("Tables.html");
		} else {
			include ("Err.html");
		  }
		} else {
			include ("Err.html");
		} 
	}

?>
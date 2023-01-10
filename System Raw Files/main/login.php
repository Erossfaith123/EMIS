<?php
	$name = $_POST['name'];
	$securitykey = $_POST['securitykey'];

	$con = new mysqli("localhost","root","","emis");
	if($con->connect_error) {
		die("Failed to connect : ".$con->connection_error);
	} else {
		$stmt = $con->prepare("select * from logins where name = ?");
		$stmt->bind_param("s",$name);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if ($stmt_result->num_rows > 0) {	
		$data = $stmt_result->fetch_assoc();
		if($data['securitykey'] === $securitykey){
			include ("show.php");
		} else {
			include ("Err1.html");
		  }
		} else {
			include ("Err1.html");
		} 
	}

?>
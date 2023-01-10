<?php
include "db.php";

$idno= $_POST['idno'];
$name= $_POST['name'];
$salary= $_POST['salary'];
$bended= $_POST['bended'];

$con= new mysqli($server, $username, $password, $database);

$sql="INSERT INTO admin (idno, name, salary, bended) VALUES('".$idno."','".$name."','".$salary."','".$bended."')";

if($con->query($sql)===TRUE){
	echo "<script>alert('saved'); location.href='show.php'</script>";
}else{
	echo "ERORR ".$con->error;
}

$con->close();

?>
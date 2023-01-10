<?php

include "db.php";

$idno= $_GET['idno'];

$con= new mysqli($server, $username, $password, $database);

$sql="DELETE FROM admin WHERE idno='".$idno."'";

if($con->query($sql)===TRUE){
	echo "<script>alert('saved'); location.href='show.php'</script>";
}
else{
	echo "ERROR";
}

?>
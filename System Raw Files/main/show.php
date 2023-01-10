<?php

include "db.php";

$con= new mysqli($server, $username, $password, $database);

$sql="SELECT * FROM admin ORDER BY name DESC";
$result= $con->query($sql);

?>

<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="web4.css">
<body>

	<nav class="navbar sticky-top navbar-expand-lg" >
    <img src="IMG/CK.jpg"  alt="sss" width="" height="50" style="margin-left: 10px; border-radius: 100%;">
      <h6 style="margin-left: 15px; margin-right: 20%; font-size: 30px">Employee Management Information System</h6>
      <forma class="form d-flex"  style="margin-right: 110px">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-pills ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/..web.html">HOME</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.html">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login.html">LOG OUT</a>
        </li>
      </form>
    </div>
  </div>
</nav> 
<br>
<br>
<div class="table-title">

</div>
<table class="table-fill">
<thead>
			<th>ID No</th>
			<th>Name</th>
			<th>Salary</th>
			<th>Benefits Deductions</th>

			<th colspan="2">Actions</th>
		</tr>
		<?php 

		if($result->num_rows>0){
			while($row= $result->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$row['idno']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['salary']."</td>";
				echo "<td>".$row['bended']."</td>";
				echo "<td><a href='update.php?idno=".$row['idno']."&name=".$row['name']."&salary=".$row['salary']."&bended=".$row['bended']."' class='btn btn-primary'>Update</a></td>";
				echo "<td><a href='delete.php?idno=".$row['idno']."' class='btn btn-danger'>Delete</a></td>";
				echo "</tr>";
			}
		}
		else{
			echo "<tr><td colspan='4'>NO DATA </td>";
		}

		?>

	</table>
	<br>
	<br>
	<div id="mybutton">	
			<?php include "nav.php"; ?><br>
		</div>
</body>
</html>
<?php 

$idno= $_GET['idno'];
$name= $_GET['name'];
$salary= $_GET['salary'];
$bended= $_GET['bended'];

?>

<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" href="web5.css">
<body>

	<nav class="navbar sticky-top navbar-expand-lg" >
    <img src="IMG/CK.jpg"  alt="sss" width="" height="50" style="margin-left: 10px; border-radius: 100%;">
      <h6 style="margin-left: 15px; margin-right: 20%; font-size: 30px">Employee Management Information System</h6>
      <forma class="form d-flex"  style="margin-right: 110px">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-pills ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../web.html">HOME</a>
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
  <div class="wrapper">
    <form class="form-signin" action="updateData.php" method="POST"> 
		<input type="text" name="idno" value="<?php echo $idno;?>" style="margin-bottom: 5px"><br>	
		<input type="text" name="name" value="<?php echo $name;?>" style="margin-bottom: 5px"><br>
		<input type="text" name="salary" value="<?php echo $salary;?>" style="margin-bottom: 5px"><br>
		<input type="text" name="bended" value="<?php echo $bended;?>" style="margin-bottom: 5px"><br>
		<button class='btn btn-primary' style="margin-top: 10px">UPDATE</button>
	</form>
</body>
</html>
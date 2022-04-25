<?php include 'db.php'; 
session_start();
$enroll=$_SESSION['enroll'];

if(!isset($_SESSION['enroll']))
{
	header("location:index.php?mes=<p class='error'>Enter Your Enrollment Number</p>");
}
?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="style.css">

		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Attendance</title>
</head>
<body style="background-color: lightgray;"><center><br><header><div id="logo-container"><img src="header.png"></div></header></center><br>  <form method="post">
	<div class="container"><h3>  <?php echo "Hello! <u>".$enroll."</u> "; ?> Your Attendance Saved Succesfully</h3><br><br>
	<input type="submit" name="submit" value="logout" required class="btn btn-primary"><br><br>
<footer><div id="foot"><h3> &copy;tnou</h3></footer></div></form><br><br>

</body>
</html>
<?php 
if (isset($_POST['submit'])) {
	 
	

session_start();

session_destroy();
header("location:index.php?mes=Your session is finished");


}
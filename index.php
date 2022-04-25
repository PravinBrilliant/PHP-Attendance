<?php include 'db.php';
session_start();
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
	<title>Attendance Sheet</title>
</head>
<body style="background-color: lightgray;"><center><br><header><div id="logo-container"><img src="header.png"></div></header></center>
  <form method="post"><br><center>
  	<h2 style="text-align:center;">Attendance Form</h2><br><div class="container">
  	<!--<h3 style="text-align: center; text-decoration: underline;">For student</h3><br>-->
  	<label style="text-decoration: underline;"><b>Enrollment number:</b><br>
  		<input type="text" name="enroll" required></label><br><br>
  		<!--<label>Name : <br>
  			<input type="text" name="name" required></label>-->
   <input type="submit" name="submit" class="btn btn-primary"><br><br>
   <footer><div id="foot"><h3> &copy;tnou</h3></footer></div> </center> </form> <!--<form method="post">
   <div class="container">
   	<h3 style="text-align: center;">For Staff</h3> 
   	<label>Name : <br>
   		<input type="name" name="name" required></label><br><br>
   		<label>Password :<br>
   			<input type="password" name="password" required></label><br><br>
   <input type="submit" name="tsubmit" class="btn btn-primary">
   </div></form>-->

</body>
</html>
<?php

	if (isset($_POST['submit'])) {
		// code...
		//$name=$_POST['name'];
		$enroll=$_POST['enroll'];
		$date= date('y-m-d');
		$time=date('y-m-d h:m:s');
		$ip_address=$_SERVER['REMOTE_ADDR'];

		$dup=mysqli_query($db,"Select * from student where enroll='".$enroll."'limit 1");

	if(mysqli_num_rows($dup)>0)
	{
		//$_SESSION["name"]=$name;
		$_SESSION["enroll"]=$enroll;
	$insert="Insert into register values(null,'$enroll','','$date','$time','$ip_address')";
	if(mysqli_query($db,$insert))
	{
		echo'<script>window.location.href="main.php"</script>';
	}
	}else{
		echo '<script>alert("Invalid Enrollment Number");window.location.href="index.php ";</script>';}

	}
?>
<!--php

	if (isset($_POST['tsubmit'])) {
		// code...
		$name=$_POST['name'];
	    $password=$_POST['password'];

		$dup=mysqli_query($db,"Select * from staff where name='".$name."' AND password='".$password."'limit 1");

	if(mysqli_num_rows($dup)>0)
	{
		$_SESSION["name"]=$name;
		
		echo '<script>alert("Loggin succesfully");window.location.href="main.php";</script>';
	}else{
		echo '<script>alert("Loggin failed");window.location.href="index.php ";</script>';}
	}-->

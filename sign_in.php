<?php
session_start();
include 'config.php';
if(isset($_POST['submitbtn'])){
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql="SELECT * FROM `sign_up` where email='$email' and passward='$pass'";
$query_run=mysqli_query($conn,$sql);
if(mysqli_num_rows($query_run)==1){
	$_SESSION['email']=$email;
	header('location:find_tution_sign.php');

}
else{
	?>
	<script>alert("Sorry wrong password");</script>
	<?php
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tution Bazar</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/uikit.css">
	<link rel="stylesheet" type="text/css" href="css/uikit-rtl.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
	<nav>
		<div class="icon">
			<img class="" src="icon.png">
		</div>
		<div class="nvbar">
			<ul id="menu">
				<li class="li"><a href="home.php">Home</a></li>
				<li class="li"><a href="sign_in.php">Sign In</a></li>
				<li class="li"><a href="sign_up.php">Sign Up</a></li>
				<li class="li"><a href="add_tution.php">Add Tution</a></li>
				<li class="li"><a href="faq.php">FAQ</a></li>
				<li class="li"><a href="about_us.php">About Us</a></li>
				
				
			</ul>
		</div>
		
	</nav>
	<section>

		<div class="row hire" style="width: 85%; margin: 75px auto; background: white; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);">
			
	<div style="width: 400px; margin: 100px auto; background: #f2f2f2;  border-radius: 5px; height: 320px; padding: 10px 25px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);">
		<h3 style="color:green;">Sign In</h3>
		<form method="post" class="form-group">

			<label for="email">Email:</label>
			<input id="email" type="text" name="email" class="form-control" required>

			<label for="pass">Password:</label>
			<input id="pass" type="password" name="pass" class="form-control" required>
			<a href="sign_up.php">If you are not registered click here to sign up</a></li>

			<button type="submit" name="submitbtn" class="btn btn-info" style="margin-top: 30px; margin-left: 270px;">Sign in</button>

			
		</form>
	</div>
			
		
	</section>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.js"
  	integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  	crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/uikit.js"></script>
	<script src="uikit/js/uikit-icons.min.js"></script>
</html>
<?php
include('config.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>hire_tutor</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/uikit.css">
	<link rel="stylesheet" type="text/css" href="css/uikit-rtl.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="hire_tutor.css">
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

		<div id="container2" style="margin-bottom: 300px;">

		<br><h1 style="text-align: center; margin-bottom: 10px;">TUTORS INFORMATION</h1><br>
    
    
		<table class="table"> 
			<thead>
                <tr >
                    <th style="text-align: center;">NAME</th>
                    <th style="text-align: center;">UNIVERSITY</th>
                     <th style="text-align: center;">QUALIFICATION</th>
                    <th style="text-align: center;">ADDRESS</th>
                    <th style="text-align: center;">PHONE NO.</th>
                    <th style="text-align: center;">E-MAIL</th>
                   
                </tr>
     		 </thead>
            <tbody>
            	<?php
            	$sql="SELECT * FROM `sign_up`";
				$query_run=mysqli_query($conn,$sql);
                  if($query_run){
                  if(mysqli_num_rows($query_run)>0){
                      while($result=mysqli_fetch_assoc($query_run)){
                        ?>
                        <tr>
                              <td><?php echo $result['name']; ?></td>
                              <td>
                                	<?php echo $result['university']; ?>
                              </td>
                              
                              <td>
                                  <?php echo $result['qualification']; ?>
                               </td>
                               <td>
                                  <?php echo $result['address']; ?>
                               </td>
                               <td>
                                  <?php echo $result['phone']; ?>
                               </td>
                                <td>
                                  <?php echo $result['email']; ?>
                               </td>
                              
                              
                        </tr>
                      <?php
                    }

                  }
                  }

              ?>
                 
            </tbody>
		</table>
    
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
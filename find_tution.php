<?php
include('config.php');
if(isset($_POST['submitbtn'])){
$name=$_POST['search'];
if(empty($name)){
	?>
	<script>alert("please fill subject")</script>
	<?php
}	
else{
	header("Location:searchresult.php?name=$name");
}	
}

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
			<form name="searchform" method="post" action="">
			<input type="text" placeholder="Search subject"style="margin-left:35px;" name="search">
			<input type="submit" name="submitbtn" value="SEARCH">
			</form>
		</div>
		<div>
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
		<br><h1 style="text-align: center; margin-bottom: 10px;">TUTION INFORMATION</h1><br>
    
    
		<table class="table"> 
			<thead>
                <tr >
                    <th style="text-align: center;">ADDRESS</th>
                    <th style="text-align: center;">SALARY(BDT)</th>
                     <th style="text-align: center;">INSTITUTION</th>
                    <th style="text-align: center;">CLASS</th>
                    <th style="text-align: center;">SUBJECT</th>
                    
                   
                </tr>
     		 </thead>
            <tbody>
            	<?php
            	$sql="SELECT * FROM `tution_info`";
				$query_run=mysqli_query($conn,$sql);
                  if($query_run){
                  if(mysqli_num_rows($query_run)>0){
                      while($result=mysqli_fetch_assoc($query_run)){
                        ?>
                        <tr>
                              <td><?php echo $result['address']; ?></td>
                              <td>
                                	<?php echo $result['salary']; ?>
                              </td>
                              
                              <td>
                                  <?php echo $result['institution']; ?>
                               </td>
                               <td>
                                  <?php echo $result['class']; ?>
                               </td>
                               <td>
                                  <?php echo $result['subject']; ?>
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

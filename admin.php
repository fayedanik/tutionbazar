<?php


	
	$connection= new mysqli("localhost","root","","tution");
	
	
		$name=$_POST['name'];
		$university=$_POST['university'];
		$qualification=$_POST['qualification'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];
        
        if($pass==$cpass)
            {
            $query="insert into sign_up
             values(
            '$name','$university','$qualification','$address','$phone','$email','$pass','$cpass')";
            header('location:find_tution.php');
            if($connection->query($query))
            echo ' You are successfully registered to this site';
            else
                echo $connection->error;
        }
        else echo "Passward did not match";
       
?>

		
		
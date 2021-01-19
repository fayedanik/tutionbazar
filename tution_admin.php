<?php


	
	$connection= new mysqli("localhost","root","","tution");
	
	    $address=$_POST['tution_id'];
		$address=$_POST['address'];
		$salary=$_POST['salary'];
		$gender=$_POST['gender'];
		$institution=$_POST['institution'];
		$class=$_POST['class'];
		$subject=$_POST['subject'];
		$subject=strtoupper($subject);
		$month=$_POST['month'];
		$contact_no=$_POST['contact_no'];
		
        
       
            $query="insert into tution_info
             values(
            '$tution_id',$address','$salary','$gender','$institution','$class','$subject','$month','$contact_no')";
            header('location:hire_tutor.php');
         
            if($connection->query($query))
            echo ' You are successfully added tution info to this site';
            else
                echo $connection->error;
       
       
?>






		


		
		

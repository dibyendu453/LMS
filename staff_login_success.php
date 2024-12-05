<?php 
	
	include_once("db_connection.php");
	$username=$_REQUEST['uname'];
	$password=$_REQUEST['pwd'];
	
	//echo $user_role;
	$select="select * from staff_details where username ='$username' and password='$password'";
	$fetch=mysqli_query($conn,$select);
	$Responce_count=mysqli_num_rows($fetch);
	
	$Result=mysqli_fetch_assoc($fetch);
	//echo "<pre>";
	$name=($Result['name']);
	$staff_id=($Result['staff_id']);
	$_SESSION['name']=$name;
	$_SESSION['staff_id']=$staff_id;
	

	
	//echo $Responce_count;
	//echo $select;
	//die();
	if($Responce_count>0){
		 $_SESSION['staff_id']=$staff_id;
		//die();
		header("Location:staff_dashboard.php?value=1");
	} 
	else{
		header("Location:login_staff.php?value=0");
	}



?>
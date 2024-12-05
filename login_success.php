<?php 
	
	include_once("dbConnection.php");
	$username=$_REQUEST['uname'];
	$password=$_REQUEST['pwd'];
	$user_role=$_REQUEST['urole'];
	
	//echo $user_role;
	$select="select * from admin where username ='$username' and password='$password'";
	$fetch=mysqli_query($conn,$select);
	$Responce_count=mysqli_num_rows($fetch);
	
	$Result=mysqli_fetch_assoc($fetch);
	//echo "<pre>";
	$name=($Result['name']);
	$admin_id=($Result['id']);
	$username=($Result['username']);
	$_SESSION['name']=$name;
	$_SESSION['id']=$admin_id;

	

	
	//echo $Responce_count;
	//echo $select;
	//die();
	if($Responce_count>0){
		 $_SESSION['urole']=$user_role;
		//die();
		header("Location:dashboard.php?value=1");
	} 
	else{
		header("Location:index.php?value=0");
	}

?>
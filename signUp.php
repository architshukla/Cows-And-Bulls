<?php
	session_start();
	$username = strtolower($_POST['username']);
	$password = $_POST['password'];
	
	$con = mysqli_connect('localhost','root','root@123') or die(mysqli_error());
	mysqli_select_db($con,"cowsandbulls") or die(mysqli_error($con));
	
	$query = mysqli_query($con,"select * from login where username = \"$username\"");
	$row = mysqli_fetch_array($query);
	
	if(empty($row))
	{
		$hashedPassword = hash("md5",$password);
		if(!mysqli_query($con,"insert into login values ('$username','$hashedPassword')"))
			die(mysqli_error($con));
		echo "success";	
	}
	else
	{
		echo "<br><b>Username is taken.</b> Please try a different username and try again.";
		session_destroy();
	}
	mysqli_close($con);
?>
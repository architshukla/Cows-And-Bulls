<?php
	session_start();
	$username = strtolower($_POST['username']);
	$password = $_POST['password'];
	$hashedPassword = hash("md5", $password);

	$con = mysqli_connect('localhost','root','root@123') or die(mysqli_error());
	mysqli_select_db($con, 'cowsandbulls') or die(mysqli_error($con));
	$query = mysqli_query($con, "select * from login where username='$username'");
	$data = mysqli_fetch_array($query);
	
	if(empty($data))
	{
		echo "<br><b>Invalid Username or Password.</b> Please checck the values entered and try again.";
		session_destroy();
	}
	else
	{
		if($hashedPassword == $data['password'])
		{
			$_SESSION['username'] == $username;
			echo "success";
		}
		else
		{
			echo "<br><b>Invalid Username or Password.</b> Please check the values entered and try again.";
			session_destroy();
		}
	}
	mysqli_close($con);
?>
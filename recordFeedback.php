<?php
	session_start();
	$ratings = $_POST['ratings'];
	$feedback = $_POST['feedback'];
	if(empty($_SESSION['username']))
	{
		echo "<b>You are not logged in. </b> Please log in and try again.";
		return;
	}
	$date = getdate();
	$filename = $date['mday']."_".$date['mon']."_".$date['year'];

	$handle = fopen("feedback/$filename","a");
	fwrite($handle, $_SESSION['username']."|".$ratings."|".$feedback."~DELIM~");
	fclose($handle);

	echo "success";
?>
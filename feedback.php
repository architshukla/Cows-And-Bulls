<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Cows And Bulls</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- Custom Styles -->
	<link href="assets/css/styles.css" rel="stylesheet" media="screen">

</head>
<body>
	<table class='table table-striped table-hover table-bordered'>
		<?php

		session_start();
		if($_SESSION['username'] != 'admin')
		{
			echo "Access Denied.";
			exit();
		}

		$colors = array("1" => "danger", "2" => "warning", "3" => "active", "4" => "", "5" => "success");

		$files = glob("feedback/*");
		foreach($files as $file)
		{
			if($file != "feedback/index.php")
			{
				$handle = fopen("$file","r");
				$contents = rtrim(fread($handle, filesize("$file")),"~DELIM~");
				$feedbacks = explode("~DELIM~", $contents);
				foreach ($feedbacks as $feedback)
				{
					$parts = explode("|", $feedback);
					echo "<tr class='".$colors[$parts[1]]."'><td>$parts[0]</td><td>$parts[1]</td><td>$parts[2]</td></tr>";
				}
				fclose($handle);
			}
		}
		?>
	</table>
</body>
</html>
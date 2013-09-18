<?php 
session_start();
?>
<?php 
	$word = $_POST["userword"];
	$genword=$_SESSION['random'];
	echo shell_exec('python scripts/main.py'.' '.$_SESSION['random'].' '.$word.' ');
?>
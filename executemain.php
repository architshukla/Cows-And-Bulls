<?php 
session_start();
?>
<?php 
	$word = $_POST["userword"];
	$genword=$_SESSION['random'];
	echo 'python scripts/main.py'.' '.$genword.' '.$word;
	echo shell_exec('python scripts/main.py'.' '.$_SESSION['random'].' '.$word.' ');
?>
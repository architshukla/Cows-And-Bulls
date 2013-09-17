<?php 
session_start();
?>
<?php 
	$word = $_POST["userword"];
	$genword=substr($_SESSION['random'],0,-1);
	//echo "python scripts/main.py $genword $word";
	echo "$word : ".shell_exec("python scripts/main.py $genword $word");
?>

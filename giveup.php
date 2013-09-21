<?php 
	session_start();
	echo substr($_SESSION['random'],0,-1);
?>
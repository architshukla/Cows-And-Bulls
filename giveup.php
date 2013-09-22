<?php 
	session_start();
	echo substr(strtoupper($_SESSION['random']),0,-1);
?>
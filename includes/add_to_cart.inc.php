<?php
	if(isset($_GET['submit']))
	{
		$item = $_GET['submit'];
		
	}
	else
	{
		header('Location: ../products.php');
		exit();
	}
?>
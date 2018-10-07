<?php
	if(isset($_GET['submit']) && isset($_GET['points']))
	{
		$item = $_GET['submit'];

		switch ($item)
		{
			case "Afghani" :
				$_SESSION['afghani'] += $_GET['points'];
				break ;

			case "G-13" :
				$_SESSION['G-13'] += $_GET['points'];
				break ;

			case "Girl-Scouts-Cookies" :
				$_SESSION['Girl-Scouts-Cookies'] += $_GET['points'];
				break ;

			case "Granddaddy-Purple" :
				$_SESSION['Granddaddy-Purple'] += $_GET['points'];
				break ;

			case "Green-Crack" :
				$_SESSION['Green-Crack'] += $_GET['points'];
				break ;

			case "Lemon-Haze" :
				$_SESSION['Lemon-Haze'] += $_GET['points'];
				break ;

			case "Northern-Lights" :
				$_SESSION['Northern-Lights'] += $_GET['points'];
				break ;

			case "Sour-Diesel" :
				$_SESSION['Sour-Diesel'] += $_GET['points'];
				break ;

			case "Strawberry-Cough" :
				$_SESSION['Strawberry-Cough'] += $_GET['points'];
				break ;

			case "Swazi-Gold" :
				$_SESSION['Swazi-Gold'] += $_GET['points'];
				break ;
		}
	}
	else
	{
		header('Location: ../products.php');
		exit();
	}
?>
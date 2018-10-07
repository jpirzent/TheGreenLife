<?php
	if(isset($_GET['submit']) && isset($_GET['points']))
	{
		$item = $_GET['submit'];

		switch ($item)
		{
			case "Afghani" :
				$_SESSION['basket-total'] += ($_GET['points'] * 465.44);
				$_SESSION['Afghani'] += $_GET['points'];
				break ;

			case "G-13" :
				$_SESSION['basket-total'] += ($_GET['points'] * 280.74);
				$_SESSION['G-13'] += $_GET['points'];
				break ;

			case "Girl-Scouts-Cookies" :
				$_SESSION['basket-total'] += ($_GET['points'] * 147.76);
				$_SESSION['Girl-Scouts-Cookies'] += $_GET['points'];
				break ;

			case "Granddaddy-Purple" :
				$_SESSION['basket-total'] += ($_GET['points'] * 369.40);
				$_SESSION['Granddaddy-Purple'] += $_GET['points'];
				break ;

			case "Green-Crack" :
				$_SESSION['basket-total'] += ($_GET['points'] * 156.92);
				$_SESSION['Green-Crack'] += $_GET['points'];
				break ;

			case "Lemon-Haze" :
				$_SESSION['basket-total'] += ($_GET['points'] * 192.09);
				$_SESSION['Lemon-Haze'] += $_GET['points'];
				break ;

			case "Northern-Lights" :
				$_SESSION['basket-total'] += ($_GET['points'] * 118.21);
				$_SESSION['Northern-Lights'] += $_GET['points'];
				break ;

			case "Sour-Diesel" :
				$_SESSION['basket-total'] += ($_GET['points'] * 91.52);
				$_SESSION['Sour-Diesel'] += $_GET['points'];
				break ;

			case "Strawberry-Cough" :
				$_SESSION['basket-total'] += ($_GET['points'] * 122.67);
				$_SESSION['Strawberry-Cough'] += $_GET['points'];
				break ;

			case "Swazi-Gold" :
				$_SESSION['basket-total'] += ($_GET['points'] * 50);
				$_SESSION['Swazi-Gold'] += $_GET['points'];
				break ;
		}
		$_SESSION['item-total'] += $_GET['points'];
		header('Location: ../products.php');
		exit();
	}
	else
	{
		header('Location: ../products.php');
		exit();
	}
?>
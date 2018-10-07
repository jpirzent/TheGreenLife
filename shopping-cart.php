<?php
	include_once 'header.php';
?>

<h1 class="cart-header">Shopping-Cart</h1>

<?php
	echo '<div class="cart-info>';
	if ($_SESSION['Afghani'] > 0)
	{
		echo '<p>';
		echo "Afghani: ".$_SESSION['Afghani'];
		echo '</p>';
	}
	if ($_SESSION['G-13'] > 0)
	{
		echo '<p>';
		echo "G-13: ".$_SESSION['G-13'];
		echo '</p>';
	}
	if ($_SESSION['Girl-Scout-Cookies'] > 0)
	{
		echo '<p>';
		echo "Girl-Scout-Cookies: ".$_SESSION['Girl-Scout-Cookies'];
		echo '</p>';
	}
	if ($_SESSION['Granddaddy-Purple'] > 0)
	{
		echo '<p>';
		echo "Granddaddy-Purple: ".$_SESSION['Granddaddy-Purple'];
		echo '</p>';
	}
	if ($_SESSION['Green-Crack'] > 0)
	{
		echo '<p>';
		echo "Green-Crack: ".$_SESSION['Green-Crack'];
		echo '</p>';
	}
	if ($_SESSION['Lemon-Haze'] > 0)
	{
		echo '<p>';
		echo "Lemon-Haze: ".$_SESSION['Lemon-Haze'];
		echo '</p>';
	}
	if ($_SESSION['Northern-Lights'] > 0)
	{
		echo '<p>';
		echo "Northern-Lights: ".$_SESSION['Northern-Lights'];
		echo '</p>';
	}
	if ($_SESSION['Sour-Diesel'] > 0)
	{
		echo '<p>';
		echo "Sour-Diesel: ".$_SESSION['Sour-Diesel'];
		echo '</p>';
	}
	if ($_SESSION['Strawberry-Cough'] > 0)
	{
		echo '<p>';
		echo "Strawberry-Cough: ".$_SESSION['Strawberry-Cough'];
		echo '</p>';
	}
	if ($_SESSION['Swazi-Gold'] > 0)
	{
		echo '<p>';
		echo "Swazi-Gold: ".$_SESSION['Swazi-Gold'];
		echo '</p>';
	}
	echo '</div>';
?>

<?php
	include_once 'footer.php';
?>
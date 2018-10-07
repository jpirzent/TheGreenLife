<?php
	include_once 'header.php';
?>

<section class="header-container">
	<div class="header-bar">
		<h2>The GreenLife</h2>
	</div>
</section>


<?php
	if (isset($_SESSION['u_id']))
	{
		echo '<section>';
		echo '<div class="basket">';
		echo '<h1>-Shopping Cart-</h1>';
		echo '<p class="basket-items">Total number of Items: '.$_SESSION['item-total'].'</p>';
		echo '<p class="basket-cost">Total cost of Items: R '.$_SESSION['basket-total'].'</p>';
		echo '<a href="shopping-cart.php">Go to Shopping-Cart</a>';
		echo '</div>';
		echo '</section>';
	}
?>


<?php
	include_once 'footer.php';
?>
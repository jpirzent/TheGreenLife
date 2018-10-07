<?php
	include_once 'header.prod.php';
	include_once '../includes/dbh.inc.php';
	$sql = "SELECT * FROM products WHERE pr_name='Northern-Lights'";
	$query = mysqli_query($conn, $sql);
	if (!$query)
	{
		echo "ERROR\n";
		exit();
	}
?>
<div class="product-div">
	<?php
	{
		if ($row = mysqli_fetch_assoc($query))
		{
			echo "<h1>".$row['pr_name']."</h1>";
			echo "<div><img src=\"".$row['pr_picture']."\"></div>";
			echo "<div><p class=\"pr-desc-p\">".$row['pr_description']."</p></div>";
			echo "<input type=\"number\" name=\"points\" step=\"1\" placeholder=\"0\">";
			echo "<div><p class=\"pr-price-p\">".$row['pr_price']."</p></div>";
			echo '<form action="includes/add_cart.inc.php" method="GET">
					<button type="submit" name="submit" value="Northern-Lights">Add to Cart</button>
					</form>';
		}
	}
	?>
</div>

<?php
    include_once 'footer.prod.php';
?>
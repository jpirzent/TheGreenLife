<?php
	 session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	
<header>
	<nav>
		<div class="header-bar">
			<ul>
				<li><a href="index.php">/Home/</a></li>
				<li><a href="products.php">/Products/</a></li>
				<li><a href="help.php">/Help/</a></li>

			</ul>
			<div class="login-div">
				<?php
					if (isset($_SESSION['u_id']))
					{
						echo '<form action="includes/logout.inc.php" method="POST">
								<button type="submit" name="submit">Logout</button>
							</form>';
					}
					else
					{
						echo '<form action="includes/login.inc.php" method="POST">
								<input type="text" name="uid" placeholder="username/e-mail">
								<input type="password" name="pwd" placeholder="password">
								<button type="submit" name="submit">Login</button>
								</form>
								<a href="signup.php">Sign Up</a>';
					}
				?>
			</div>
		</div>
	</nav>
</header>
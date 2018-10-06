<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="general.css">
	<style>
		body {
			background-color: #202020;
			display: flex;
			flex-direction: column;
		}
		h1 {
			color: green;
			text-align: center;
			font-size: 55px;
			text-decoration: underline;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div class="horisontal">
		<div class="dropmenu">
			<button class="dropbtn">Home</button>
			<a href="index.php"></a>
			<div class="dropcontnt">
				<a href="">Products</a>
				<a href="">Contact Us</a>
				<a href="">About</a>
			</div>
		</div>
		<h1>The GreenLife</h1>
		<div class="login-form">
			<form action="">
				<input type="text" name="uid" placeholder="Username/e-mail">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="submit" class="dropbtn">Login</button>
			</form>
			<a href="signup.php">Sign Up</a>
		</div>
	</div>
	<div class="home-img-div">
		<img src="https://raw.githubusercontent.com/jpirzent/img/master/Cannabis_leaf.svg.png" title="Products" alt="Products" class="home-img">
	</div>
</body>
</html>
<?php

function	cr_dtb($conn)
{
	$sql = "CREATE DATABASE IF NOT EXISTS loginsystem";
	if (mysqli_query($conn, $sql))
		echo "Database created successfully"."<br/>";
	else
		die("Database creation failed: ".mysqli_error($conn)."<br/>");	
}

function	cr_tbls($conn)
{
	$sql = "CREATE TABLE IF NOT EXISTS products
	(
		pr_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
		pr_name varchar(256) NOT NULL,
		pr_description varchar(256) NOT NULL,
		pr_price varchar(256) NOT NULL,
		pr_picture varchar(256) NOT NULL,
		pr_type varchar(256) NOT NULL
	);";
	if (mysqli_query($conn, $sql))
		echo "Table created successfully"."<br/>";
	else
		echo "Table creation failed: ".mysqli_error($conn)."<br/>";

	$sql = "CREATE TABLE IF NOT EXISTS users
	(
		`user_id` int(11) AUTO_INCREMENT PRIMARY KEY,
		`user_first` varchar(256) NOT NULL,
 		`user_last` varchar(256) NOT NULL,
 	 	`user_email` varchar(256) NOT NULL UNIQUE,
		`user_uid` varchar(256) NOT NULL,
		`user_pwd` varchar(256) NOT NULL
	);";
	if (mysqli_query($conn, $sql))
		echo "Table created successfully"."<br/>";
	else
		"Table creation failed: ".mysqli_error($conn)."\n";
}

function	user_tables($conn)
{
	$sql = "INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES	(8, 'James', 'Pirzenthal', 'pirzenthaljames@gmail.com', 'jpirzent', '$2y$10$fMrRj/sgsEkkZ/z0dlO1W.yuaj9pvmTk/isNMvqCnP0/iYRZpqFO6');";
	
	if (mysqli_multi_query($conn, $sql))
		echo "New record created successfully";
	else
		echo "Error: ".$sql."<br>".mysqli_error($conn);
}

function	product_tables($conn)
{
	$sql .= "INSERT INTO `products` (`pr_id`, `pr_name`, `pr_description`, `pr_price`, `pr_picture`, `pr_type`) VALUES
	(0, 'Sour Diesel', 'Sour Diesel, sometimes called Sour D, is an invigorating sativa-dominant strain named after its pungent, diesel-like aroma. This fast-acting strain delivers energizing, dreamy cerebral effects that have pushed Sour Diesel to its legendary status.', 'R91,52 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/sour-diesel.jpg', 'sativa'),
	(1, 'Lemon Haze', 'With an intense flavor of sweet lemons slices, Lemon Haze is one of the most popular sativa strains. It\'s known for its potency, ability to help you mellow out, and for producing flowers with a yellow hue.', 'R192,09 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/Super-Lemon-Haze-drgreenseeds.jpg', 'sativa'),
	(2, 'Green Crack', 'One of the most popular strains of cannabis sativa is Green Crack which is well-loved for its ability to help sharpen focus, energize the mind, and banish fatigue. Green Crack, sometimes called Green Cush, has a tropical aroma and tangy flavor.', 'R156,92 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/Screen-Shot-2016-05-11-at-7.52.23-AM.png', 'sativa'),
	(3, 'Strawberry Cough', 'Strawberry Cough is a sativa-dominant strain that\'s wildly popular and sought out for its ability to help you improve your mood and manage stress. True to its name, this strain smells and tastes of strawberries.', 'R122,67 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/strawberry-kush-600x450.jpg', 'sativa'),
	(4, 'Swazi Gold', 'Swazi Gold is a sativa landrace strain from Africa known for its sweet, citrus flavor and fast-acting effects. Designed to withstand the harsh conditions of its mountainous homeland, Swazi Gold grows with ease and resilience', 'R50 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/Swazi-Gold-Marijuana-Strain.jpg', 'sativa'),
	(5, 'Granddaddy Purple', 'For a dreamy buzz that will leave you in a pain-free state of euphoria, look no further than Granddaddy Purple!', 'R369,40 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/lf_kens_gdp_6201-773x900.jpg', 'indica'),
	(6, 'Northern Lights', 'Northern Lights will leave you in a dreamy euphoria that works throughout your mind and body for a blissfully lazy feeling that is likely to last sometime.', 'R118,21 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/northern-lights-fem-marijuana-seeds-1_large.jpg', 'indica'),
	(7, 'Girl Scout Cookies', 'Famous for its sweet and earthy aroma and flavour.', 'R147,76 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/cookie_9093.jpg', 'indica'),
	(8, 'Afghani', 'Named after its geographic origin, Afghani grows in the Hindu Kush mountains, which is where cannabis was first discovered over 1000 years ago! With its earthy aroma and sweet flavor, Afghani is one of the most popular marijuana strains available!', 'R465,44 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/afghan-kush-cannabis.jpg', 'indica'),
	(9, 'G-13', 'Boasting a strong aroma of oranges, this strain is perfect for anybody looking to benefit from multiple medicinal benefits.', 'R280,74 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/g13-haze_2458_1_.jpg', 'indica');";
	if (mysqli_multi_query($conn, $sql))
		echo "New record created successfully";
	else
		echo "Error: ".$sql."<br>".mysqli_error($conn);
}

?>
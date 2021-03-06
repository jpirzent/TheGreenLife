<?php

	if (isset($_POST['submit'])) 
	{
		include_once 'dbh.inc.php';

		$first = $_POST['first'];
		$last = $_POST['last'];
		$email = $_POST['email'];
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];

		//ERROR HANDLERS
		//=>check for empty fields
		//=>check if first and last is valid
		//=>check if email is valid
		//=>hash password
		//=>insert user into database
		if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd))
		{
			header("Location: ../signup.php?signup=empty");
			exit();
		}
		else
		{
			if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
			{
				header("Location: ../signup.php?signup=invalid-names");
				exit();
			}
			else
			{
				if (!filter_var($email, FILTER_VALIDATE_EMAIL))
				{
					header("Location: ../signup.php?signup=invalid-email");
					exit();
				}
				else
				{
					$sql = "SELECT * FROM users WHERE user_uid='$uid'";
					$res = mysqli_query($conn, $sql);
					$resCheck = mysqli_num_rows($res);
					if ($resCheck > 0)
					{
						header("Location: ../signup.php?signup=invalid-username");
						exit();
					}
					else
					{
						$hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
						$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashpwd');";
						mysqli_query($conn, $sql);
						header("Location: ../signup.php?signup=success");
						exit();
					}
				}
			}
		}
	}
	else
	{
		header("Location: ../signup.php");
		exit(); 
	} 
<?php include 'database.php';?>

<?php

		// Hashing password
	define("MAX_LENGTH", 6);

	function generateHash($password)
	{

		$intermediate = md5(uniqid(rand(),true));
		$salt = substr($intermediate,0,MAX_LENGTH);
		return hash("sha256",$password.$salt);
	}


	# Let's get user login details from the login details
	$email = mysqli_real_escape_string($connect, $_REQUEST['username']);
	$password = mysqli_real_escape_string($connect, $_REQUEST['password']);

	# Hash the submitted password
	$hash = generateHash($password);
	
	# Let's query the database to fetch email and password
	$sql = "SELECT email, pass_word FROM user WHERE email = $email AND pass_word = $hash";

	$retval = mysqli_query($connect, $sql);

	# If query is not executed
	if (!$retval ) {
		die('Could not get details: '. mysqli_error($connect));
	}

	/*
	# Compare user submitted details with database details
	while ( $row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
		if ( $row['email'] == $email && $row['pass_word'] == $hash) {
			echo "You're logged in..";
		}else{
			echo "Invalid Username or Password";
			header("Location: http://localhost/property/login.php");
		}
	}
	*/
?>
<?php include 'database.php';?>

<?php
	
	session_start();

	/*
		// Hashing password
	define("MAX_LENGTH", 6);

	function generateHash($password)
	{

		$intermediate = md5(uniqid(rand(),true));
		$salt = substr($intermediate,0,MAX_LENGTH);
		return hash("sha256",$password.$salt);
	}
	*/


		# Let's get user login details from the login details
		$email = mysqli_real_escape_string($connect, $_REQUEST['email']);
		$password = mysqli_real_escape_string($connect, $_REQUEST['password']);

		// Creating a hash
		//$hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
		// If you omit the ['cost' => 12] part, it will default to 10
		$hash = md5($password);
		
		# Let's query the database to fetch email and password
		$sql = "SELECT * FROM user WHERE email = '$email' LIMIT 1";

		$retval = mysqli_query($connect, $sql);

		
		# If query is not executed
		if (!$retval ) {
			die('Could not get details: '. mysqli_error($connect));
		}
		
		$row = mysqli_fetch_array($retval, MYSQLI_ASSOC);

		$id = $row['id'];
		$db_password = $row['pass_word'];

		if ($hash == $db_password) {
			echo "Login successfully";
			$_SESSION['email'] = $email;
			$_SESSION['id'] = $id;
			header("Location: index.php");
		} else {
			echo "Your password or email was wrong";
			header("Location: login.php");
		}


	/*
	# Compare user submitted details with database details
	while ( $row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
		// Verifying the password against the stored hash  
		if (password_verify( $row['pass_word'], $hash)) {
		    // Success! Log the user in here.
		    header("Location: http://localhost/property/post.php");
		}else{
			echo "Invalid Username or Password";
			header("Location: http://localhost/property/login.php");
		}
	}
	*/

	mysqli_close($connect);
	
?>
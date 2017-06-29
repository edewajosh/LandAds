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

//create variables
$first_name = mysqli_real_escape_string($connect, $_REQUEST['firstName']);
$surname = mysqli_real_escape_string($connect, $_REQUEST['surname']);
$last_name = mysqli_real_escape_string($connect, $_REQUEST['lastName']);
$id_number = mysqli_real_escape_string($connect, $_REQUEST['idNumber']);
$phone_number = mysqli_real_escape_string($connect, $_REQUEST['phoneNumber']);
$email = mysqli_real_escape_string($connect, $_REQUEST['email']);
$password = mysqli_real_escape_string($connect, $_REQUEST['pass_word']);

$hash = generateHash($password);

//Execute the query
$query ="INSERT INTO user(firstName, surname, lastName,idNumber,phoneNumber,email, pass_word)
	VALUES('$first_name','$surname','$last_name','$id_number','$phone_number','$email', '$hash')";
//$result = mysqli_query($connect,$query);
//echo "Hello World!";

if (mysqli_query($connect, $query)) {
	echo "Registered successfully, you can now login";
	# code...
	 header("Location: http://localhost/property/login.php");
} else {
	# code...
	echo "ERROR: Could not able to execute $query. " . mysqli_error($connect);

}


mysqli_close($connect);

?>

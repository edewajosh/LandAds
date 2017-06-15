<?php
	$connect = mysqli_connect('localhost', 'root', '', 'robisearch');
	if (mysqli_connect_errno($connect)) {
		# code...
		echo "Failed to connect";
	}else {
		echo "Connected succesfully";
	}
?>

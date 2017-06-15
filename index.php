<?php
	$msg = "";
	//if upload button is pressed
	if (isset($_POST['upload'])) {
		//the path to store the uploaded image
		$target = "images/".basename($_FILES['image']['name']);

		//connect to the database
		$db = mysqli_connect('localhost','root','','robisearch');

		//get all the submitted data from the form
		$image = $_FILES['image']['name'];
		$text = $_POST['text'];

		$sql = "INSERT INTO images (image, text) VALUES ('$image','$text')";
		//stores the submitted data into the table: images
		mysqli_query($db, $sql);

		//now let's move the uploaded images into the folder: images

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image uploaded succesfully";
		}else{
			$msg = "There was a problem uploading image";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div>
   <?php include 'navbar.php';?>
</div>
<body>
	<div id="content">
	<?php
		$db = mysqli_connect('localhost','root','','robisearch');
		$sql = "SELECT * FROM images";
		$result = mysqli_query($db,$sql);
		while ($row = mysqli_fetch_array($result)) {
			echo "<div id = 'img_div' style ='float:left'>";
				echo "<img src = 'images/".$row['image']."'>";
				echo "<p>".$row['text']."</p>";
			echo "</div>";
		}

	?>
	</div>
</body>
</html>

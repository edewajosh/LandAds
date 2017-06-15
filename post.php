<div>
  <?php include 'navbar.php';?>
</div>
<h1 align="center">Post Your Piece of Land</h1>
<hr>
<div class="form-group" align="center">
	<form method="post" action="index.php" enctype="multipart/form-data">
	<div class="form-group">
		<input type="hidden" name="size" value="1000000">
	</div>
	<div class="form-group">
		<input type="file" name="image">
	</div>
	<div class="form-group">
		<textarea name="text" cols="70" rows="10" placeholder="your land description..."></textarea>
	</div>
	
	<input name="upload" type="submit" value="Upload" class="btn btn-primary">
</form>
</div>

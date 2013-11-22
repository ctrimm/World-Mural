<?php
	include_once('assets/header.php');
?>

<div class="row-fluid">
	<form action="assets/uploadimage.php" method="post" enctype="multipart/form-data">
		<label for="file">Filename:</label>
		<input type="file" name="file" id="file"><br>
		<input type="hidden" name="user" value="cdt5058">
		<textarea name="description" id="description"></textarea><br>
		<input type="text" name="tags" id="tags" placeholder="tags">
		<input type="submit" name="submit" value="Submit">
	</form>	
</div>


<?php 
	include_once('assets/footer.php');
?>

    <body>
    	<?php 
    		$_SESSION['success'];
    		include_once('assets/supportheader.php'); 
    	?>


<div class="container">
	<div class="row">
		<div class="col-lg-offset-4 col-lg-4">
			<form action="emailinfo.php" method="POST">
				<input class="text" name="email" id="email" \>
				<input type="submit" class="btn btn-warning" \>
			</form>
		</div>
	</div><!-- / row-fluid-->
</div><!-- / container-->

<div class="smallpad"></div>
      <!-- FOOTER -->
<?php include_once("assets/footer.php"); ?>



  </body>
</html>
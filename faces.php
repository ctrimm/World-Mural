<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>The World Mural Project - Bringing Communities Together Thru Art</title>
        <meta name="description" content="">
        <meta name="keywords" content=""
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
       
    </head>

  	
  	    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">The World Mural Project</a>
        </div><!--
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li clas"active"><a href="/">HOME</a></li>
            <li><a href="#slidelearnmore">ABOUT</a></li>
            <li><a href="#slidelocations">LOCATIONS</a></li>
            <li><a href="#slidesupport">GET INVOLVED</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="thumbnail center well well-small text-center">
  <h2>Newsletter</h2>
    
  <p>Subscribe to our monthly Newsletter and stay tuned.</p>
    
					<div id="mc_embed_signup">
					<form action="http://thepublicartacademy.us7.list-manage.com/subscribe/post?u=f5c1d7ddae7641545182c9cf6&amp;id=73f23fd1d5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
						<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</form>
					</div>
					<!--End mc_embed_signup-->
</div>

    <div class="col-lg-8 col-lg-offset-2 center">
    	<h2>300+ People from the State College Inspiration Mural</h2>
    </div>
    
<?php    
	
	$counter = 0;
	
	$directory = "/home/worldmuralteam/worldmuralproject.org/img/faces/";
	
	echo "<div class='contentwrap'>";
	foreach(glob('/home/worldmuralteam/worldmuralproject.org/img/faces/*.png') as $image)   
	{
		
		$imagename = basename($image);
		$imagename = substr($imagename, 0, strrpos($imagename,'.'));

			preg_match_all('/[A-Z][^A-Z]*/', $imagename, $results); ?>
			<!--
			<a href="#<?php echo $imagename; ?>" class="link" data-original-title="<?php foreach($results[0] as $name) echo $name." "; ?>" data-toggle="modal"><img src="<?php echo "../img/faces/". $imagename.'.png'; ?>" class="img-polaroid smallsquareface" onload="$(this).fadeIn(500);"></a> 
			-->
			
			<a href="#<?php echo $imagename; ?>" class="link" data-original-title="<?php foreach($results[0] as $name) echo $name." "; ?>" ><img src="<?php echo "../img/faces/". $imagename.'.png'; ?>" class="img-polaroid smallsquareface" onload="$(this).fadeIn(500);"></a> 
			
			
			<!--
			<div id="<?php echo $imagename; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3 id="myModalLabel">Modal header</h3>
			  </div>
			  <div class="modal-body">
			    <p><?php foreach($results[0] as $name) echo $name." "; ?></p>
			  </div>
			  <div class="modal-footer">
			    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			    <button class="btn btn-primary">Save changes</button>
			  </div>
			</div>
			-->


<?php		
	}

	include_once('assets/footer.php')

?>



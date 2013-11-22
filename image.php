<?php
    include_once('assets/dbconnect.php');
	$image = $_GET['id'];
	$sql = "SELECT * FROM images WHERE id = 'image'";
	$results = mysql_query($sql) or die(mysql_error());
	$result = mysql_fetch_assoc($results);
	print_r($result);
	
	$path = "http://www.corytrimm.com/world/img/upload/";
	$imgsize = getImageSize($path.$result['imgpath']);
	print_r($imgsize);
	
	$sql = "SELECT * FROM `annotations` WHERE image_id = '$image'";
	$results = mysql_query($sql) or die(mysql_error());
	
	
?>
<!DOCTYPE html>
<html>
<head>
    <title>Interactive tooltips using CSS3 and jQuery</title>
    <script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
    <!-- SCRIPT FOR ADDING PINS and EXPANDING ON CLICK-->
    <script>
		$(document).ready(function(){
		
			// set the wrapper width and height to match the img size
			$('#wrapper').css({'width':$('#wrapper img').width(),
							  'height':$('#wrapper img').height()
			})
			
			//tooltip direction
			var tooltipDirection;
						 
			for (i=0; i<$(".pin").length; i++)
			{				
				// set tooltip direction type - up or down             
				if ($(".pin").eq(i).hasClass('pin-down')) {
					tooltipDirection = 'tooltip-down';
				} else {
					tooltipDirection = 'tooltip-up';
					}
			
				// append the tooltip
				$("#wrapper").append("<div style='left:"+$(".pin").eq(i).data('xpos')+"px;top:"+$(".pin").eq(i).data('ypos')+"px' class='" + tooltipDirection +"'>\
													<div class='tooltip'>" + $(".pin").eq(i).html() + "</div>\
											</div>");
			}    
			
			//  show/hide the tooltip
			$('.tooltip-up, .tooltip-down').mouseenter(function(){
						$(this).children('.tooltip').fadeIn(100);
					}).mouseleave(function(){
						$(this).children('.tooltip').fadeOut(100);
					})
			  

		});
    </script>
    <script>
    		$(document).ready(function() {
			  $('.box').click(function(e) {
			    var offset = $(this).offset();
			    $("#xposition").val(e.clientX - offset.left);
			    $("#yposition").val(e.clientY - offset.top);
			  });
			});
    </script>
    <script type="text/javascript">
    $(function() {
    	$("#submitbutton").click(function(e) {  
    		e.preventDefault();
    		
    		var image = $("input#image").val();
	    	var user = $("input#user").val();
	    	var description = $("inputer#description").val();
	    	var tags = $("input#tags").val();
			var xposition = $("input#xposition").val();
			var yposition = $("input#yposition").val();
			
			var dataString = 'image=' + image + '&user='+ user + '&xposition=' + xposition + '&yposition=' + yposition + '&description=' + description + '&tags=' + tags;  
			
    		//var url = "../world/assets/createnote.php";
    	
		    $.ajax({
		    	  type: "POST",  
				  url: "../world/assets/createnote.php?",  
				  data: dataString,  
				  success: function() { 
		               alert(data); // show response from the php script.
		           }
		    });
		
		    return false; // avoid to execute the actual submit of the form.
    	}
    	
    });
    
    
    //////////
    //////////
    //////////
   // $(".submit_btn").click(function() {
    	
    	
    	
    	//$.ajax({  
		//  type: "POST",  
		//  url: "assets/createnote.php",  
		//  data: dataString,  
		//  success: function() {  
		//    $('#contact_form').html("<div id='message'></div>");  
		//    $('#message').html("<h2>Contact Form Submitted!</h2>")  
		//    .append("<p>We will be in touch soon.</p>")  
		//    .hide()  
		//    .fadeIn(1500, function() {  
		//    $('#message').append("<img id='checkmark' src='images/check.png' />");  
		//    });  
		//  }  
		//});  
		//return false;  
    	
 //   }  	
    	
	</script>
	
<!-- I KNOW, I KNOW THIS ISN'T GOOD STYLE... -->
	<style>
		body {
			text-align: center;
			font: 13px Arial,Helvetica;		
		}
		
		/* Relative positioning*/
		#wrapper {
			position: relative;
			margin: 50px auto 20px auto;
			border: 1px solid #fafafa;
			-moz-box-shadow: 0 3px 3px rgba(0,0,0,.5);
			-webkit-box-shadow: 0 3px 3px rgba(0,0,0,.5);
			box-shadow: 0 3px 3px rgba(0,0,0,.5);
		}
		
		/* Hide the original tooltips contents */
		.pin {
			display: none;
		}
		
		/* Begin styling the tooltips and pins */
		.tooltip-up, .tooltip-down {
			position: absolute;
			background: url(http://www.red-team-design.com/wp-content/uploads/2011/10/arrow-up-down.png);
			width: 36px;
			height: 52px;
		}
		
		.tooltip-down {
			background-position: 0 -52px;
		}
		
		.tooltip {
			display: none;
			width: 200px;
			cursor: help;
			text-shadow: 0 1px 0 #fff;
			position: absolute;
			top: 10px;
			left: 50%;
			z-index: 999;
			margin-left: -115px;
			padding:15px;
			color: #222;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
			-moz-box-shadow: 0 3px 0 rgba(0,0,0,.7);
			-webkit-box-shadow: 0 3px 0 rgba(0,0,0,.7);
			box-shadow: 0 3px 0 rgba(0,0,0,.7);
			background: #fff1d3;
			background: -webkit-gradient(linear, left top, left bottom, from(#fff1d3), to(#ffdb90));
			background: -webkit-linear-gradient(top, #fff1d3, #ffdb90);
			background: -moz-linear-gradient(top, #fff1d3, #ffdb90);
			background: -ms-linear-gradient(top, #fff1d3, #ffdb90);
			background: -o-linear-gradient(top, #fff1d3, #ffdb90);
			background: linear-gradient(top, #fff1d3, #ffdb90);			
		}
		
		.tooltip::after {
			content: '';
			position: absolute;
			top: -10px;
			left: 50%;
			margin-left: -10px;
			border-bottom: 10px solid #fff1d3;
			border-left: 10px solid transparent;
			border-right :10px solid transparent;
		}
		
		.tooltip-down .tooltip {
			bottom: 12px;
			top: auto;
		}
		
		.tooltip-down .tooltip::after {
			bottom: -10px;
			top: auto;
			border-bottom: 0;
			border-top: 10px solid #ffdb90;
		}
		
		.tooltip h2 {
			font: bold 1.3em 'Trebuchet MS', Tahoma, Arial;
			margin: 0 0 10px;
		}
		
		.tooltip ul {
			margin: 0;
			padding: 0;
			list-style: none;
		}		
	</style>
</head>

<body>

<div id="wrapper" class="box" style="background-image: url('<?php echo $path.$result['imgpath']; ?>'); width: <?php echo $imgsize[0]; ?>px; height: <?php echo $imgsize[1]; ?>px;">
   
<?php   
		while($row = mysql_fetch_assoc($results))
		{   ?>
			<div class="pin pin-down" data-xpos="<?php echo $row['xcoordinate']; ?>" data-ypos="<?php echo $row['ycoordinate']; ?>">
				<p><?php echo $row['description']; ?> </p>
				<p>User: <?php echo $row['user']; ?></p>
			</div>
<?php	}
?> 
   
  
   
</div>

<div>
  <p>Click to see the position!</p>
  <!--<p id="startposition"></p>-->
  
  <div class="span6">
	  <form id="createnote" name="createnote" action="">
	  		<div class="controls controls-row">
		          <input id="xposition" name="xposition" type="text" class="span3" placeholder="X Position" value=""></input>
		          <input id="yposition" name="yposition" type="text" class="span3" placeholder="Y Position" value=""></input>
		      </div>
		      <div class="controls">
		          <textarea id="description" name="description" class="span6" placeholder="Leave a Description" rows="5"></textarea>
		      </div>
		      <input type="hidden" value="<?php echo $image; ?>" name="image" id="image"></input>
		      <input type="hidden" value="cdt5058" name="user" id="user"></input>
		      <input type="text" name="tags" id="tags"></input>
	  		<input type="submit" name="submit" class="button" id="submitbutton" value="Send" />
	  </form>
	  <div class="message" id="message"></div>
	</div>
</div>
</body>
</html>
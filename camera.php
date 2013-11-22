<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>
		function readURL(input) {
		if (input.files && input.files[0]) {
		var reader = new FileReader();
		
		reader.onload = function (e) {
		$('#img_prev')
		.attr('src', e.target.result)
		.width(150)
		.height(200);
		};
		
		reader.readAsDataURL(input.files[0]);
		}
		}
	</script>
	<!--[if IE] -->
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
article, aside, figure, footer, header, hgroup,
menu, nav, section { display: block; }
</style>
	
</head>

<body>
<p id="demo">Click the button to get your position:</p>
<button onclick="getLocation()">Try It</button>
<div id="mapholder"></div>


<form enctype="multipart/form-data" method="post">  
  <h2>Regular file upload</h2>  
  <input type="file"></input>  
    
  <h2>capture=camera</h2>  
  <input type="file" accept="instagram://app" onchange="readURL(this);"></input>  
  <img id="img_prev" src="#" alt="your image" />
    
  <h2>capture=camcorder</h2>  
  <input type="file" accept="video/*;capture=camcorder"></input>  
    
  <h2>capture=microphone</h2>  
  <input type="file" accept="audio/*;capture=microphone"></input>  
</form>  


<script>
var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }

function showPosition(position)
  {
  var latlon=position.coords.latitude+","+position.coords.longitude;

  var img_url="http://maps.googleapis.com/maps/api/staticmap?center="
  +latlon+"&zoom=14&size=400x300&sensor=false";
  document.getElementById("mapholder").innerHTML="<img src='"+img_url+"'>";
  }

function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML="The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="An unknown error occurred."
      break;
    }
  }
</script>
</body>
</html>

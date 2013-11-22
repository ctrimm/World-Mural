      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#slidehome">Back to top</a></p>
        <p>&copy; World Mural Project</p>
      </footer>

    </div><!-- /.container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

        <script src="js/main.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>

<script>
	$('.link').tooltip();
</script>




		<script>
			$('a[href*=#slide]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
			        || location.hostname == this.hostname) {
			
			        var target = $(this.hash);
			        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			           if (target.length) {
			             $('html,body').animate({
			                 scrollTop: target.offset().top
			            }, 1000);
			            return false;
			        }
			    }
			});
		</script>
		
		<script>
		    jQuery(document).ready(function($) {
		        $('#myCarousel').carousel({
		             interval: 5000
		        });
		        $('#carousel-text').html($('#slide-content-0').html());
			});
		</script>
		
		<!--FADE IN STUFF AT THE TOP-->
		<script>
			$(function(){  // $(document).ready shorthand
			  $('#buttons').hide().delay(500).fadeIn(1000);
			  $('#calltoaction').hide().fadeIn(750);
			  $('#images').hide().slideDown(1000).fadeIn();
			  $('#emailbar').hide();
			  $('#imgplaceholder').delay(3000).hide();
			});
		</script>
	

<script type="text/javascript">
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
    
    // show/hide the tooltip
    $('.tooltip-up, .tooltip-down').mouseenter(function(){
                $(this).children('.tooltip').fadeIn(100);
            }).mouseleave(function(){
                $(this).children('.tooltip').fadeOut(100);
            })
});
</script>

<script>
	function initialize(){
	  geocoder = new google.maps.Geocoder();
	 var myLatlng = new google.maps.LatLng(1.3667, 103.7500);
	   var myOptions = {
	     zoom: 4,
	     center: myLatlng,
	     scrollwheel: false,
	     mapTypeId: google.maps.MapTypeId.ROADMAP,
	   };
	
	  if (obj) {
	      for (var i = 0; i < obj.length; i++ ) {
	        codeAddress(obj[i]);
	     }
	  }
	
	  map = new google.maps.Map(document.getElementById('map_canvas'),
	      myOptions);  
	}
</script>

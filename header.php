<html>
<head>

	<title>Works PDX</title>

	<!-- CSS/960 -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/960.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/text.css" />	
	
	<!-- TYPEKIT -->	
	<script type="text/javascript" src="http://use.typekit.com/lqp8paa.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<!-- JAVASCRIPT -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bxSlider.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.touchSwipe-1.2.5" type="text/javascript"></script>

	
	<script type="text/javascript">
		function fancyNav(element, element_name) {		
	            $(element).addClass('flicker');
                $(element).animate({opacity:0.3}, {duration:100})
                          .animate({opacity:1}, {duration:100});
                              
                window.setTimeout(function() {  
                    $(element).removeClass('flicker');
                    $('#slide1').css('display', 'none');
                    $('#slide2').css('display', 'none');
                    $('#slide3').css('display', 'none');
                    
                    $('#' + element_name).fadeIn('slow');
                }, 225);
	        }
	    
	        $(function() {
	        	$('#slide1').fadeIn('slow');
	        				
				$('#nav_process').click(function() {
					fancyNav(this, 'slide1');		
            	});
            	
				$('#nav_portfolio').click(function() {
					fancyNav(this, 'slide2');
            	});
            	
				$('#nav_contact').click(function() {
					fancyNav(this, 'slide3');
            	});
        	});
	</script> 

</head>
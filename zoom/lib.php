<!-- Add jQuery library -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="zoom/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	
	<!-- Add fancyBox -->
	<link rel="stylesheet" href="zoom/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="zoom/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	
	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<link rel="stylesheet" href="zoom/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<script type="text/javascript" src="zoom/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="zoom/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	
	<link rel="stylesheet" href="zoom/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	<script type="text/javascript" src="zoom/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	
	
	<style>
	
		h2{
			clear:both;
		}
	
		.single-image img{
			width:256px;
			height:auto;
		}
		
		.gallery-image img{
			width:256px;
			height:auto;
			float:left;
			margin-right:10px;
		}
		
		.fancyOther2{
			cursor:pointer;
		}
		
	
	</style>
	
	<script>
	
		$(function(){
		
			$(".single-image").fancybox({
				openEffect : 'elastic',   //'fade', 'elastic'
		    	closeEffect	: 'elastic',
		    	openSpeed:'normal', //ms, slow, normal, fast (default 250ms)
		    	closeSpeed:'normal',
		    	helpers : {
		    		title : {
		    			type : 'inside' //'float', 'inside', 'outside' or 'over'
		    		},
		    		overlay : {
		    			closeClick : true  // if true, se cierra al hacer click fuera de la imagen
       			    }
		    	},
		    	padding:11
		    	
			});
			
			$(".gallery-image").fancybox({
				openEffect : 'fade', 
		    	closeEffect	: 'fade',
		    	closeBtn: false,
		    	helpers : {
		    		title : {
		    			type : 'over' //'float', 'inside', 'outside' or 'over'
		    		},
		    		thumbs : {
			            width: 50
			        },
			        buttons	: {},
			        overlay : {
			            css : {
			                'background' : 'rgba(0,0,0,0.5)'
			            }
        			}
					
		    	}
		    			    	
			});
			
			
			$(".fancyOther").fancybox({
				width		: '70%',
				height		: '70%',
				maxWidth	: 800,
				maxHeight	: 600,
				fitToView	: false,
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
			
			
			$(".fancyOther2").click(function(){
				$.fancybox( '<div><h1>Lorem Lipsum</h1><p>Lorem lipsum</p></div>', {
   					 title : 'Custom Title',
   					 width		: '70%',
					height		: '70%',
					maxWidth	: 800,
					maxHeight	: 600,
					fitToView	: false,
					autoSize	: false,
					closeClick	: false	 
				});
			});
			
			
			$(".fancyMedia").fancybox({	
				helpers : {
					media : {}
				}
			});
			
			$(".fancyMediaMapa").fancybox({	
				helpers : {
					media : {}
				},
				 width		: '100%',
				height		: '100%'
				
			});

			
			
		
			
		});
		
	</script>
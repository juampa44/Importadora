<head>
	<title>CSS MacOS Dock Menu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width height=device-height initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<style>
	html {
		height: 100%;
		color: #fff;
		background: #222;
		background-image: -webkit-gradient(radial,
	                            50% 0, 10,
	                            50% 0, 400,
	                            from(rgba(255, 255, 255, 0.3)),
	                            to(rgba(255, 255, 255, 0))
								); /* Safari 5 */
		-webkit-background-image: radial-gradient(
								center top, 
								circle, 
								rgba(255, 255, 255, 0.3) 0%, 
								rgba(255, 255, 255, 0) 50%
								);
								/* Chrome, WK Nightly */
		background-image: -moz-radial-gradient(
								center top, 
								circle, 
								rgba(255, 255, 255, 0.3) 0%, 
								rgba(255, 255, 255, 0) 50%
								);
		/* Gradient not supported on Opera */
	    background-repeat: no-repeat;
	}
	body {
		font-family: 'Helvetica Neue', Helvetica, arial, sans-serif;
		margin: 1em 1em 0;
	}
	h1 {
		text-shadow: rgba(255,255,255, .7) 0px 0px 10px;
		font-size: 2em;
	}
	img {
		border: 0;
	}
	#dock-container {
		position: fixed;
		bottom: 0;
		text-align: center;
		width: 100%;
	}
	#dock {
		position: relative;
		display: inline-block;
		-webkit-perspective: 400;
		-moz-perspective: 400;
	}
	#dock .base {
		position: absolute;
		bottom: 0;
		width: 100%;
		height: 45px;
		z-index: -10;
		background-color: #888;
		background-image: -webkit-gradient(linear, left top, left bottom, from(#333), to(#ccc));
		background-image: -webkit-linear-gradient(top, #333, #999); 
		background-image: -moz-linear-gradient(top, #333, #999); /* Gradient works on FF 3.6+ */
		opacity: .5;
		border-bottom: 2px #aaa solid;
		-webkit-transform-origin: 50% 100%;
		-webkit-transform: rotateX(55deg); /* 3d - works on webkit only */
		-moz-transform-origin: 50% 100%;
		-moz-transform: rotateX(55deg); /* not supported on current 3.7 */
		-o-transform-origin: 50% 100%;
		-o-transform: rotateX(55deg); /* not supported on current 10.6 */
	}
	#dock ul {
		font-size: 14px;
		padding: 0 30px;
		margin: 0;
	}
	#dock li {
		list-style-type: none;
		display: inline-block;
		position: relative;		
	}
	#dock li span {
		display: none;
		position: absolute;
		bottom: 140px;
		left: 0;
		width: 100%;
		background-color: rgba(0,0,0,.75);
		padding: 4px 0;
		border-radius: 12px; /* webkit nightly */
		-webkit-border-radius: 12px; /* for safari */
		-moz-border-radius: 12px;
	}
	#dock li:hover span {
		display: block;
	}
	#dock li img {
		width: 64px;
		height: 64px;
		margin-bottom: 10px;
		-webkit-box-reflect: below 2px
		    -webkit-gradient(linear, left top, left bottom, from(transparent),
		    color-stop(0.7, transparent), to(rgba(255,255,255,.5)));
		-webkit-box-reflect: below 2px -webkit-linear-gradient(top, transparent, rgba(255,255,255,.3));
		-webkit-transition: all 0.3s;
		-webkit-transform-origin: 50% 100%;
		-moz-transition: all 0.4s;
		-moz-transform-origin: 50% 100%;
		-o-transition: all 0.3s;
		-o-transform-origin: 50% 100%;
	}
	#dock li:hover img { 
		-webkit-transform: scale(2);
		-moz-transform: scale(2);
		-o-transform: scale(2);
		margin: 0 2em 10px;
	}

	/* one element after and element before (with JS)*/
	#dock li:hover + li img,
	#dock li.prev img {
		-webkit-transform: scale(1.4);
		-moz-transform: scale(1.4);
		-o-transform: scale(1.4);
		margin: 0 1.4em 10px;
	}

	</style>
</head>

<body>
	<h1>Showcase: Simulating MacOS Dock-like menu with CSS3</h1>
	
	<div id="dock-container">
		<div id="dock">
		<ul>
			<li><span>Android</span><a href="http://android.com"><img src="images/dock-icons/android.png"/></a></li>
			<li><span>WebOS</span><a href="http://palm.com"><img src="images/dock-icons/palm.png"/></a></li>
			<li><span>iPhone</span><a href="http://apple.com/iphone"><img src="images/dock-icons/apple.png"/></a></li>
			<li><span>Windows</span><a href="http://microsoft.com/windowsmobile"><img src="images/dock-icons/windows7.png"/></a></li>
			<li><span>Blackberry</span><a href="http://blackberry.com"><img src="images/dock-icons/blackberry.png"/></a></li>
			<li><span>Sony Ericsson</span><a href="http://sonyericsson.com"><img src="images/dock-icons/sony-ericsson.png"/></a></li>
		</ul>
		<div class="base"></div>
		</div>
	</div>
	
	<!-- compatibility -->
	<p id="ua-string" style="margin:2em 0; color:#ddd; font-style:italic; font-size:.8em"></p>
	
	
	Works great on (Last tested on: June 2010)
	<ul>
		<li>Webkit Nightly</li>
		<li>Safari 4</li>	
		<li>iPhone and iPad Safari (although the user-experience on touch screen sucks)</li>
	</ul>

	Icon magnification (animation) works as expected, but some CSS3 for UI are not supported on:
	<ul>
		<li>Firefox 3.6 and 4 - Dock-base doesn't look 3D (no perspective support) and animation is a little janky)</li>
		<li>Chrome 5 - Dock-base doesn't look 3D (no perspective support)</li>
		<li>Opera 10.5 and 10.6 - No 3D-transform or gradient</li>
	</ul>
	
	No animation on:
	<ul>
		<li>Firefox 3.5 and below</li>
	</ul>
	
	Not supported:
	<ul>
		<li>IE in all versions</li>
	</ul>
	
	<p style="margin-top: 2em">Hey by the way, the gradient on this background, and the dock-base, icon reflections are all done with CSS too :-)</p>
	
	<div align="right" style="margin-top:3em;">	
		<p>
			by Tomomi Imura / Girliemac.com<br/>
			Visit <a href="http://girliemac.com/blog/2010/06/02/simulating-macos-dock-like-menu-with-css3/" style="color: #f281b5;" target="_blank">tutorial page</a>
		</p>
	</div>
	
<script>
	function addPrevClass (e) {
		var target = e.target;
		if(target.getAttribute('src')) { // check if it is img
			var li = target.parentNode.parentNode;
			var prevLi = li.previousElementSibling;
			if(prevLi) {
				prevLi.className = 'prev';
			}
		
			target.addEventListener('mouseout', function(){
				if(prevLi) {
					prevLi.removeAttribute('class');
				}
			}, false);
		}
	}
	if (window.addEventListener) {
		document.getElementById('dock').addEventListener('mouseover', addPrevClass, false);
	}
	
	// print user-agent string
	document.getElementById('ua-string').innerHTML = navigator.userAgent;
	
</script>	
</body>
</html>

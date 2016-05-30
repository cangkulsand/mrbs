
	
	
	<!-- the CSS for Smooth Div Scroll -->
	<link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>materialdesign/dist/css/smoothDivScroll.css" />
	
	


	<!-- CSS for my specific scrolling content -->
	<style type="text/css">
	
		#makeMeScrollable
		{
			width:100%;
			height: 768px;
			position: relative;
			clear: both;
                        

		}
	
		#makeMeScrollable div.scrollableArea *
		{
			position: relative;
			display: block;
			float: left;
			margin: 0;
			padding: 0;
                        cursor: pointer;
			/* If you don't want the images in the scroller to be selectable, try the following
			   block of code. It's just a nice feature that prevent the images from
			   accidentally becoming selected/inverted when the user interacts with the scroller. */
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-o-user-select: none;
			user-select: none;
		}
	
	</style>
	

</head>
<body>


<div class="container">
<div id="well">
	
	
	<div>
	<h1>Picture Manual Slider</h1>
	<p>
		
	
		This demo is best viewed on a touch device such as iPad, iPhone or an Android device. But you can still scroll on a regular computer by grabbing and dragging the scroller. Another option is to enable mouse wheel scrolling together with touch scrolling - they won't interfere with each other. In this demo mouse wheel scrolling is disabled though.
	</p>
	</div>

	<div id="makeMeScrollable">
		<img src="<?php echo site_url('media/alexandra_daddario.jpg');?>" alt="daddario" id="daddario" />
		<img src="<?php echo site_url('media/batman_v_superman.jpg');?>" alt="bvs" id="bvs" />
		<img src="<?php echo site_url('media/captain_america_civil_war.jpg');?>" alt="cacw" id="cacw" />
		<img src="<?php echo site_url('media/chloe_moretz.jpg');?>" alt="moretz" id="moretz" />
		<img src="<?php echo site_url('media/jungle_book.jpg');?>" alt="jb" id="jb" />
		<img src="<?php echo site_url('media/warcraft_movie.jpg');?>" alt="wm" id="wm" />
		<img src="<?php echo site_url('media/wonder_woman.jpg');?>" alt="ww" id="ww" />
		<img src="<?php echo site_url('media/cute_little_baby.jpg');?>" alt="clb" id="clb" />
	</div>
	<br/>
	
	



</div>



</div>

		<!-- LOAD JAVASCRIPT LATE - JUST BEFORE THE BODY TAG 
		 That way the browser will have loaded the images
		 and will know the width of the images. No need to
		 specify the width in the CSS or inline. -->

	<!-- jQuery library - Please load it from Google API's -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

	<!-- jQuery UI Widget and Effects Core (custom download)
		 You can make your own at: http://jqueryui.com/download -->
	<script src="<?php echo base_url(); ?>materialdesign/dist/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	
	<!-- Latest version of jQuery Mouse Wheel by Brandon Aaron
		 You will find it here: http://brandonaaron.net/code/mousewheel/demos -->
	<script src="<?php echo base_url(); ?>materialdesign/dist/js/jquery.mousewheel.min.js" type="text/javascript"></script>

	<!-- jQuery Kinetic - for touch -->
	<script src="<?php echo base_url(); ?>materialdesign/dist/js/jquery.kinetic.min.js" type="text/javascript"></script>

	<!-- Smooth Div Scroll 1.3 minified -->
	<script src="<?php echo base_url(); ?>materialdesign/dist/js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>

	<!-- If you want to look at the uncompressed version you find it at
		 js/source/jquery.smoothDivScroll-1.3.js -->


	<!-- Plugin initialization -->
	<script type="text/javascript">
		// Initialize the plugin with no custom options
		$(document).ready(function () {
			// I just set some of the options
			$("#makeMeScrollable").smoothDivScroll({
				touchScrolling: true,
				manualContinuousScrolling: true,
				hotSpotScrolling: false,
				mousewheelScrolling: false
			});
		});
	</script>



	
</body>
</html>

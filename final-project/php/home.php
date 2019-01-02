<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- Creates a small icon for bookmarking purposes in the
		address bar of the broswer or tab area, depending which browser
		is used-->
		<link rel="shortcut icon" href="../images/favicon.ico"
		type="image/x-icon">
		<link rel="icon" href="../images/favicon.ico"
		type="image/x-icon">
			
		<link rel="stylesheet" type="text/css" href="../css/navigation.css"/>
		<link rel="stylesheet" type="text/css" href="../css/frame.css"/>
		<link rel="stylesheet" type="text/css" href="../css/social.css"/>
		<link rel="stylesheet" type="text/css" href="../css/home.css"/>
		<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>
		<script src="../js/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="../js/socialmedia.js" type="text/javascript"></script>
		<title>Wild Cider | Made from Everything We Hold Dear!</title>
	
		<!-- Start WOWSlider.com HEAD section -->
		<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
		<!-- End WOWSlider.com HEAD section -->
	
	</head>

	<body>
		<div id="page-layout">
			
			<?php
				$current_page = "home";
				include 'navigation.php';
			?>
			<br>
			<!-- Gallery produced by WOWSlider -->
			<!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
			<div id="wowslider-container1">
				<div class="ws_images">
					<ul>
						<li><img src="../images/cider_01.jpg" alt="cider 1" title="" id="wows1_0"/></li>
						<li><img src="../images/cider_02.jpg" alt="cider 2" title="" id="wows1_1"/></li>
						<li><img src="../images/cider_03.jpg" alt="cider 3" title="" id="wows1_2"/></li>
						<li><img src="../images/cider_04.jpg" alt="cider 4" title="" id="wows1_3"/></li>
					</ul>
				</div>
				<div class="ws_bullets">
					<div>
						<a href="#" title=""><img src="../images/cider_1_tooltip.jpg" alt="cider 01"/>1</a>
						<a href="#" title=""><img src="../images/cider_2_tooltip.jpg" alt="cider 02"/>2</a>
						<a href="#" title=""><img src="../images/cider_3_tooltip.jpg" alt="cider 03"/>3</a>
						<a href="#" title=""><img src="../images/cider_4_tooltip.jpg" alt="cider 04"/>4</a>
					</div>
				</div>

				<span class="wsl"><a href="http://wowslider.com">Slideshow HTML Code</a> by WOWSlider.com v4.7</span>
				<a href="#" class="ws_frame"></a>
			</div>
			<script type="text/javascript" src="../js/engine1/wowslider.js"></script>
			<script type="text/javascript" src="../js/engine1/script.js"></script>
			<!-- End WOWSlider.com BODY section -->
			<br>
			<?php include "footer.php" ?>
		</div><!--page-layout-->
	</body>

</html>
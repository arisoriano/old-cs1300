<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type"
		content="text/html; charset=utf-8">
		<!-- Creates a small icon for bookmarking purposes in the
		address bar of the broswer or tab area, depending which browser
		is used-->
		<link rel="shortcut icon" href="../images/favicon.ico"
		type="image/x-icon">
		<link rel="icon" href="../images/favicon.ico"
		type="image/x-icon">
			
		<link rel="stylesheet" type="text/css"
		href="../css/navigation.css"/>
		<link rel="stylesheet" type="text/css" href="../css/frame.css"/>
		<link rel="stylesheet" type="text/css" href="../css/social.css"/>
		<link rel="stylesheet" type="text/css" href="../css/contact.css"/>
		<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>
		<script src="../js/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="../js/socialmedia.js" type="text/javascript"></script>
		<title>Wild Cider | Contact</title>
		
		<script>
			function autoResize(id){
			    var newheight;
			    var newwidth;
			
			    if(document.getElementById){
			        newheight=document.getElementById(id).contentWindow.document.body.scrollHeight;
			        newwidth=document.getElementById(id).contentWindow.document.body.scrollWidth;
			    }
			
			    document.getElementById(id).height= (newheight) + "px";
			    document.getElementById(id).width= (newwidth) + "px";
			}
		</script>
	</head>
	
	<body>
		<div id="page-layout">
			<?php
				$current_page = "contact";
				include 'navigation.php';
			?>
			<div class="main">
				<h2 class="center">Contact Us</h2>
				<p class="center">
					Leave us a message for general questions or if you are interested<br>
					in purchasing our cider.
				</p>
				<p></p>
<!--Startcontactform aquried from http://www.html-form-guide.com/contact-form/creating-a-contact-form.html-->
				<iframe src='contact/contactform.php' id='contact'
				onload='autoResize("contact");'></iframe>
<!--Endcontactform-->
			<p></p>
			</div><!--main-->
			<?php include "footer.php" ?>
		</div><!--page-layout-->
	</body>

</html>
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
		
		<link rel="stylesheet" type="text/css" href="../css/contact.css"/>	
		<link rel="stylesheet" type="text/css" href="../css/mobilenav.css"/>
		<link rel="stylesheet" type="text/css" href="../css/mobileframe.css"/>
		<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>
		<title>Wild Cider | Product</title>
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
			<?php 
				$current_page = "mobilecontact";
				include 'mobilenav.php';
			?>
			<div id="main">
				<h2 class="center">Contact Us</h2>
				<p class="center">
					Leave us a message for general questions or if you are interested<br>
					in purchasing our cider.
				</p>
				<p></p>
				<iframe src='contact/mobilecontactform.php' id='contact'
				onload='autoResize("contact");'></iframe>
			<p></p>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			</div><!--main-->
                    <?php include 'mobilefooter.php';?>
	</body>

</html>
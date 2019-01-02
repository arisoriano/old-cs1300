<?php
	// Stores session variable for age input
	// If an age was inputted previously, redirect to home page. Home page will verify age.
	// If not, detect if there was an error. If so, display detailed instruction; if not, display usual instruction.
	session_start();
	if (isset($_SESSION['age'])){
		header("Location: mobilehome.php");
	}
	$message="Please enter your date of birth, must be 21 or older to enter:";
	if (isset($_GET['error']) && $_GET['error']=='Y'){
		$message = "Please enter a valid birthdate in the form MM/DD/YYYY, e.g. 07/14/1995:";
	}
?>

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
		
		<script src="../js/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="../js/jquery.maskedinput.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../css/mobileindex.css"/>
		<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>
		<title>Wild Cider | Made from Everything We Hold Dear!</title>
	</head>
	
	<body>
		
		<div id="plank">
			<h2 class="center"><?php echo $message; ?></h2>
			<form id="wild" action="mobilehome.php" method="post">
			<script class="mask">
				jQuery(function($){
				   $("#date").mask("99/99/9999");
				});
			</script>
			<input id="date" type="text" name="birthdate" placeholder="MM/DD/YYYY" required>
			<input type="submit" value="Enter">
			</form>
		</div><!--plank-->
		<br>
		<p class="logo">
		<img class="large" src="../images/wild_cider_logo_large.png" alt="logo">
		</p>
	</body>

</html>
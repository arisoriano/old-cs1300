<?php
	session_start();
	
	/* Age verifcation
	 * Performs server-side validation of age input.
	 * Checks that input format is correct, MM/DD/YYYY.
	 * Checks that input is of correct length, each piece is numeric, and forms a valid date.
	 * If any of these checks fail, redirects to age verification page with more detailed instruction.
	 * 
	 * Determines whether inputted birthdate represents a person of age 21 or older.
	 * If not, redirects to the denied page.
	 * If age is over 200, a mistake is assumed and redirects to age verification page with more detailed instruction.
	 */
	if (isset($_POST['birthdate']) && strlen($_POST['birthdate'])==10){
		$pieces = explode("/", $_POST['birthdate']);
		$correct_length = strlen($pieces[0])==2 && strlen($pieces[1])==2 && strlen($pieces[2])==4;
		$numeric = is_numeric($pieces[0]) && is_numeric($pieces[1]) && is_numeric($pieces[2]);
		$valid_date = checkdate($pieces[0], $pieces[1], $pieces[2]);
		if ($correct_length && $numeric && $valid_date){
			$birthdate = DateTime::createFromFormat('m/d/Y', $_POST['birthdate']);
			$now = new DateTime('now');
			if ($birthdate <= $now){
				$age = date_diff($birthdate, $now)->y;
				$_SESSION['age'] = $age;
				if ($_SESSION['age'] < 21) {
	    			header('Location: denied.php');
	    		}
				else if($_SESSION['age'] > 200){
					unset($_SESSION['age']);
					header('Location: index.php?error=Y');
				}
			}
			else{
				unset($_SESSION['age']);
				header('Location: index.php?error=Y');
			}
		}
		else{
			unset($_SESSION['age']);
			header('Location: index.php?error=Y');
		}
	}
	else if (!isset($_SESSION['age'])){
		header('Location: index.php');
	}
	else if ($_SESSION['age'] < 21 || $_SESSION['age'] > 200) {
    	header('Location: denied.php');
    }

	$all_pages = array("logo", "home", "product", "process", "about", "contact");
	
	$img_name_array = array(
		"logo" => "wild_cider_logo.png",
		"logoCurrentPage" => "wild_cider_logo.png",
		"home" => "home_static_1.png",
		"homeCurrentPage" => "home_hover_1.png",
		"product" => "product_static_1.png",
		"productCurrentPage" => "product_hover_1.png",
		"process" => "process_static_1.png",
		"processCurrentPage" => "process_hover_1.png",
		"about" => "about_static_1.png",
		"aboutCurrentPage" => "about_hover_1.png",
		"contact" => "contact_static_1.png",
		"contactCurrentPage" => "contact_hover_1.png"
	);
	
	// Produces the image change effect when the mouse hovers over a navigation button
	function changeOnHover($page, $is_current_page, $img_name_array){
		// A navigation button representing the current page does not change on mouse over
		if ($is_current_page){
			return;
		}
		
		// The name of the image when the mouse is not hovering over the button
		$img_name = $img_name_array[$page];
		
		// The name of the image when the mouse is hovering over the button
		$hover_img_name = $img_name_array[$page."CurrentPage"];
		
		// Commands the browser to change the image when the mouse enters or exits the button
		return 'onmouseover="this.src=\'../images/'.$hover_img_name.'\'"' .
			' onmouseout="this.src=\'../images/'.$img_name.'\'"';
	}
	
	// Produces the HTML code that forms one button in the navigation bar
	function li($page, $current_page, $img_name_array){
		
		// The name of the initial image
		$img_name = $img_name_array[$page];
		$is_current_page = false;
		if (!isset($_GET["entry"]) || $_GET["entry"]!="Y"){
			
			// Check if this page is the current page. If so, replace the image with the currentPage image.
			if ($page===$current_page){
				$img_name = $img_name_array[$page . "CurrentPage"];
				$is_current_page = true;
			}
			
		}
		echo '<li><a href="'.$page.'.php"> <img src="../images/'.$img_name.'" alt="'.$page.'" '.changeOnHover($page, $is_current_page, $img_name_array).'></a></li>';
	}
?>

<nav id="navigation">
	<ul class = "top_align">
		<?php
		
			// For each button, produce a li to represent it.
			foreach ($all_pages as $page){
				li($page, $current_page, $img_name_array);
			}
			
		?>
	</ul>
</nav>

<!-- Social media buttons
     Taken from http://jquery-plugins.net/responsive-share-buttons-css-and-jquery -->
<div id="share-wrapper">
	<ul class="share-inner-wrp">
		<!-- Facebook -->
		<li class="facebook button-wrap"><a href="#">Facebook</a></li>
		
		<!-- Twitter -->
		<li class="twitter button-wrap"><a href="#">Tweet</a></li>
		
		 <!-- Digg -->
		<li class="digg button-wrap"><a href="#">Digg it</a></li>
		
		<!-- Stumbleupon -->
		<li class="stumbleupon button-wrap"><a href="#">Stumbleupon</a></li>
	  
		 <!-- Delicious -->
		<li class="delicious button-wrap"><a href="#">Delicious</a></li>
		
		<!-- Google -->
		<li class="google button-wrap"><a href="#">Plus Share</a></li>
		
		<!--
		Email
		<li class="email button-wrap"><a href="#">Email</a></li>
		-->
	</ul>
</div>
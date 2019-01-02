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
	    			header('Location: mobiledenied.php');
	    		}
				else if($_SESSION['age'] > 200){
					unset($_SESSION['age']);
					header('Location: mobileindex.php?error=Y');
				}
			}
			else{
				unset($_SESSION['age']);
				header('Location: mobileindex.php?error=Y');
			}
		}
		else{
			unset($_SESSION['age']);
			header('Location: mobileindex.php?error=Y');
		}
	}
	else if (!isset($_SESSION['age'])){
		header('Location: mobileindex.php');
	}
	else if ($_SESSION['age'] < 21 || $_SESSION['age'] > 200) {
    	header('Location: mobiledenied.php');
    }
	
	// The mobilehome page is different. A navigation bar is not produced.
	if ($current_page != "mobilehome"){
	
		$all_pages = array("mobilehome", "mobileproduct", "mobileprocess", "mobileabout", "mobilecontact");
		$page_to_text_array = array(
			"mobilehome" => "Home",
			"mobileproduct" => "Product",
			"mobileprocess" => "Process",
			"mobileabout" => "About",
			"mobilecontact" => "Contact"
		);
		
		// Produces the HTML code for one button in the navigation bar
		function li($page, $current_page, $page_to_text_array){
			$addon = "";
			
			// If this page is the current page, set its class to currentPage.
			if ($page===$current_page){
				$addon = 'class="currentPage"';
			}
			echo '<li><a href="'.$page.'.php" '.$addon.'>
				<span>'.$page_to_text_array[$page].'</span></a></li>';
		}
?>

		<div class="navbar">
		    <ul class="navbar">
		    	<?php
		    	
		    		// For each page, produce the li for its button.
					foreach ($all_pages as $page){
						li($page, $current_page, $page_to_text_array);
					}
					
				?>
		    </ul>
		</div><!--navbar-->

<?php
	}
?>
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
		
		<link rel="stylesheet" type="text/css"
		href="../css/navigation.css"/>
		<link rel="stylesheet" type="text/css" href="../css/frame.css"/>
		<link rel="stylesheet" type="text/css" href="../css/social.css"/>
		<link rel="stylesheet" type="text/css" href="../css/about.css"/>
		<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>
		<script src="../js/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="../js/socialmedia.js" type="text/javascript"></script>
		<title>Wild Cider | About</title>
	</head>
	
	<body>
		<div id="page-layout">
			<?php
				$current_page = "about";
				include 'navigation.php';
				
				$bio_array = array("Company", "Elyce", "Ethan",
				"Valeria", "Mary", "Aditya");
			?>
			
			<div class="main">
				<ul id="sidebar">
					<?php
						foreach($bio_array as $value){
							echo '<li><a href = "#'.$value.'">'.$value.'</a></li>';
						}
					?>
				</ul>
				
				<div id="content">
					<div id="info">
					<h2 id = <?php echo $bio_array[0];?> >Company Overview</h2>
					Wild Cider is an LLC established in Fall of 2013 by Adi Ramesh,
					Elyce Buell, Ethan Keller, Mary Millard, and Valeria Mijares.
					Wild Cider brews hard cider in a sustainable, cost efficient way
					that minimizes overhead and variable costs. We minimize these
					costs by networking with those in the Cornell community to borrow
					and rent equipment for small amounts. Additionally, we work with
					local farmers to source organic apples from abandoned or
					over-productive apple trees.<br>
					<p></p>
					As a result we can produce a quality product very cheaply,
					and sell it for comparable prices, thus making a large profit.
					Wild Cider is based in Ithaca, NY, where a growing population,
					and an even faster growing taste for cider makes the demand high.
					Additionally, upstate NY is overloaded with untended apple trees
					ready to be picked, and college students willing to make a few
					dollars on the side.
					<p></p>
					The Wild Cider logo includes a deer because our brand is all about being local,
					and there is no resident more local than deer, especially in Ithaca. The antlers
					are entangled and fruit-bearing
					to convey said "wild" concept: the fact that we source all our apples from
					untended trees on farms where they would have spoiled regardless. We are saving a
					local, wild resource that often gets wasted. The red and yellow colors used in the logo
					evoke thoughts of autumn, which is the season in Ithaca when apples are most often sourced
					and when cider is most popular.
					<p></p>
					Finally, our company slogan, <i>"Made from everything we
					hold dear"</i> was created as play on words from the company logo.
					It establishes a personal connection between the brewers and the consumers as it
					assumes we share the same value and highlights our commitment to being healthy and organic. 
					</div><!--info-->
					<p></p>
					<div class = "bio_table" id = <?php echo $bio_array[1];?> >
						<div class = "bio_cell">
							<img class= "circleimg"
							title="Elyce"
							alt="Elyce"
							src="../images/elyce.jpg"/>
						</div><!--bio_cell_1-->
						<div class = "bio_cell">
							<h2>Elyce Buell</h2>
							Elyce is a Environmental Engineer at Cornell University.
							She loves the outdoors will do anything it takes to preserve it.
							Elyce is on the Woman&#39;s crew team and in her free time likes to
							identify trees. In the future Elyce would like to save the world
							among many other things. She loves efficiency which is why she
							is so excited to be working with &#8220;Wild Cider.&#8221;
						</div><!--bio_cell_2-->
					</div><!--bio table-->
					<p></p>
					<div class = "bio_table" id = <?php echo $bio_array[2];?> >
						<div class = "bio_cell">
							<h2>Ethan Keller</h2>
							Ethan is an environmental engineer on a mission to rid the world (which
							consists of Ithaca right now) of waste. He seeks waste as a treasure hunter
							hunts gold, finding ways to turn wasteful creations into useful material.
							To accomplish his mission,  he has built rain-water catchment towers,
							composting toilets, compost bins, art sculptures out of trash and now a
							cider company that uses otherwise wasted apples to produce organic &#8220;Wild Cider.&#8221;
						</div><!--bio_cell_1-->
						<div class = "bio_cell">
							<img class= "circleimg" title="Ethan" alt="Ethan" src="../images/ethan.jpg"/>
						</div><!--bio_cell_2-->
					</div><!--bio table-->
					<p></p>
					<div class = "bio_table" id = <?php echo $bio_array[3];?> >
						<div class = "bio_cell">
							<img class= "circleimg" title="Valeria" alt="Valeria" src="../images/valeria.jpg"/>
						</div><!--bio_cell_1-->
						<div class = "bio_cell">
							<h2>Valeria Mijares</h2>
							Valeria is a Biological Engineer / Natural Resource major
							at Cornell University. She loves anything to do with plants, soil, water,
							and sustainability. Since attending Cornell, Valeria has spent much of her
							time researching about sustainable farming methods and genetics of a variety
							of plants, including alfalfa and corn. It was only a matter of time until she
							would get involved with apples! Helping start up Wild Cider, LLC has been one of
							her most enjoyable endeavors to date.
						</div><!--bio_cell_2-->
					</div><!--bio table-->
					<p></p>
					<div class = "bio_table" id = <?php echo $bio_array[4];?> >
						<div class = "bio_cell">
							<h2>Mary Millard</h2>
							Mary is an Environmental Engineering major at Cornell University.
							She is passionate about sustainability and believes that every person in
							every field can make a difference in preserving our planet. In 2012, Mary
							worked on a student team to design and build a model adobe home in
							Nicaragua, and in 2013 she led a team to design and build energy efficient,
							affordable straw bale homes in Lansing, NY. Apples and Ithaca are among
							her favorite things. 
						</div><!--bio_cell_1-->
						<div class = "bio_cell">
							<img class= "circleimg" title="Mary" alt="Mary Millard" src="../images/mary.jpg"/>
						</div><!--bio_cell_2-->
					</div><!--bio table-->
					<p></p>
					<div class = "bio_table" id = <?php echo $bio_array[5];?> >
						<div class = "bio_cell">
							<img class= "circleimg" title="Aditya" alt="Aditya" src="../images/aditya.jpg"/>
						</div><!--bio_cell_1-->
						<div class = "bio_cell">
							<h2>Aditya Ramesh</h2>
							Adi Ramesh is currently a senior in the College of Agriculture and
							Life Sciences. He is majoring in Biological Engineering and expects
							to have a minor in Applied Economics and Management. Adi looks
							forward to understanding the ins-and-outs of the cider industry
							so he can supply organic, gluten-free hard apple cider for his
							fellow Ithacan residents. The concept of using &#8220;wasted&#8221; apples
							to get people wasted is something he holds dear to his heart!	
						</div><!--bio_cell_2-->
					</div><!--bio table-->
				</div><!--content-->
				<br>
				<br>
				<br>
				<p class="cen"><img src="../images/apple_strip.png" alt="apple strip"/></p>
				<br>
			</div><!--main-->
			<?php include "footer.php" ?>
		</div><!--page-layout-->
		<script src="../js/about.js"></script>
	</body>
</html>
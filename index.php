<html>
	<head>
		<title><?php bloginfo("name"); ?></title>
		<link href="<?php bloginfo("template_directory"); ?>/css/base.css" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo("template_directory"); ?>/css/skeleton.css" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo("template_directory"); ?>/css/layout.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="banner">
			<h1>HERO TEXT</h1>
			<ul id="nav">
				<?php 
					$args = array('container' => false); 
					wp_nav_menu($args); 
				?>
			</ul>
		</div>
		<div id="mainContent" class="container">
			<section id="one" class="six columns">
				<h2>Innovate</h2>
				<p>Organic DIY pug crucifix, butcher YOLO squid shabby chic Cosby sweater viral kitsch XOXO salvia. Cray Portland forage, Schlitz meggings trust fund skateboard. Tousled blog retro master cleanse plaid. Street art banjo master cleanse keffiyeh, ethical four loko Tonx locavore ethnic Bushwick pop-up VHS. Blog chambray Schlitz +1 single-origin coffee. Narwhal gluten-free selfies keffiyeh, yr flexitarian Bushwick Truffaut sustainable. Brooklyn ugh cardigan, freegan plaid farm-to-table kitsch.</p>
			</section>
			<section id="two" class="six columns">
				<h2>Intoxicate</h2>
				<p>Cleanse plaid. Street art banjo master cleanse keffiyeh, ethical four loko Tonx locavore ethnic Bushwick pop-up VHS. Blog chambray Schlitz +1 single-origin coffee. Narwhal gluten-free selfies keffiyeh, yr flexitarian Bushwick Truffaut sustainable. Brooklyn ugh cardigan, freegan plaid farm-to-table kitsch.</p>
			</section>
			<section id="three" class="four columns">
				<h2>Intubate</h2>
				<ul>
					<li>Street art.</li>
					<li>Narwhal gluten-free.</li>
					<li>farm-to-table kitsch.</li>
				</ul>
			</section>
		</div>
	</body>
</html>
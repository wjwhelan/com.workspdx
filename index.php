<?php
	include('header.php');
?>

<body>

<header class="shadow">
	<div class="container_12">
		<div class="grid_2">
			<div class="logo">
				<a href="#bottom"><img src="assets/images/logo_45.jpg" /></a>
			</div>	
		</div>
		<div class="grid_10">
			<nav>
				<a id="nav_process">&nbsp;Process&nbsp;</a>
			    <a id="nav_portfolio">&nbsp;Portfolio&nbsp;</a>
		        <a id="nav_contact">&nbsp;Contact&nbsp;</a>
			</nav>
		</div>
	</div>
</header>

<div class="clear"></div>

<section class="content">
	<div class="container_12">
	        <?php include('slide1.php'); ?>
	        <?php include('slide2.php'); ?>
	        <?php include('slide3.php'); ?>
	</div>
</section>

<div class="clear"></div>

<?php
	include('footer.php');
?>
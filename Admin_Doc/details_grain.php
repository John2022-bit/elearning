<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html class="no-js"> 
<head>
	<meta charset="utf-8">
	<title>Mon espace - FPCA</title>
	<meta name="description" content="">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- <link rel="shortcut icon" href="img/favicon.png"> -->
	
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
	
	<!-- Syntax Highlighter -->
	<link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shCore.css" media="all">
	<link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shThemeDefault.css" media="all">
	
	<!-- Font Awesome CSS-->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Normalize/Reset CSS-->
	<link rel="stylesheet" href="css/normalize.min.css">
	<!-- Main CSS-->
	<link rel="stylesheet" href="css/main.css">
	
</head>

<body id="welcome">
	
	<aside class="left-sidebar">
		<div class="logo">
			<a href="#welcome">
				<img src="img/LogoCapou.png" alt="">
			</a>
		</div>
		<nav class="left-nav">
			<ul id="nav">
				<li class="current"><a href="#objec">Objectif pédagogique</a></li>
				<li><a href="#installation">Définition et Enjeux de l'Agronomie</a></li>
			</ul>
			<a href="../logout.php">Retour sommaire</a>
		</nav>
	</aside>
	
	<div id="main-wrapper">
		<div class="main-content">
			<section id="Objectif">
				<div class="content-header">
					<p>Bienvenue, <?php echo htmlspecialchars($_SESSION["user_name"]); ?> !</p>
					<h1>Introduction à l'agronomie générale</h1>
				</div>
				<div class="welcome">
					<h2 class="twenty">Objectif pédagogique de l'unité</h2>
					<p>Poser les bases fondamentales de l'agronomie et de son rôle face aux enjeux contemporains.!</p>
				</div>
				
			</section>
			
			<section id="installation">
				<div class="content-header">
					<h1>Définition et Enjeux de l'Agronomie</h1>
				</div>
				<div>
				    <img class="img-fluid" src="img/paysagiste.png" alt="">
				    </div>
				
				<p>
				    L'agronomie est la science qui étudie les processus de production végétale et animale. Elle joue un rôle crucial dans la gestion des agroécosystèmes, en tenant compte des interactions complexes entre le sol, les plantes, les animaux, le climat et les humains. Les enjeux de l'agronomie incluent la nécessité de nourrir une population mondiale croissante, de préserver les ressources naturelles, de s'adapter au changement climatique et de promouvoir une agriculture durable.
				</p>
			</section>
			<!-- Start info Area -->
			<section class="info-area pb-120">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 no-padding info-area-left">
							<img class="img-fluid" src="img/paysagiste.png" alt="">
						</div>
						<div class="col-lg-6 info-area-right">
							<h1>Who we are
							to Serave the nation</h1>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.</p>
							<br>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End info Area -->
			<section id="tmpl-structure">
				<h2 class="title">Template Structure</h2>
				<p class="fifteen">All information within the main content area is nested within a body tag. The general template structure is pretty the same throughout the template. Here is the general structure of main page (index.html).</p>
				            <pre class="brush: html">
					                <header class="site-header">
						                
					                </header>
					                <main class="site-main">
						                <section class="section">
							                
						                </section>
						                <section class="section">
							                
						                </section>
						                <section class="section">
							                
						                </section>
					                </main>
					                <footer class="site-footer">
						                
					                </footer>
				</pre>
			</section>

			<section id="video">
				<h2 class="title"> Video Tutorial </h2>
				<!-- 21:9 aspect ratio -->
				<div class="embed-responsive embed-responsive-21by9">
					<iframe class="embed-responsive-item" width="100%" height="515" src="https://www.youtube.com/embed/i7_PRPLOxVE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</section>
			<section id="credit">
				<h2 class="title">Source and Credit</h2>
				<div class="script-source">
					<ul>
						<li><a target="_blank" href="http://www.pexels.com">Pexels</a></li>
						<li><a target="_blank" href="http://jquery.com/">jQuery</a></li>
						<li><a target="_blank" href="http://getbootstrap.com">Bootstrap Framework</a></li>
						<li><a target="_blank" href="http://www.owlgraphic.com/owlcarousel">Owl Carousel</a></li>
						<li><a target="_blank" href="https://github.com/iamMonzurul/jQuery-AJAX-MailChimp">Ajax Mailchimp</a></li>
						<li><a target="_blank" href="http://fontawesome.io/">FontAwesome</a></li>
						<li><a target="_blank" href="http://dimsemenov.com/plugins/magnific-popup/">Magnefic Pop Up</a></li>
						<li><a target="_blank" href="http://hernansartorio.com/jquery-nice-select/">Nice Select</a></li>
						<li><a target="_blank" href="https://linearicons.com/">Linear Icons</a></li>
					</ul>
				</div>
			</section>
		</div>
	</div>
	
	
	<!-- Essential JavaScript Libraries
	==============================================-->
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.nav.js"></script>
	<script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script>
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script>
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script>
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script>
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script>
	<script type="text/javascript">
	SyntaxHighlighter.all()
	</script>
	<script type="text/javascript" src="js/custom.js"></script>
	
</body>
</html>

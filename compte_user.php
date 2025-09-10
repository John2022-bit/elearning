	<?php
	session_start();
	if (!isset($_SESSION["user_id"])) {
		header("Location: login.html");
		exit();
	}
	?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>FPCA de Tarn-et-Garonne - Formation & Apprentissage</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
			<style>
                .fixed-section {
                    position: fixed;
                    top: 50%; /* Ajustez cette valeur pour positionner la section verticalement */
                    right: 0;
                    transform: translateY(-50%);
                    width: 200px; /* Ajustez la largeur selon vos besoins */
                    background-color: #f8f9fa; /* Couleur de fond pour la section */
                    padding: 20px;
                    border-left: 1px solid #dee2e6; /* Bordure pour séparer la section du contenu */
                }
            </style>
	</head>
		<body>	
		  <header id="header" id="home">
		  
	  		<?php include('header-top.php'); ?>

		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      
				  <!-- Logo du centre de formation-->
				  <?php include('logo-banner.php'); ?>
				  
				  <!-- Menu de navigation -->
			      <?php include('nav.php'); ?>
				  
		    	</div>
		    </div>
		  </header><!-- #header -->
		  <!-- #header -->
		  <!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Bienvenue, <?php echo htmlspecialchars($_SESSION["user_name"]); ?> ! 	
							</h1>	
							<p>Vous êtes connecté avec succès.</p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			
		    <!-- Cours -->
			<section class="post-content-area">
				<div class="container">
					<div class="row">
					    <!-- cours suivis-->
						<div class="col-lg-8 posts-list">
						    <span >
						        <h2 id="cours-suivis">Cours suivis</h2>
						        <hr>
						       <div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										<li><a href="#">Argiculture</a></li>
										<li><a href="#">Maintenance</a></li>
									</ul>
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">24% de progression</a> <span class="lnr lnr-chart-bars"></span></p>
                                        <p class="date col-lg-12 col-md-12 col-6"><a href="#">Démarré le, 18 décembre 2024</a> <span class="lnr lnr-calendar-full"></span></p>
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<img class="img-fluid" src="img/blog/agro1.png" alt="">
									</div>
									<a class="posts-title" href="course-details.html"><h3>Agronomie générale</h3></a>
									<a href="course-details.php" class="primary-btn">Continuer le cours</a>
									<a href="#" class="genric-btn danger-border">Ne plus suivre</a>
								</div>
							</div>
						    </span>
						    <!-- cours recommandés -->
						    <span id="cours-recommandes">
						        <h2>Cours recommandés</h2>
						        <hr>
						       <div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										<li><a href="#">Argiculture</a></li>
										<li><a href="#">Maintenance</a></li>
									</ul>
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">0% de progression</a> <span class="lnr lnr-chart-bars"></span></p>
                                        <p class="date col-lg-12 col-md-12 col-6"><a href="#">Démarré le </a> <span class="lnr lnr-calendar-full"></span></p>
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<img class="img-fluid" src="img/blog/img2.png" alt="">
									</div>
									<a class="posts-title" href=""><h3>Optimiser la gestion de votre sol</h3></a>
									<a href="" class="primary-btn">Suivre le cours</a>
								</div>
							</div>
						    </span>
						    <!-- cours terminés -->
						    <span id="cours-termines">
						        <h2>Cours terminés</h2>
						        <hr>
						       <div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										<li><a href="#">Argiculture</a></li>
										<li><a href="#">Maintenance</a></li>
									</ul>
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">100% de progression</a> <span class="lnr lnr-chart-bars"></span></p>
                                        <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Démarré le, 8 octobre 2024</a> <span class="lnr lnr-calendar-full"></span></p>
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">
									</div>
									<a class="posts-title" href=""><h3>Astronomy Binoculars A Great Alternative</h3></a>
									<a href="" class="primary-btn">Voir votre résultat</a>
								</div>
							</div>
						    </span>
						</div>
						
						<!-- sections liens vers les cours -->
						<div class="col-lg-4 sidebar-widgets fixed-section">
							<div class="widget-wrap">
								<div class="single-sidebar-widget user-info-widget">
									<img src="img/blog/user-info.png" alt="">
									<a href="#"><h4><?php echo htmlspecialchars($_SESSION["user_name"]); ?></h4></a>
									<p>
										BP REA 
									</p>
								</div>
								<div class="single-sidebar-widget post-category-widget">
									<h4 class="category-title">Cours</h4>
									<ul class="cat-list">
										<li>
											<a href="#cours-suivis" class="d-flex justify-content-between">
												<p>Cours suivis</p>
												<p>1</p>
											</a>
										</li>
										<li>
											<a href="#cours-recommandes" class="d-flex justify-content-between">
												<p>Cours recommandés</p>
												<p>1</p>
											</a>
										</li>
										<li>
											<a href="#cours-termines" class="d-flex justify-content-between">
												<p>Cours terminés</p>
												<p>1</p>
											</a>
										</li>															
									</ul>
								</div>								
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
			<?php include('footer.php'); ?>
			<!-- start footer Area -->		
	


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>
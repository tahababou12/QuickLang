
<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>

<!-- This file is for the design of the header (black logo) and  -->

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/icon.png">
	<!-- Author Meta -->
	<meta name="author" content="Colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Quicklang © - Learn English with Simplicity</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
		<!--
		CSS ============================================= -->
		<link rel="stylesheet" href="css/linearicons.css"> <!-- Game logos CSS HOMEPAGE--> 
		<link rel="stylesheet" href="css/owl.carousel.css"> <!-- Login/Register Slider-->
		<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Score, back, logout, facebook-->
		<link rel="stylesheet" href="css/nice-select.css"> <!-- Multiple Choice in Listen&Write and Pics&Words-->
		<link rel="stylesheet" href="css/magnific-popup.css"><!-- Congratulations end of game score-->
		<link rel="stylesheet" href="css/bootstrap.css"> <!-- Adjustments in sizes for all platforms (mobile, computer…)-->
		
		<link rel="stylesheet" href="css/main.css"> <!-- Fonts, page structure-->
		<link href="css/flag-icon.css" rel="stylesheet"><!-- Flags-->
		<link href="css/login.css" rel="stylesheet"><!-- Login/Register Style/Design-->
		
		<!-- sunset ui kit !-->
		<?php if ( (($_SERVER['PHP_SELF']) != '/index.php') && (($_SERVER['PHP_SELF']) != '/register.php') ) { ?>
		<link href="css/sunset.css" media="screen" rel="stylesheet"> <!-- Welcome Ribbon-->
		<?php } ?>
		

	</head>
	<body>
		<!-- <div class="oz-body-wrap">  -->
		<!-- Start Header Area -->
		<div class="header">

<?php    
  ########condition if user is in a game page (writing/listen/pair/translate/complete/pics) the logo link will redirect to games home page else the logo link will redirect to global  home page ############"

if ( (($_SERVER['PHP_SELF']) == '/writing.php')  ||      (($_SERVER['PHP_SELF']) == '/listen.php')    ||   (($_SERVER['PHP_SELF']) == '/pics.php')   ||        (($_SERVER['PHP_SELF']) == '/pair.php')  ||     (($_SERVER['PHP_SELF']) == '/translate.php')  || (($_SERVER['PHP_SELF']) == '/complete.php') ) {
	  $logo_link='start';
  } else {
	  $logo_link ='https://www.quicklang.net';  
  }
  ?>
  <a href="<?php echo $logo_link; ?>"><img src="img/logo_quick.jpg"></a>
  
  <div class="header-right">
							
  </div>
</div>
		<!-- End Header Area -->

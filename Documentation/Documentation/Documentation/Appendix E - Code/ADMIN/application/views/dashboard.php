<!DOCTYPE html>
<html>
<head>
<title>REGION ORIENTAL - Admin Contenu Editorial</title>
	<meta charset="utf-8" />
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/panel/dashboard'); ?>/lib/bootstrap/css/bootstrap.css">
    <link href="<?php echo base_url('assets/panel/dashboard'); ?>/lib/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    
    
 
    <script src="<?php echo base_url('assets/panel/dashboard'); ?>/lib/jquery-1.11.1.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url('assets/panel/dashboard'); ?>/lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>


    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/panel/dashboard'); ?>/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/panel/dashboard'); ?>/stylesheets/premium.css">
    
    
    
    
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body class=" theme-blue">


    <!-- Demo page code -->

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
  

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
   
  <!--<![endif]-->

    <div class="navbar navbar-default" role="navigation">
<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="#"><span class="navbar-brand">REGION ORIENTAL  - Admin Panel :. </span></a></div>


<div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>ADMINISTRATEUR
                   <i class="fa fa-caret-down"></i>
                </a>
 <ul class="dropdown-menu">
               
                <li class="divider"></li>
                
                <li><a tabindex="-1" href="<?php echo site_url('authentification/logout')?>">Déconnexion</a></li>
              </ul>
             

        </div>
      </div>
    </div>




       

 <div class="sidebar-nav">
 <h3 style="background-color: #c29613;
}">CONTENU HOME PAGE Version FRANCAISE</h3>
    <ul>
   
    <li><ul class="dashboard-menu nav nav-list collapse in">
	 <li>	<a href='<?php echo site_url('dashboard/home_slider')?>'><span class="fa fa-caret-right"></span> Slider Home Page</a></li>
        <li ><a href="<?php echo site_url('dashboard/actualites')?>"><span class="fa fa-caret-right"></span> Gestion Actualités</a></li>
      <li>	<a href='<?php echo site_url('dashboard/publications')?>'><span class="fa fa-caret-right"></span> Annonces & Publications</a></li>
	        <li>	<a href='<?php echo site_url('dashboard/medias')?>'><span class="fa fa-caret-right"></span> Mediatheques AR/FR</a></li>
			<li>	<a href='<?php echo site_url('dashboard/discours')?>'><span class="fa fa-caret-right"></span> Discours du président</a></li>
			<li>	<a href='<?php echo site_url('dashboard/events')?>'><span class="fa fa-caret-right"></span> Événements</a></li>
			<li>	<a href='<?php echo site_url('dashboard/agenda')?>'><span class="fa fa-caret-right"></span> Agenda du président</a></li>
	  
	  
	  
	  <h3 style="background-color: #186A3B;
}">CONTENU HOME PAGE Version ARABE</h3>
    <ul>
   
    <li><ul class="dashboard-menu nav nav-list collapse in">
	 <li>	<a href='<?php echo site_url('dashboard/home_slider_ar')?>'><span class="fa fa-caret-right"></span> Slider Home Page</a></li>
        <li ><a href="<?php echo site_url('dashboard/actualites_ar')?>"><span class="fa fa-caret-right"></span> Gestion Actualités</a></li>
      <li>	<a href='<?php echo site_url('dashboard/publications_ar')?>'><span class="fa fa-caret-right"></span> Annonces & Publications</a></li>
	        <li>	
			<li>	<a href='<?php echo site_url('dashboard/discours_ar')?>'><span class="fa fa-caret-right"></span> Discours du président</a></li>
			<li>	<a href='<?php echo site_url('dashboard/events_ar')?>'><span class="fa fa-caret-right"></span> Événements</a></li>
			<li>	<a href='<?php echo site_url('dashboard/agenda_ar')?>'><span class="fa fa-caret-right"></span> Agenda du président</a></li>
	  
	  
	  
	  
	  

	   <h3 style="background-color: #c29613;
}">ELUS REGIONAUX</h3>
	  
	  <li>	<a href='<?php echo site_url('dashboard/provinces')?>'><span class="fa fa-caret-right"></span> Provinces</a></li>
	  <li>	<a href='<?php echo site_url('dashboard/partis')?>'><span class="fa fa-caret-right"></span> Partis Politiques</a></li>
	  <li>	<a href='<?php echo site_url('dashboard/elus')?>'><span class="fa fa-caret-right"></span> Elus</a></li>
	  <h3 style="background-color: #c29613;
}">BUREAU</h3>
	  
	   
	  <li>	<a href='<?php echo site_url('dashboard/bureau')?>'><span class="fa fa-caret-right"></span> Bureau conseil régional</a></li>
	
	    <h3 style="background-color: #c29613;
}">CONTENU EDITORIAL</h3>
	  
	  
	  
	   <li><a href="<?php echo site_url('dashboard/content')?>"><span class="fa fa-caret-right"></span>   Gestion du contenu Version française</a></li>
		   
       
	   
	   
	  
	  
	  
	  
	   <li><a href="<?php echo site_url('dashboard/content_ar')?>"><span class="fa fa-caret-right"></span>   Gestion du contenu Version arabe</a></li>
	   
          
    </ul></li>

   
	   
	   
	   
    </div>



    <div class="content">
        <div class="header">

           

        </div>
        <div class="main-content">
            


 <div>
		<?php echo $output; ?>
    </div>






            <footer>
                <hr>

           
             
                <p>© 2018 <a href="http://www.motivenco.ma" target="_blank">MOTIVENCO ©</a></p>
            </footer>
        </div>
    </div>


    <script src="<?php echo base_url('assets/panel/dashboard'); ?>/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>

































	
	<div style='height:20px;'></div>  
    <div>
		<?php //echo $output; ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>REGION ORIENTAL - Admin Contenu Editorial</title>
<meta name="description" content="EXPO MILANO 2015">
<meta name="author" content="TRIBAL DDB">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/panel/css/style.css" />
</head>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Authentification</h1>
			</div>

			<div class="login-form">
				<div class="control-group">
                  <?php 
		$attributes = array('name' => 'login_form', 'id' => 'slick-login');
		?> <?php echo form_open("authentification/login", $attributes);?>
        
				<input type="text" class="login-field" value="" placeholder="Login" id="identity" name="identity">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="Mot de passe" id="password" name="password">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				
				<a class="btn btn-primary btn-large btn-block" href="#" onclick="document.getElementById('slick-login').submit();">Se Connecter</a>
                
                <a class="login-link" ><div id="message" align="center"><span style="color:#FF0000"><?php echo $message; ?></span> </div></a>
			
			</div>  <?php echo form_close();?>
			
		</div>
	</div>
	<div align="center"><img src="<?php echo base_url(); ?>assets/logo.png"></div>
</body>
</html>
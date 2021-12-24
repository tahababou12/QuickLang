<?php include("inc/header.php");
session_start(); ?>
	<!-- Start Banner Area -->
		<section class="login-area relative">
			<div class="container">
				<div class="row fullscreen align-items-center justify-content-center">
				<div class="col-lg-12 signform">
					
			<div class="veen">
			
			<div class="wrapper">
				<form id="login" tabindex="500" action="recover" method="POST">
					<h3>Recover password</h3>
					<?php  
					####### test error if email non existant in database show message #######
					if (isset($_SESSION['error'])) {
					$error=$_SESSION['error']; 
					if ($error==1) {
						$message='The email address you entered is not associated with a QuickLang account. Please try again.' ."\r\n" ."\r\n";
					} else {
						$message='<span class="error">Enter the email associated with your account in the text box and then click the "Recover" button.</span><br/><br/>';
					}
					}
					?>
					<?php echo $message; ?>
					<div class="mail">
						<input type="mail" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
						<label>E-mail</label>
					</div>
					
					
					<div class="submit">
						<button class="dark">Recover</button>
					</div>
				</form>
				
			</div>
		</div>	

				</div>
				</div>
			</div>
		</section>

<?php include("inc/footer.php"); ?>
<?php  include("inc/footer_close.php"); ?>
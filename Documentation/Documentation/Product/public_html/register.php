<?php include("inc/header.php");
session_start();
 ?>
		<!-- Start Banner Area -->
		<section class="login-area relative">
			<div class="container">
				<div class="row fullscreen align-items-center justify-content-center">
				<div class="col-lg-12 signform">
					
<div class="veen">
			<div class="login-btn splits">
				<p>Already a user?</p>
				<?php  
				###################### initialising variables #####################################
				$value='';
				$login='login';
				$forgot='';
				$message='';
				if (isset($_SESSION['error'])) {
					$error=$_SESSION['error'];
					###################### test errors number if error 1 or if error 2 !!##################################### 
					switch ($error) {
						case 1:
					$message='<i class="error">Email already registered.</i></br></br>';					
					$email_error=$_SESSION['error_email'];
					$value='value="'.$email_error.'"';
					$forgot='';
					break;
						case 2:
					$message='<i class="error">Wrong password</i></br></br>';
					$forgot='<u class="reset"><a href="reset">Recover password</a></u></br></br>';
					break;
						case 3:
					$message='<i class="error">The Password recovery email has been sent to your on-file email address</i></br></br>';	
					$forgot='';
							break;
					}
					###################### end errors test#####################################
				}  ?>

		<!-- LOGIN FORM -->
			<button class="active">Login</button>
			</div>
			<div class="rgstr-btn splits">
				<p>Don't have an account?</p>
				<button>Register</button>
			</div>
			<div class="wrapper">
				<form id="login" tabindex="500" action="login" method="POST">
					<h3>Login</h3>
					<?php echo $message; ?>
					<div class="mail">
						<input type="mail" name="email" <?php echo $value; ?> <pattern="[a-z0-9._%+-]+[A-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
						<label>E-mail</label>
					</div>
					<div class="passwd">
						<input type="password" name="password" pattern=".{6,}"
 title="Please enter at least 6 characters" required>
						<label>Password</label>
					</div>
					<?php echo $forgot; ?>
					<div class="submit">
						<button class="dark">Login</button>
					</div>
				</form>
				<form id="register"  action="adduser" tabindex="502" method="POST">
					<h3>Register</h3>
					<div class="name">
						<input type="text" name="firstname" pattern="[a-zA-Z][a-zA-Z0-9\s]*" required>
						<label>First Name</label>
					</div>
					<div class="name">
						<input type="text" name="lastname"  pattern="[a-zA-Z][a-zA-Z0-9\s]*" required> 
						<label>Last Name</label>
					</div>
					<div class="mail">
						<input type="mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$+\.[A-Z]{2,}$" required>
						<label>E-Mail</label>
					</div>
					
					
					<div class="passwd">
						<input type="password" name="password" title="Please enter at least 6 characters" pattern=".{6,}" required>

</a>
						  <label>Password</label>
					</div>
					<div class="submit">
						<button class="dark">Register</button>
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

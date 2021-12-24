<?php include("inc/header.php"); ?> <!-- Includes the header.php file (Black Header with Title of Page) -->
		
		<?php #### BODY CODE FOR THE MAIN PAGE - INCLUDES RUSSELL, SLOGAN, AND GET STARTED #### ?>
		
		<!-- Start Banner Area -->
		<section class="banner-area relative">
			<div class="container">
				<div class="row fullscreen align-items-center justify-content-center">
					<div class="banner-left col-lg-6">
						<img class="d-flex mx-auto img-fluid" src="img/russel.jpg" alt=""> <!-- Owl Image -->
					</div>
					<div class="col-lg-6"> 
					<div class="story-content">
							<h1>Learn <span class="sp-1">English</span><br>
							With simplicity <span class="sp-2">Forever</span></h1>
							<a href="register" class="genric-btn primary circle arrow">Get Started<span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Start Feature Area -->
		
		<?php #### ÉCRITURE/WRITING CODE - POSITIONING, EEFECT, DESCRIPTIONS#### ?>
		<section class="feature-area pt-100 pb-100  relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
						<div class="single-feature">
							<div class="icon">
								<span class="lnr lnr-pencil"></span>
							</div>
							<div class="desc">
								<h2 class="text-uppercase">Écriture / Writing</h2>
								<p>					 
		                          <span class="flag-icon flag-icon-fr"></span> Réécrire les phrases anglaises en français.<br/><br/> 
		                            <span class="flag-icon flag-icon-gb"></span> Rewrite English sentences in French.
								</p>
							</div>
						</div>
					</div>

		<?php #### PICS + WORDS CODE - POSITIONING, EEFECT, DESCRIPTIONS#### ?>
					<div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
						<div class="single-feature">
							<div class="icon">
								<span class="lnr lnr-picture"></span>
							</div>
							<div class="desc">
								<h2 class="text-uppercase">Images & Mots <br/>Pics & Words</h2>
								<p>
									 <span class="flag-icon flag-icon-fr"></span>  Choisissez l'image correspondante au mot affiché.<br/><br/>
									 <span class="flag-icon flag-icon-gb"></span>  Choose the image corresponding to the displayed  word .<br/>
								</p>
							</div>
						</div>
					</div>
				
		<?php #### COMPLETE THE SENTENCE CODE - POSITIONING, EEFECT, DESCRIPTIONS#### ?>
					<div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
						<div class="single-feature">
							<div class="icon">
								<span class="lnr lnr-highlight"></span>
							</div>
							<div class="desc">
								<h2 class="text-uppercase">Complétez la phrase <br/>Complete the sentence</h2>
								<p><ul>
									 <span class="flag-icon flag-icon-fr"></span>  Choisissez le mot manquant pour compléter la phrase .<br/><br/>
									 <span class="flag-icon flag-icon-gb"></span>  Choose the missing word to complete the sentence.
								</p>
							</div>
						</div>
					</div>
					
		<?php #### JEU DE PAIRES CODE - POSITIONING, EEFECT, DESCRIPTIONS#### ?>
					<div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
						<div class="single-feature">
							<div class="icon">
								<span class="lnr lnr-dice"></span>
							</div>
							<div class="desc">
								<h2 class="text-uppercase">Jeu de paires / Pair game</h2>
								<p>
									<span class="flag-icon flag-icon-fr"></span> Tapez sur les paires de mots, du même endroit.<br/><br/>
									<span class="flag-icon flag-icon-gb"></span> Hit the pairs of words, from the same place.
								</p>
							</div>
						</div>
					</div>

		<?php #### LISTEN + WRITE CODE - POSITIONING, EEFECT, DESCRIPTIONS#### ?>
					<div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
						<div class="single-feature">
							<div class="icon">
							<span class="lnr lnr-bullhorn"></span>
							</div>
							<div class="desc">
								<h2 class="text-uppercase"> <br>Écoutez & ecrivez / Listen & write</h2>
								<p>
									 <span class="flag-icon flag-icon-fr"></span>  Choisissez le mot qui entendu par la voix qui parle. <br/><br/>
									 <span class="flag-icon flag-icon-gb"></span>  Choose the word  heard by the speaking voice.
								</p>
							</div>
						</div>
					</div>

		<?php #### TRANSLATION/TRADUCTINO CODE - POSITIONING, EEFECT, DESCRIPTIONS#### ?>
					<div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
						<div class="single-feature">
							<div class="icon">
							<span class="lnr lnr-bubble"></span>
							</div>
							<div class="desc">
								<h2 class="text-uppercase">Traduction / Translation</h2>
								<p>
									 <span class="flag-icon flag-icon-fr"></span>  Traduisez une phrase du français vers l'anglais et de l'anglais vers le français.<br/><br/>
									 <span class="flag-icon flag-icon-gb"></span>  translate a sentence from French to English and from English to French.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Start Contact Form Area -->
		<a name="contact"></a>
		<section class="contact-area pt-100 pb-100 relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="single-contact col-lg-6 col-md-8">
						<h2 class="text-white">Send Us <span>Message</span></h2>
						<p class="text-white">
							Dans le souci d'améliorer sans cesse cette application, n'hésitez pas à nous laisser un message afin de nous faire partager vos impressions, vos remarques ou suggestions. Merci !
							<br/><br/>
							In order to constantly improve this application, please leave us a message to share your impressions, comments or suggestions. Thank you !
						</p>
					</div>
				</div>
			
			<?php ######   The codes below is for the data on the form to go to file mail.php after clicking on the submit button #######   ?>
				<form id="myForm" action="mail.php" method="post" class="contact-form"> <!-- Once the user inputs all the neccessary data below, send the data to mail.php to proceed action -->
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-20" required="" type="text">
						</div>
						<div class="col-lg-5">
							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-20" required="" type="email">
						</div>
						<div class="col-lg-10">
							<textarea class="common-textarea mt-20" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
					</div>
					<div class="col-lg-10 d-flex justify-content-end">
						<button class="primary-btn white-bg d-inline-flex align-items-center mt-20"><span class="mr-10">Send / Envoyez </span><span class="lnr lnr-arrow-right"></span></button> <br>
					</div>
					<div class="alert-msg"></div>
					</div>
				</form>
			</div>
		</section>
		<!-- End Contact Form Area -->
		
<?php include("inc/footer.php"); ##Bottom part of the page?>
<?php include("inc/footer_close.php"); ?>
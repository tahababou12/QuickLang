<?php include("services/check.php"); ?>
<?php include("inc/header.php"); ?>
		<!-- Start Banner Area -->
		
		<!-- Start Feature Area -->
			<section class="banner-area relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row">
				 <div class="col-md-4 col-sm-offset-1">
                        <div class="ribbons">
                            <!-- Ribbons -->
                         <?php ########calling first name variable stored in session after login ############?>
                            <div class="ribbon ribbon-blue"><span>Welcome  <?php echo $_SESSION['firstname']; ?></span> </div>   
                            <!--/ Ribbons -->
                        </div>
                    </div>
				<div class="col-md-8 text-right" style="margin-top:25px"><a href="logout" class="btn btn-secondary btn-sm"><span><i style="color:white" class="fa fa-sign-out"></i>&nbsp;Logout&nbsp;</span></a></div>
				
				</div> <!-- end row div -->
				
				<div class="row">	
				    <div class="col-md-2">
				<!-- Avatar Placeholder -->
                 <div class="widget-container widget_avatar boxed">
                    <div class="inner">
                        <h5>Écriture</h5>
                        <span class="subtitle">Writing </span>
                        <div class="avatar"><img src="img/write.jpg" alt="" /></div>
                        <div class="followers">
						<span>Top Score</span>    
						    <?php ######## showing top_s1 top score variable for game1 from recieved from check.php with a sql request (SELECT TOP SCORE from game where id_game=1) ############?>
                                <span class="counter"><?php  echo $top_s1;?></span>
                        </div>
                        <div class="follow">
                            <a href="writing" class="genric-btn info circle text-decoration-none"><span>Play</span></a>
                        </div>
                    </div>
                </div>
                <!--/ Avatar Placeholder -->
				</div>	
				<div class="col-md-2">
				<!-- Avatar Placeholder -->
                <div class="widget-container widget_avatar boxed">
                    <div class="inner">
                        <h5>Images & Mots</h5>
                        <span class="subtitle">Pics & Words</span>
                        <div class="avatar"><img src="img/word.jpg" alt="" /></div>
                        <div class="followers">
						    <span>Top Score</span>
                                <span class="counter"><?php  echo $top_s2;?></span>
                        </div>
                        <div class="follow">
                            <a href="pictures" class="genric-btn info circle text-decoration-none"><span>Play</span></a>
                        </div>
                    </div>
                </div>
                <!--/ Avatar Placeholder -->
				</div>
				<div class="col-md-2">
				<!-- Avatar Placeholder -->
                <div class="widget-container widget_avatar boxed">
                    <div class="inner">
                        <h5>Complétez La phrase </h5>
                        <span class="subtitle">Complete the sentence</span>
                        <div class="avatar"><img src="img/complete.jpg" alt="" /></div>
                        <div class="followers">
						<span>Top Score</span>
                            <span class="counter"><?php  echo $top_s3;?></span>
                        </div>
                        <div class="follow">
                            <a href="complete" class="genric-btn info circle text-decoration-none"><span>Play</span></a>
                        </div>
                    </div>
                </div>
                <!--/ Avatar Placeholder -->
					</div>

				<div class="col-md-2">
					<!-- Avatar Placeholder -->
                 <div class="widget-container widget_avatar boxed">
                    <div class="inner">
                        <h5>Jeu de paires</h5>
                        <span class="subtitle">Pair game</span>
                        <div class="avatar"><img src="img/dice.jpg" alt="" /></div>
                        <div class="followers">
						<span>Top Score</span>
                            <span class="counter"><?php  echo $top_s4;?></span>
                        </div>
                        <div class="follow">
                            <a href="pair" class="genric-btn info circle text-decoration-none"><span>Play</span></a>
                        </div>
                    </div>
                </div>
                <!--/ Avatar Placeholder -->
					</div>
					
					<div class="col-md-2">
					<!-- Avatar Placeholder -->
                <div class="widget-container widget_avatar boxed">
                    <div class="inner">
                        <h5>Écoutez & ecrivez</h5>
                        <span class="subtitle">Listen & write</span>
                        <div class="avatar"><img src="img/listen.jpg" alt="" /></div>
                        <div class="followers">
						  <span>Top Score</span>
                            <span class="counter"><?php  echo $top_s5;?></span>
                          
                        </div>
                        <div class="follow">
                            <a href="listen" class="genric-btn info circle text-decoration-none"><span>Play</span></a>
                        </div>
                    </div>
                </div>
                <!--/ Avatar Placeholder -->
				</div>
				
			<div class="col-md-2">
				<!-- Avatar Placeholder -->
                <div class="widget-container widget_avatar boxed">
                    <div class="inner">
                        <h5>Traduction </h5>
                        <span class="subtitle">Translation</span>
                        <div class="avatar"><img src="img/translate.jpg" alt="" /></div>
                        <div class="followers">
						  <span>Top Score</span>
                            <span class="counter"><?php  echo $top_s6;?></span>  
                        </div>
                        <div class="follow">
                            <a href="translate" class="genric-btn info circle text-decoration-none"><span>Play</span></a>
                        </div>
                    </div>
                </div>
                <!--/ Avatar Placeholder -->
			    </div>		
			</div>
		</div>
	</section>
		
		
		
<?php include("inc/footer.php"); ?>
<?php  include("inc/footer_close.php"); ?>
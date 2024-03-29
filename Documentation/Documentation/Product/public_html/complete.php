<?php include("services/check.php"); ?> <!-- Checks if the user logged in and identifies which user it is-->
<?php include("inc/header.php"); ?> <!-- Includes the header.php file (Black Header with Title of Page) -->

<!-- Start Banner Area -->
		
<!-- Start Feature Area -->
<section class="banner-area relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-offset-1">
            	
        <!-- Ribbons -->
          		<div class="ribbons">
               		<div class="ribbon ribbon-blue">
                    	<span>Welcome  <?php echo $_SESSION['firstname']; ?> to Listen & Write Game</span>
               		</div>   
          	  	</div>
			</div>
		<!-- /Ribbons -->
            
			<!-- Logout Button: href="logout" calls services/logout.php - class button style: from online ##### -->
				<div class="col-md-8 text-right" style="margin-top:25px"><a href="logout" class="btn btn-secondary btn-sm"><i class="fa fa-sign-out" style="color:white"></i>&nbsp;Logout&nbsp;</span></a></div>	
			<!-- End Logout Button Code -->	
		</div>
	
	<div class="row">
			<div class="col-md-9" id="game_container">
				<!-- contact form -->
                	<div class="add-comment contact-form boxed">
                		<div class="comment-form">
                    		<div id="timebar"></div>
				  			<form action="#" method="post" id="commentForm" class="ajax_form">
								<?php 
									##### games index : 1-wiriting 2-pics and words 3-COMPLETE THE SENTENCE 4-PAIR GAME 5-LISTEN and WRITE 6-translation #####								
									##### get random question for game=1 (mysql request) #####
										$sql_qst="SELECT * FROM questions WHERE id_game=3 ORDER BY RAND() LIMIT 1";
										$req_quest=mysqli_query($cnx,$sql_qst);
										$aff_quest=mysqli_fetch_array($req_quest,MYSQLI_ASSOC); 
								
									######## saving question text and question id into variables $questions and id_questions ########
										$question= $aff_quest['question_text'];
										$id_question=$aff_quest['id'];
								?>
								
								<div class="col-md-2 pull-right">  
									<div class="col-sm-1"></div>
			    					<div class="round round-lg hollow orange" id='my_score' style="font-size:15px"> <strong>0</strong>/10</div>
    							</div>
			
   								<?php  	
   									##################### hiddens fields showing actual question database ID and actual score  ##################### ?>
  										<input type="hidden" value="<?php echo $id_question; ?>," id="id_question" name="id_question"/>
										<input type="hidden" value="0" id="score_val" name="score"/>
										<input type="hidden" value="<?php echo $id_question; ?>" id="qst"/>
 								<?php 
 								 	#####################Printing Question variable $question into this block ##################### ?>
	  									<div class="add-comment-title" id="qst_txt"><h3><?php echo $question; ?></h3></div>	
										<div class="form-inner">
                                    	<div class="field_text">
                                        	<label for="name" class="label_title">Choose the missing word: </label>
	                                    </div>
                                    <div class="clear"></div>
									<div id="help_tag">
											<?php 
												##################### possible answers for chosen question from database##################### 
													$sql_answ="SELECT * FROM answers WHERE id_question=".$id_question." ORDER BY RAND() LIMIT 4";
													$req_answ=mysqli_query($cnx,$sql_answ);
												##################### apply random bootstrap style classe for each answer option - basically different colors #################		
													$i = 1;
													$array_cls = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'dark'];
													shuffle($array_cls);
												##################### While finding answer options in database write it in html format with bootstrap random style #################
													while ($aff_answ=mysqli_fetch_array($req_answ,MYSQLI_ASSOC)) { 
											?>
											
											<div class="modal-body">
											
          										<div class="quiz" id="quiz" data-toggle="buttons">
           											<label class="element-animation1 btn btn-md btn-<?php echo $array_cls[$i]; ?> btn-block" aria-pressed="true><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="answer_text" id="answer_text" value="<?php echo $aff_answ['id']; ?>"><?php echo $aff_answ['answer_text']; ?></label>
	           									</div>
    	       									
   											</div>
											
											<?php  ####################End loop for random bootstrap style #################
										   		$i++;
											 	}
										 	 #####################End loop for showing possible answers options  #################
										 	?>
									</div>
							
								<div class="example" data-timer="900"></div>
                                <div class="clear"></div>	 
								<div class="rowSubmit">
									<input class="btn btn-primary" id="submit_answer" type="button" value="Submit Answer">
								</div>
									
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<?php ############ Function jquery for time progress bar evolution ########## ?>
<script>
function timerbar(){
var maxWidth = 300;
	var duration = 20000;
	var timer;
							    
	$(function() {
		var $bar = $('#timebar');
		Horloge(maxWidth);
		timer = setInterval('Horloge('+maxWidth+')', 100);

		$bar.animate({
			width: maxWidth
			Å}, duration, function() {
				$(this).css('background-color', 'green');
				clearInterval(timer);
			
			
			
		/*############ send answer if time bar is end ############*/	
			var question_list = $("#id_question").val();
        	var score = $("#score_val").val();
        	var answer = $("input[name='answer_text']:checked").val();
			var qst = $("#qst").val();
		 	var id_game = 3;
       
	
  
    	/*############ send answer to php page services/check_answer ############*/
        	$.ajax({
            	type: 'POST',
	            url: 'services/check_answer3.php', 
    	        dataType: "json",
        	    data: {question_list:question_list, score:score, answer:answer,id_game:id_game,qst:qst},
       		})
             
            /*############ show the response from check_answer page ############*/
            /*############# change html data with new data coming from answer page ############*/
	        .done(function(data){
				$('#qst_txt').html(data.question);
				$('#my_score').html(data.score);
				$('#id_question').val(data.question_list);
				$('#help_tag').html(data.html_answer);
				$('#qst').val(data.qst);
				$('#score_val').val(data.score_val);
				$('#game_container').html(data.html_end);
			})
			
			///////restart/////////
			
			////////////////////////

        	
			
			
			
////////////////////////////////* **//////////////////////////// answer if time bar is end */
			
			
			
        });
    });

    $stop.on('click', function() {
        var $bar = $('#timebar');
        clearInterval(timer);
         $bar.css({"width": "0px","-webkit-transition": ""});
        $bar.stop();
				
       

        var w = $bar.width();
        var percent = parseInt((w * 100) / maxWidth);
        $log.html(percent + ' %');
    });
}
</script>
									<script>
$(document).ready(function(){
   

    $('#submit_answer').click(function(e){
		 var question_list = $("#id_question").val();
        var score = $("#score_val").val();
        var answer = $("input[name='answer_text']:checked").val();
		var qst = $("#qst").val();
		 var id_game = 3;
      var $bar = $('#timebar');
	  var maxWidth = 300;
    var duration = 20000;
    var timer;
	 ////////////// STOP BAR////////////////
	        
       clearInterval(timer);
         $bar.css({"width": "0px","-webkit-transition": ""});
        $bar.stop();
		
	 //////////////////////////////////////
  
         /* send answer to php page*/
        $.ajax({
            type: 'POST',
            url: 'services/check_answer3.php', 
            dataType: "json",
            data: {question_list:question_list, score:score, answer:answer,id_game:id_game,qst:qst},
			

        })
        .done(function(data){
             
            // show the response from check_answer page
            //$('#response').html(data.question);
             /// change html data with new data coming from answer page
			  $("#answer_text").val('');
			 
			  $('#qst_txt').html(data.question);
			 $('#my_score').html(data.score);
			 $('#id_question').val(data.question_list);
			 $('#help_tag').html(data.html_answer);
			 $('#qst').val(data.qst);
			   $('#score_val').val(data.score_val);
			    $('#game_container').html(data.html_end);
			/// restart bar/////////////////////////////////////////
			
			timerbar();
        
    
       

     
		
			////////////////////////////////////////////////////////
        

        })
		
   
        // to prevent refreshing the whole page page
        return false;
 
    });
});
</script>


	


<script >
$(document).ready(function() {
    var maxWidth = 300;
    var duration = 20000;
  
    var timer;

    $(function() {
        var $bar = $('#timebar');
        Horloge(maxWidth);
        timer = setInterval('Horloge('+maxWidth+')', 100);

        $bar.animate({
            width: maxWidth
        }, duration, function() {
            $(this).css('background-color', 'green');
           
            clearInterval(timer);
			
			
			
			/* send answer if time bar is end */
			
			var question_list = $("#id_question").val();
        var score = $("#score_val").val();
        var answer = $("input[name='answer_text']:checked").val();
		var qst = $("#qst").val();
		 var id_game = 3;
       
	
  
         /* send answer to php page*/
        $.ajax({
            type: 'POST',
            url: 'services/check_answer3.php', 
            dataType: "json",
            data: {question_list:question_list, score:score, answer:answer,id_game:id_game,qst:qst},
			

        })
        .done(function(data){
             
            // show the response from check_answer page
            //$('#response').html(data.question);
             /// change html data with new data coming from answer page
			 $("#answer_text").val('');
			 
			 $('#qst_txt').html(data.question);
			 $('#my_score').html(data.score);
			 $('#id_question').val(data.question_list);
			 $('#help_tag').html(data.html_answer);
			$('#qst').val(data.qst);
			 $('#score_val').val(data.score_val);
			  $('#game_container').html(data.html_end);
			
			
			

        })
			
			
			
////////////////////////////////* **//////////////////////////// answer if time bar is end */
			
			
			
        });
    });

    $stop.on('click', function() {
        var $bar = $('#timebar');
        clearInterval(timer);
         $bar.css({"width": "0px","-webkit-transition": ""});
        $bar.stop();
				
       

        var w = $bar.width();
        var percent = parseInt((w * 100) / maxWidth);

    });

});

function Horloge(maxWidth) {
    var w = $('#timebar').width();
    var percent = parseInt((w * 100) / maxWidth);
   
	
	
	
	/*if (percent==99) {
		
		
	}*/
}
</script>	
		
									
                                </div>       
                           		</form>
                    	</div>
                	</div>
        		<!-- end of contact form -->					
			</div>
	</div>
		
	<div class="col-md-8 text-left"><a href="start" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left" style="color:white"></i>&nbsp;Back&nbsp;</span></a></div>
			
	</div>
</section>
		
		
		
<?php include("inc/footer.php"); ?>

<?php  include("inc/footer_close.php"); ?>
<?php
include('../inc/cnx.php');
session_start();
$id_user=$_SESSION['id'];

$total_questions=10;
########################### getting and cleaning of answer variables from writing page id_game,question_ist,answer,score,id_question (last question)###########################
$id_game=mysqli_real_escape_string($cnx,$_POST['id_game']);
$question_list=mysqli_real_escape_string($cnx,$_POST['question_list']);
$answer=mysqli_real_escape_string($cnx,$_POST['answer']);
$score=mysqli_real_escape_string($cnx,$_POST['score']);
$id_question=mysqli_real_escape_string($cnx,$_POST['qst']);
###########################  if answer is correct add +1 to score #########################################""
$sql_score="SELECT * FROM answers WHERE answer_text='".$answer."' AND id_question='".$id_question."'";
$req_score=mysqli_query($cnx,$sql_score);
$aff_score=mysqli_fetch_array($req_score,MYSQLI_ASSOC);

$new_score=$aff_score['correct']+$score;
$last_score=" <strong>".$new_score."</strong>/10";
$html_answer='';
///////////////////////////////////////////////////////////



########################### check how many remaning questions to show  based on question list variable sent by game page#########################################""
$questionArray = explode(',', $question_list);
$count=count($questionArray);
 #########################################""if remaining question then get new one not included previous list #########################################""

/// if remaining question then get new one not included previous list ////
$hsab=($count-1);
if($hsab<$total_questions) {
	$sql_next="SELECT * FROM  questions WHERE id_game='".$id_game."' AND id NOT IN(".substr($question_list,0,-1).") ORDER BY RAND() LIMIT 1";
	$req_next=mysqli_query($cnx,$sql_next);
	$aff_next=mysqli_fetch_array($req_next,MYSQLI_ASSOC);
	$next_question=$aff_next['question_text'];
	
	 ######################################### getting new question and store it in variables that will be sent to game page in html format ( writing) ##############
	
##########applying random bootstrap style for answers options ##############"""


$sql_answ="SELECT * FROM answers WHERE id_question=".$aff_next['id']." ORDER BY RAND() LIMIT 4";
$req_answ=mysqli_query($cnx,$sql_answ);
$i = 1;
$array_cls = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];
shuffle($array_cls);
while ($aff_answ=mysqli_fetch_array($req_answ,MYSQLI_ASSOC)) { 

$html_answer.='<span style="font-size:14px;margin-top:3px" class="badge badge-pill badge-'.$array_cls[$i].'"> '.$aff_answ['answer_text'].'</span>';
 $i++;
 }

////////////////////////////////////////////////////////////
	
// send new question html format ////
$new_list=$question_list.$aff_next['id'].',';




 $question_div = "<h3>".$next_question." </h3>";
       ########end 0 mean there is other question player no raching 10 questions #################
########send all data question,score, to game page in json format supported by jqueury ##############
$end=0;
echo json_encode(['end'=>$end, 'score'=>$last_score, 'qst'=>$aff_next['id'], 'score_val'=>$new_score, 'question'=>$question_div, 'question_list'=>$new_list,'html_answer'=>$html_answer]);

} else {

$end=1;	
$html_end='<div class="alert alert-success" role="alert">
  You have completed the quiz and your score is <strong>'.$new_score.'</strong>
</div>
<a href="writing"  class="btn btn-primary">Retry</a>
<a href="start" class="btn btn-success">More games</button>

';
#####################if reaching 10 questions saving score, with id game, and id_ser and date now() mean instant date ################
$sql_inset_score="INSERT INTO app_scores VALUES('','".$id_user."','".$id_game."','".$new_score."',now())";
mysqli_query($cnx,$sql_inset_score);
#################send respnse to game page in json format (format supported by jquery)###########################

echo json_encode(['end'=>$end, 'score'=>$last_score, 'score_val'=>$new_score, 'html_end'=>$html_end]);

}



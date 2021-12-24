<?php 
 // Delete specific answer to complete game from database ///
include_once('config.php');
if(isset($_REQUEST['delId']) and $_REQUEST['delId']!=""){
	$db->delete('answers',array('id'=>$_REQUEST['delId']));
	header('location: answer-complete.php?msg=rds&id_question='.$_REQUEST['id_question'].'');
	exit;
}
?>
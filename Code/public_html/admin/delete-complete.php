<?php 
 // Delete specific question to complete game from database ///
include_once('config.php');
if(isset($_REQUEST['delId']) and $_REQUEST['delId']!=""){
	$db->delete('questions',array('id'=>$_REQUEST['delId']));
		$db->delete('answers',array('id_question'=>$_REQUEST['delId']));
	
	header('location: complete.php?msg=rds');
	exit;
}
?>
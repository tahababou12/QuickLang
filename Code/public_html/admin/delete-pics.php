<?php 
 // Delete specific question to picture game from database ///
include_once('config.php');
if(isset($_REQUEST['delId']) and $_REQUEST['delId']!=""){
	$db->delete('questions',array('id'=>$_REQUEST['delId']));
		$db->delete('answers',array('id_question'=>$_REQUEST['delId']));
	
	header('location: pics.php?msg=rds');
	exit;
}
?>
<?php
include('../inc/cnx.php');
session_start();

/// check if was sent from login form
if  ((isset($_POST['email'])) )  {
	//clean email & password//
	$email=mysqli_real_escape_string($cnx,$_POST['email']);
	
	//// check if exist in data base 
	$sql_check="SELECT * FROM  `app_users`  WHERE email='$email'";
	$req_check=mysqli_query($cnx,$sql_check);
	$total=mysqli_num_rows($req_check);
	$aff_check=mysqli_fetch_array($req_check,MYSQLI_ASSOC);
	/// get password from database to send it by email
	$firstname=$aff_check['firstname'];
	$lastname=$aff_check['lastname'];
	$password=$aff_check['password'];
	$email=$aff_check['email'];
	$id=$aff_check['id'];
	
	if ($total==0) {
	//// email dosent exist in database
	
	header('Location: reset');
$_SESSION['error'] = 1;
	} else {
		//// send email script ///////////////
		include("../emailings/reset.php");
	$message=$reset_message;
	
$to   = $email;
  $from = 'info@quicklang.net';
  $headers = "From: " . strip_tags($from) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$subject="Quicklang Password recovery";
     mail($to, $subject, $message, $headers);

	////////////////////////////////////////
	$_SESSION['error'] = 3;
	header('Location: register');
	}
  
} else {
	header('Location: home');
	
}
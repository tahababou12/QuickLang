<?php
include('../inc/cnx.php');
session_start();
##########check if there is a data coming form register form ######################"
if ( (isset($_POST['firstname'])) && (isset($_POST['lastname']))&& (isset($_POST['email']))  &&(isset($_POST['password'])) ) {
	
	########### using mysql_real_escape_string function to clear data coming from register form ###############
	$firstname=mysqli_real_escape_string($cnx,$_POST['firstname']);
	$lastname=mysqli_real_escape_string($cnx,$_POST['lastname']);
	$email=mysqli_real_escape_string($cnx,$_POST['email']);
	$password=mysqli_real_escape_string($cnx,$_POST['password']);
	########### gett user ip ###########"
	    $ip = $_SERVER['REMOTE_ADDR'];
	
	###########check if user is not already member ###########"
	$sql_check="SELECT * FROM app_users where email='$email'";
	$req_check=mysqli_query($cnx,$sql_check);
	$total=mysqli_num_rows($req_check);
	if ($total>0) {

		$_SESSION['error'] = 1;
		$_SESSION['error_email'] = $email;
		header('Location: register');
	} else {
	########################" if not then registre the user and save data in session###########################
	$sql_sign="INSERT INTO `app_users` (`id`, `firstname`, `lastname`, `email`, `password`, `date`, `ip`) VALUES ('', '$firstname', '$lastname', '$email', '$password', now(), '$ip')";
	$query_sign=mysqli_query($cnx,$sql_sign);
	
	$_SESSION['firstname'] = $firstname;
	$_SESSION['lastname'] = $lastname;
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
  	########################"send welcome email script	########################"
		include("../emailings/register.php");
	$message=$rgister_message;
	
$to = $email;
  $from = 'no-reply@quicklang.net';
  $headers = "From: " . strip_tags($from) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$subject="Quicklang Account";

     mail($to, $subject, $message, $headers);
	 ######################## after sending email go to register page  to insert login & password newly created ######################
	
		header('Location: register');	
	}

} else {
	
	//header('Location: ../index.php');
}

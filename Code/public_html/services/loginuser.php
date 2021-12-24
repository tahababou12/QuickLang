<?php
include('../inc/cnx.php');
session_start();

########################### check if was sent from login form###########################
if  ((isset($_POST['email'])) && (isset($_POST['password']))   )  {
	
########################### clean email & password ###########################
	$email=mysqli_real_escape_string($cnx,$_POST['email']);
	$password=mysqli_real_escape_string($cnx,$_POST['password']);
	
########################### check if exist in data base ###########################
	$sql_check="SELECT * FROM  `app_users`  WHERE email='$email' AND password='$password'";
	$req_check=mysqli_query($cnx,$sql_check);
	$total=mysqli_num_rows($req_check);
	$aff_check=mysqli_fetch_array($req_check,MYSQLI_ASSOC);

########################### get data from database to store int into session ###########################
	$firstname=$aff_check['firstname'];
	$lastname=$aff_check['lastname'];
	$email=$aff_check['email'];
	$id=$aff_check['id'];
	if ($total==0) {

########################### user dosent exist or wrong password redirect to register page ###########################	
		header('Location: register');
		$_SESSION['error'] = 2;
	} else {
		$_SESSION['firstname'] = $firstname;
  		$_SESSION['lastname'] = $lastname;
  		$_SESSION['password'] = $password;
  		$_SESSION['email'] = $email;
  		$_SESSION['id'] = $id;
  		header('Location: start');
	}
		
} else {
	########### if no data sent from form ###########
	header('Location: home');
}
<?php session_start();
include('inc/cnx.php');
#######defining variable id & email & password ##########"
$id=$_SESSION['id'];
$email=$_SESSION['email'];
$password=$_SESSION['password'];
##########check if stored variables in session are in database ###################""
$sql_user="SELECT * from app_users WHERE id='$id' AND email='$email' AND password='$password'";
$req_user=mysqli_query($cnx,$sql_user);
$total=mysqli_num_rows($req_user);
$aff_user=mysqli_fetch_array($req_user,MYSQLI_ASSOC);
##########if total 0 mean if no record found using this email and password, redirect user to register page ##############
if ($total==0) {
header('location:register');
} else {
######################### ELSE get top score user for each game and store it into variable that will be called in home file #################################"""
$sql_score_game1="SELECT MAX(score) as TOP_GAME1 FROM app_scores where (id_game=1 AND id_user='".$aff_user['id']."')";	
$sql_score_game2="SELECT MAX(score) as TOP_GAME2 FROM app_scores where (id_game=2 AND id_user='".$aff_user['id']."')";
$sql_score_game3="SELECT MAX(score) as TOP_GAME3 FROM app_scores where (id_game=3 AND id_user='".$aff_user['id']."')";
$sql_score_game4="SELECT MAX(score) as TOP_GAME4 FROM app_scores where (id_game=4 AND id_user='".$aff_user['id']."')";
$sql_score_game5="SELECT MAX(score) as TOP_GAME5 FROM app_scores where (id_game=5 AND id_user='".$aff_user['id']."')";
$sql_score_game6="SELECT MAX(score) as TOP_GAME6 FROM app_scores where (id_game=6 AND id_user='".$aff_user['id']."')";

$req_score_game1=mysqli_query($cnx,$sql_score_game1);
$req_score_game2=mysqli_query($cnx,$sql_score_game2);
$req_score_game3=mysqli_query($cnx,$sql_score_game3);
$req_score_game4=mysqli_query($cnx,$sql_score_game4);
$req_score_game5=mysqli_query($cnx,$sql_score_game5);
$req_score_game6=mysqli_query($cnx,$sql_score_game6);

$aff_score_game1=mysqli_fetch_array($req_score_game1,MYSQLI_ASSOC);
$top_s1=$aff_score_game1['TOP_GAME1'];

$aff_score_game2=mysqli_fetch_array($req_score_game2,MYSQLI_ASSOC);
$top_s2=$aff_score_game2['TOP_GAME2'];

$aff_score_game3=mysqli_fetch_array($req_score_game3,MYSQLI_ASSOC);
$top_s3=$aff_score_game3['TOP_GAME3'];

$aff_score_game4=mysqli_fetch_array($req_score_game4,MYSQLI_ASSOC);
$top_s4=$aff_score_game4['TOP_GAME4'];

$aff_score_game5=mysqli_fetch_array($req_score_game5,MYSQLI_ASSOC);
$top_s5=$aff_score_game5['TOP_GAME5'];

$aff_score_game6=mysqli_fetch_array($req_score_game6,MYSQLI_ASSOC);
$top_s6=$aff_score_game6['TOP_GAME6'];
	
#############store data in sessions  to keep user logged in ################
	
$_SESSION['id']=$aff_user['id'];
$_SESSION['email']=$aff_user['email'];
$_SESSION['firstname']=$aff_user['firstname'];
$_SESSION['lastname']=$aff_user['lastname'];
$_SESSION['password']=$aff_user['password'];	
}
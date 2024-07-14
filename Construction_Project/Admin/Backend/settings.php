<?php 
session_start(); 
if(!isset($_SESSION['login_id']))
{
      header("Location: ../index.php");

}
include 'conn.php';
//Here is update code for site settings
if(isset($_POST['submit']))
{
	
	$site_title=$_POST['site_title'];
	$site_name=$_POST['site_name'];
	$footer_text=$_POST['footer_text'];
	
	$querry ="UPDATE site_setting SET site_title='$site_title',site_name= '$site_name',footer_text= '$footer_text' where id='1'";
	// print_r($querry);exit();

	$result=mysqli_query($conn,$querry);

}

//Here is update code for contact settings
if(isset($_POST['contact']))
{
	$contact_no=$_POST['contact_no'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$map=$_POST['map'];
	$contact_title=$_POST['contact_title'];
	
	$querry ="UPDATE contact_setting SET contact_no='$contact_no',email= '$email',address= '$address',map= '$map', contact_title='$contact_title' where id='1'";
	// print_r($querry);exit();

	$result=mysqli_query($conn,$querry);

}

//Here is update code for social settings
if(isset($_POST['social']))
{
	$twitter_url=$_POST['twitter_url'];
	$instagram_url=$_POST['instagram_url'];
	$facebook_url=$_POST['facebook_url'];
	$linkdin_url=$_POST['linkdin_url'];
	
	$querry ="UPDATE social_setting SET twitter_url='$twitter_url',instagram_url= '$instagram_url',facebook_url= '$facebook_url',linkdin_url= '$linkdin_url' where id='1'";
	// print_r($querry);exit();

	$result=mysqli_query($conn,$querry);

}
	header("Location: ../dashboard.php");

 ?>
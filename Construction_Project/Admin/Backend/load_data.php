<?php 
include "conn.php";
//This is for load Site information
$querry="select * from site_setting where id='1'";
$result=mysqli_query($conn,$querry) or die('QUerry Failed..');
$site_info=mysqli_fetch_assoc($result);


//This is for load Contact information
$querry1="select * from contact_setting where id='1'";
$result1=mysqli_query($conn,$querry1) or die('QUerry Failed..');
$contact_info=mysqli_fetch_assoc($result1);


//This is for load Socail information
$querry2="select * from social_setting where id='1'";
$result2=mysqli_query($conn,$querry2) or die('QUerry Failed..');
$social_info=mysqli_fetch_assoc($result2);


//This is for Carousel  information
$querry3="select * from home_carousel where id='1'";
$result3=mysqli_query($conn,$querry3) or die('QUerry Failed..');
$carousel_info=mysqli_fetch_assoc($result3);


//This is for Home Featured Section  information
$querry4="select * from home_services where id='1'";
$result4=mysqli_query($conn,$querry4) or die('QUerry Failed..');
$services_info=mysqli_fetch_assoc($result4);


//This is for Home Client Section  information
$querry5="select * from client_section where id='1'";
$result5=mysqli_query($conn,$querry5) or die('QUerry Failed..');
$client_info=mysqli_fetch_assoc($result5);


// About Page Data load form here
//This is for About Section  information
$querry6="select * from about_section where id='1'";
$result6=mysqli_query($conn,$querry6) or die('QUerry Failed..');
$about_info=mysqli_fetch_assoc($result6);


//This is for Testimonial Section  information
$querry7="select * from testimonial_section where id='1'";
$result7=mysqli_query($conn,$querry7) or die('Querry Failed..');
$testimonial_section=mysqli_fetch_assoc($result7);


// Team Page Data load form here
$querry8="select * from team_header where id='1'";
$result8=mysqli_query($conn,$querry8) or die('Querry Failed..');
$team_header_info=mysqli_fetch_assoc($result8);

//This is for load Contact information
$querry9="select * from header_section where id='1'";
$result9=mysqli_query($conn,$querry9) or die('QUerry Failed..');
$header_info=mysqli_fetch_assoc($result9);

// Team Page Data load form here
$querry10="select * from constructions_header where id='1'";
$result10=mysqli_query($conn,$querry10) or die('Querry Failed..');
$constructions_header_info=mysqli_fetch_assoc($result10);

//This is for Alt_Services Section  information
$querry11="select * from alt_services_section where id='1'";
$result11=mysqli_query($conn,$querry11) or die('QUerry Failed..');
$alt_services_info=mysqli_fetch_assoc($result11);
 ?>
 
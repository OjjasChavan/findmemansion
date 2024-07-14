<?php 
session_start(); 
if(!isset($_SESSION['login_id']))
{
      header("Location: ../index.php");

}
include 'conn.php';

//===============Header section start================//
if(isset($_POST['header_section']))
      {
      $file_name=$_FILES['header_img']['name'];
      $file_tmp=$_FILES['header_img']['tmp_name'];
      move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/header/".$file_name);
      $img = "assets/img/header/".$file_name;
      }
      
      // $querry ="INSERT INTO `header_section`( `header_img`) VALUES ('$img')";

      $querry = "UPDATE `header_section` SET `header_img`='$img' WHERE '1'";
      

 //  print_r($querry);exit();

   $result=mysqli_query($conn,$querry);
 


//===============Header section end================//

//===============Home section start================//

if(isset($_POST['home_carousel']))
{

      //Image One
      if(empty($_FILES['carousel_img']['name']))
      {
            $img = $_POST['old_carousel_img'];
      }
      else{
            $file_name=$_FILES['carousel_img']['name'];
            $file_tmp=$_FILES['carousel_img']['tmp_name'];
            move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/carousel_img/".$file_name);
            $img = "assets/img/carousel_img/".$file_name;
      }
      //Image Two
      if(empty($_FILES['carousel_img1']['name']))
      {
       $img1 =$_POST['old_carousel_img1'];
      }else{

            $file_name1=$_FILES['carousel_img1']['name'];
            $file_tmp1=$_FILES['carousel_img1']['tmp_name'];
            move_uploaded_file($file_tmp1, dirname(__DIR__)."/assets/img/carousel_img/".$file_name1); 
            $img1 = "assets/img/carousel_img/".$file_name1;  
      }

      //Image Three
      if(empty($_FILES['carousel_img2']['name'] )){
             $img2 =$_POST['old_carousel_img2'];
      }
      else
      {
            $file_name2=$_FILES['carousel_img2']['name'];
            $file_tmp2=$_FILES['carousel_img2']['tmp_name'];
            move_uploaded_file($file_tmp2, dirname(__DIR__)."/assets/img/carousel_img/".$file_name2);
            $img2 = "assets/img/carousel_img/".$file_name2; 
      }
      //Image Four
      if(empty($_FILES['carousel_img3']['name']))
      {
       $img3 =$_POST['old_carousel_img3'];
      }else{

            $file_name3=$_FILES['carousel_img3']['name'];
            $file_tmp3=$_FILES['carousel_img3']['tmp_name'];
            move_uploaded_file($file_tmp3, dirname(__DIR__)."/assets/img/carousel_img/".$file_name3); 
            $img3 = "assets/img/carousel_img/".$file_name3;  
      }
      //Image Five
      if(empty($_FILES['carousel_img4']['name']))
      {
       $img4 =$_POST['old_carousel_img4'];
      }else{

            $file_name4=$_FILES['carousel_img4']['name'];
            $file_tmp4=$_FILES['carousel_img4']['tmp_name'];
            move_uploaded_file($file_tmp4, dirname(__DIR__)."/assets/img/carousel_img/".$file_name4); 
            $img4 = "assets/img/carousel_img/".$file_name4;  
      }



      $carousel_title=$_POST['carousel_title'];
      $carousel_discription=$_POST['carousel_discription'];

      
      
      $querry ="UPDATE home_carousel SET carousel_title= '$carousel_title',carousel_discription= '$carousel_discription',carousel_img='$img',carousel_img1='$img1',carousel_img2='$img2',carousel_img3='$img3',carousel_img4='$img4' where id='1'";
    

      $result=mysqli_query($conn,$querry);
      
}
//===============Home section end================//


//================Services Section Start=========================

if(isset($_POST['home_services']))
{
      $card_title=$_POST['card_title'];
      $card_subtitle=$_POST['card_subtitle'];

      $card_title1=$_POST['card_title1'];
      $card_subtitle1=$_POST['card_subtitle1'];

      $card_title2=$_POST['card_title2'];
      $card_subtitle2=$_POST['card_subtitle2'];

      
      $querry ="UPDATE `home_services` SET `card_title`='$card_title',`card_subtitle`='$card_subtitle',`card_title1`='$card_title1',`card_subtitle1`='$card_subtitle1',`card_title2`='$card_title2',`card_subtitle2`='$card_subtitle2' WHERE id='1'";
    
   
      $result=mysqli_query($conn,$querry);
      
}


//================Services Section End==========================

//================Client Section Start==========================

if(isset($_POST['client_section']))
{
      $client_title=$_POST['client_title'];
      $client_subtitle=$_POST['client_subtitle'];

      $querry ="UPDATE `client_section` SET `client_title`='$client_title',`client_subtitle`='$client_subtitle'  WHERE id='1'";
    
   
      $result=mysqli_query($conn,$querry);
      
}

//================Client Section end============================

//================Portfolio Section Start==========================

if(isset($_POST['portfolio_section']))
{
      $portfolio_title=$_POST['portfolio_title'];
      
      $querry ="UPDATE `portfolio_section` SET `portfolio_title`='$portfolio_title' WHERE id='1'";
    
   
      $result=mysqli_query($conn,$querry);
      
}

//================Portfolio Section end============================

header("Location: ../dashboard.php");
?>
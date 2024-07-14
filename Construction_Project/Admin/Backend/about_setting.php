<?php 
session_start(); 
if(!isset($_SESSION['login_id']))
{
      header("Location: ../index.php");

}
include 'conn.php';



//============ About Section Start====================
if(isset($_POST['about_section']))
{
      
      if(empty($_FILES['img']['name']))
      {
            $img = $_POST['old_img'];
      }
      else{
            $file_name=$_FILES['img']['name'];
            $file_tmp=$_FILES['img']['tmp_name'];
            move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/".$file_name);
            $img = "assets/img/".$file_name;
      }


      
      if(empty($_FILES['video']['name']))
      {
            $video = $_POST['old_video'];
      }
      else{
            $file_name=$_FILES['video']['name'];
            $file_tmp=$_FILES['video']['tmp_name'];
            move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/video/".$file_name);
            $video = "assets/video/".$file_name;
      }
      //Aboutus section variable are delare here 
      $year=$_POST['year'];
      $page_title=$_POST['page_title'];
      $title=$_POST['title'];
      $sub_title=$_POST['sub_title'];
      $l1_title=$_POST['l1_title'];
      $l2_title=$_POST['l2_title'];
      $l3_title=$_POST['l3_title'];
      $discription=$_POST['discription'];

      //counter section variable are delare here

      $card1_title=$_POST['card1_title'];
      $card1_sub_title=$_POST['card1_sub_title'];

      $card2_title=$_POST['card2_title'];
      $card2_sub_title=$_POST['card2_sub_title'];

      $card3_title=$_POST['card3_title'];
      $card3_sub_title=$_POST['card3_sub_title'];

      $card4_title=$_POST['card4_title'];
      $card4_sub_title=$_POST['card4_sub_title'];

      
      $querry ="UPDATE about_section SET year='$year',page_title='$page_title',video= '$video',img= '$img',title= '$title',sub_title='$sub_title',l1_title= '$l1_title',l2_title= '$l2_title',l3_title='$l3_title',discription= '$discription',card1_title= '$card1_title',card1_sub_title= '$card1_sub_title',card2_title= '$card2_title',card2_sub_title= '$card2_sub_title',card3_title= '$card3_title',card3_sub_title= '$card3_sub_title',card4_title= '$card4_title',card4_sub_title= '$card4_sub_title' where id='1'";
    

      $result=mysqli_query($conn,$querry);

      header("Location: ../dashboard.php");
}




//============ About Section End======================


//============ Testimonials Section Start====================

if(isset($_POST['add_testimonial']))
{
      $file_name=$_FILES['img']['name'];
      $file_tmp=$_FILES['img']['tmp_name'];
      move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/testimonials/".$file_name);
      $img = "assets/img/testimonials/".$file_name;

      $name= $_POST['name'];
      $post= $_POST['post'];
      $description= $_POST['description'];



      $querry ="INSERT INTO `testimonial_info`( `name`, `post`, `img`, `description`) VALUES ('$name','$post','$img','$description')";

      print_r($querry);exit;
    

      // $result=mysqli_query($conn,$querry);

      header("Location: ../testimonials_section_view.php");

}

if(isset($_POST['edit_testimonial']))
{
      $id= $_GET['t_id'];

      if(empty($_FILES['img']['name']))
      {
            $img = $_POST['old_img'];
      }
      else{

      $file_name=$_FILES['img']['name'];
      $file_tmp=$_FILES['img']['tmp_name'];
      move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/testimonials/".$file_name);
      $img = "assets/img/testimonials/".$file_name;

      }


      $name= $_POST['name'];
      $post= $_POST['post'];
      $description= $_POST['description'];

      $querry ="UPDATE `testimonial_info` SET `name`='$name',`post`='$post',`img`='$img',`description`='$description'  WHERE id='$id'";
    

      $result=mysqli_query($conn,$querry);
      header("Location: ../testimonials_section_view.php");
}

if(isset($_GET['td_id'])&&!empty($_GET['td_id']))
{
      $td_id= $_GET['td_id'];

      $querry="DELETE FROM `testimonial_info` WHERE id='$td_id'";
      $result = mysqli_query($conn,$querry)or die('QUerry Failed');

      header("Location: ../testimonials_section_view.php");
}


if(isset($_POST['testimonial_section']))
{
      $testimonial_title=$_POST['testimonial_title'];
      $testimonial_description=$_POST['testimonial_description'];

      $querry ="UPDATE `testimonial_section` SET `testimonial_title`='$testimonial_title',`testimonial_description`='$testimonial_description' WHERE id='1' ";
          
      $result=mysqli_query($conn,$querry);
      // print_r($querry);exit();
      header("Location: ../testimonials_section_view.php");
}
//============ Testimonials Section End====================

//=============Alt Services Section Start===============
if(isset($_POST['alt_services_add']))
      {
            $file_name=$_FILES['img']['name'];
            $file_tmp=$_FILES['img']['tmp_name'];
                  move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/alt_services/".$file_name);
            $img = "assets/img/alt_services/".$file_name;

            
             $page_title=$_POST['page_title'];
             $discription=$_POST['discription'];

             $card1_title=$_POST['card1_title'];
             $card1_sub_title=$_POST['card1_sub_title'];

             $card2_title=$_POST['card2_title'];
             $card2_sub_title=$_POST['card2_sub_title'];

             $card3_title=$_POST['card3_title'];
             $card3_sub_title=$_POST['card3_sub_title'];

             $card4_title=$_POST['card4_title'];
             $card4_sub_title=$_POST['card4_sub_title'];

            

            $querry ="INSERT INTO `alt_services_section`(`img`, `page_title`,  `description`, `card1_title`, `card1_sub_title`, `card2_title`, `card2_sub_title` `card3_title`, `card3_sub_title`, `card4_title`, `card4_sub_title`) VALUES ('$img','$page_title','$description','$card1_title','$card1_sub_title','$card2_title','$card2_sub_title','$card3_title','$card3_sub_title','$card4_title','$card4_sub_title') ";

            $result=mysqli_query($conn,$querry);
            // print_r($querry);exit();

            header("Location: ../alt_services_view.php");
      }

      if(isset($_POST['alt_services_edit']))
      {
                $id= $_GET['t_id'];

            if(empty($_FILES['img']['name']))
            {
                  $img = $_POST['old_img'];
            }
            else{
                  $file_name=$_FILES['img']['name'];
                  $file_tmp=$_FILES['img']['tmp_name'];
                  move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/alt_services/".$file_name);
                  $img = "assets/img/alt_services/".$file_name;
            }

             $page_title=$_POST['page_title'];
             $discription=$_POST['discription'];

             $card1_title=$_POST['card1_title'];
             $card1_sub_title=$_POST['card1_sub_title'];

             $card2_title=$_POST['card2_title'];
             $card2_sub_title=$_POST['card2_sub_title'];

             $card3_title=$_POST['card3_title'];
             $card3_sub_title=$_POST['card3_sub_title'];

             $card4_title=$_POST['card4_title'];
             $card4_sub_title=$_POST['card4_sub_title'];


            $querry ="UPDATE `alt_services_section` SET `img`='$img' , `description`='$description',`card1_title`='$card1_title' , `card1_sub_title`='$card1_sub_title' , `card2_title`='$card2_title' , `card2_sub_title`='$card2_sub_title',`card3_title`='$card3_title' , `card3_sub_title`='$card3_sub_title' , `card4_title`='$card4_title' , `card4_sub_title`='$card4_sub_title' WHERE id='$id'";
            $result=mysqli_query($conn,$querry);
            // print_r($querry);exit();

            header("Location: ../alt_services_view.php");
      }

      if(isset($_GET['td_id'])&&!empty($_GET['td_id']))
      {
            $td_id= $_GET['td_id'];

            $querry="DELETE FROM `alt_services_section` WHERE id='$td_id'";
            $result = mysqli_query($conn,$querry)or die('QUerry Failed');

            header("Location: ../alt_services_view.php");
      }


//=============Alt Services Section Start===============

?>


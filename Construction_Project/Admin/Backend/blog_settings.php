<?php 
session_start(); 
if(!isset($_SESSION['login_id']))
{
      header("Location: ../index.php");

}
include 'conn.php';
//============ Blog  Section Start====================

if(isset($_POST['blog_add']))
{
      $file_name=$_FILES['img']['name'];
      $file_tmp=$_FILES['img']['tmp_name'];
      move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/blog/".$file_name);
      $img = "assets/img/blog/".$file_name;

      $blog_title= $_POST['blog_title'];
      $writer_name= $_POST['writer_name'];
      $date= $_POST['date'];
      $description= $_POST['description'];



      $querry ="INSERT INTO `blog_info`(`img`, `blog_title`, `writer_name`, `date`, `description`) VALUES ('$img','$blog_title','$writer_name','$date','$description')";

      // print_r($querry);exit;
    

      $result=mysqli_query($conn,$querry);

      header("Location: ../blog_view.php");

}

if(isset($_POST['blog_edit']))
{
      $id= $_GET['blog_id'];

      if(empty($_FILES['img']['name']))
      {
            $img = $_POST['old_img'];
      }
      else{

      $file_name=$_FILES['img']['name'];
      $file_tmp=$_FILES['img']['tmp_name'];
      move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/blog/".$file_name);
      $img = "assets/img/blog/".$file_name;

      }


      $blog_title= $_POST['blog_title'];
      $writer_name= $_POST['writer_name'];
      $date= $_POST['date'];
      $description= $_POST['description'];

      $querry ="UPDATE `blog_info` SET `img`='$img',`blog_title`='$blog_title',`writer_name`='$writer_name',`date`='$date',`description`='$description'  WHERE id='$id'";
    

      $result=mysqli_query($conn,$querry);
      header("Location: ../blog_view.php");
}

if(isset($_GET['b_id'])&&!empty($_GET['b_id']))
{
      $b_id= $_GET['b_id'];

      $querry="DELETE FROM `blog_info` WHERE id='$b_id'";
      $result = mysqli_query($conn,$querry)or die('QUerry Failed');

      header("Location: ../blog_view.php");
}

//============ Blog  Section End====================

?>
<?php 
      session_start(); 
      if(!isset($_SESSION['login_id']))
      {
            header("Location: ../index.php");
      }
      include 'conn.php';
//======================= Gallery Section Start ========================//

      //Image Add code is here
      if(isset($_POST['add_image']))
      {
            $file_name=$_FILES['img']['name'];
            $file_tmp=$_FILES['img']['tmp_name'];
            move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/gallery/".$file_name);
            $img = "assets/img/gallery/".$file_name;

            $category = $_POST['category'];
            $img_title = $_POST['img_title'];

            $querry ="INSERT INTO `gallery_setting`(`category`,`img`,`img_title`) VALUES ('$category','$img','$img_title')";
          
            $result=mysqli_query($conn,$querry);
            // print_r($querry);exit();
            header("Location: ../gallery_section_view.php");
      }

      //Image Update code is here
      if(isset($_POST['edit_image']))
      {
            $id= $_GET['image_id'];

            if(empty($_FILES['img']['name']))
            {
                  $img = $_POST['old_img'];
            }
            else
            {
                  $file_name=$_FILES['img']['name'];
                  $file_tmp=$_FILES['img']['tmp_name'];
                  move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/gallery/".$file_name);
                  $img = "assets/img/gallery/".$file_name;
            }

            $category = $_POST['category'];
            $img_title = $_POST['img_title'];

            $querry ="UPDATE `gallery_setting` SET `category`='$category',`img`='$img', `img_title`='$img_title' WHERE id='$id'";

            $result=mysqli_query($conn,$querry);
            // print_r($querry);exit();
            header("Location: ../gallery_section_view.php");
      }

      //Image Delete code is here
      if(isset($_GET['did'])&&!empty($_GET['did']))
      {
            $did= $_GET['did'];

            $querry="DELETE FROM `gallery_setting` WHERE id='$did'";
            $result = mysqli_query($conn,$querry)or die('Querry Failed');

            header("Location: ../gallery_section_view.php");
      }

      if(isset($_POST['gallery_header']))
      {
            $page_title = $_POST['page_title'];
            $page_description = $_POST['page_description'];

            $querry ="UPDATE `gallery_section` SET `page_title`='$page_title',`page_description`='$page_description' WHERE id='1'";
            // print_r($querry);exit();
            $result=mysqli_query($conn,$querry);

            header("Location: ../gallery_section_view.php");
      }

//======================= Gallery Section End =========================//

?>
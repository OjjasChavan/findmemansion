<?php 
      session_start(); 
      if(!isset($_SESSION['login_id']))
      {
            header("Location: ../index.php");
      }
      include 'conn.php';

//================== Constructions Section Start =====================
      if(isset($_POST['add_constructions']))
      {
            $file_name=$_FILES['img']['name'];
            $file_tmp=$_FILES['img']['tmp_name'];
                  move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/constructions/".$file_name);
            $img = "assets/img/constructions/".$file_name;

            //Team section variable are delare here
            $name=$_POST['name'];
            $description=$_POST['description'];
            

            $querry ="INSERT INTO `constructions_setting`(`img`, `name`, `description`) VALUES ('$img','$name','$description') ";

            $result=mysqli_query($conn,$querry);
            // print_r($querry);exit();

            header("Location: ../constructions_section_view.php");
      }

      if(isset($_POST['edit_constructions']))
      {
                $id= $_GET['t_id'];

            if(empty($_FILES['img']['name']))
            {
                  $img = $_POST['old_img'];
            }
            else{
                  $file_name=$_FILES['img']['name'];
                  $file_tmp=$_FILES['img']['tmp_name'];
                  move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/constructions/".$file_name);
                  $img = "assets/img/constructions/".$file_name;
            }

             $name=$_POST['name'];
            $description=$_POST['description'];
            

            $querry ="UPDATE `constructions_setting` SET `img`='$img' , `name`='$name',`description`='$description' WHERE id='$id'";
            $result=mysqli_query($conn,$querry);
            // print_r($querry);exit();

            header("Location: ../constructions_section_view.php");
      }

      if(isset($_GET['td_id'])&&!empty($_GET['td_id']))
      {
            $td_id= $_GET['td_id'];

            $querry="DELETE FROM `constructions_setting` WHERE id='$td_id'";
            $result = mysqli_query($conn,$querry)or die('QUerry Failed');

            header("Location: ../constructions_section_view.php");
      }

      if(isset($_POST['constructions_header']))
      {
            $page_title=$_POST['page_title'];
            $page_description=$_POST['page_description'];
            // $querry ="UPDATE `constructions_header` SET `page_title`='$page_title', `$page_description`='$page_description' WHERE id='1'";
            

            $querry = "UPDATE `constructions_header` SET `page_title`='$page_title', `page_description`='$page_description' WHERE id='1' ";
            $result=mysqli_query($conn,$querry);
            
            // print_r($querry);exit();
            header("Location: ../constructions_section_view.php");  
      }

//============= Constructions Section End =======================

   ?>
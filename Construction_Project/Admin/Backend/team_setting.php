<?php 
      session_start(); 
      if(!isset($_SESSION['login_id']))
      {
            header("Location: ../index.php");
      }
      include 'conn.php';

//======================= Team Section Start =================================
      if(isset($_POST['add_team']))
      {
            $file_name=$_FILES['img']['name'];
            $file_tmp=$_FILES['img']['tmp_name'];
                  move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/team/".$file_name);
            $img = "assets/img/team/".$file_name;

            //Team section variable are delare here
            $name=$_POST['name'];
            $post=$_POST['post'];
            $description=$_POST['description'];
            $twitter_url=$_POST['twitter_url'];
            $facebook_url=$_POST['facebook_url'];
            $instagram_url=$_POST['instagram_url'];
            $linkedin_url=$_POST['linkedin_url'];

            $querry ="INSERT INTO `team_setting`(`img`, `name`, `post`, `description`, `twitter_url`, `facebook_url`, `instagram_url`, `linkedin_url`) VALUES ('$img','$name','$post','$description','$twitter_url','$facebook_url','$instagram_url','$linkedin_url') ";

            $result=mysqli_query($conn,$querry);
            // print_r($querry);exit();

            header("Location: ../team_section_view.php");
      }

      if(isset($_POST['edit_team']))
      {
                $id= $_GET['t_id'];

            if(empty($_FILES['img']['name']))
            {
                  $img = $_POST['old_img'];
            }
            else{
                  $file_name=$_FILES['img']['name'];
                  $file_tmp=$_FILES['img']['tmp_name'];
                  move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img/team/".$file_name);
                  $img = "assets/img/team/".$file_name;
            }

             $name=$_POST['name'];
            $post=$_POST['post'];
            $description=$_POST['description'];
            $twitter_url=$_POST['twitter_url'];
            $facebook_url=$_POST['facebook_url'];
            $instagram_url=$_POST['instagram_url'];
            $linkedin_url=$_POST['linkedin_url'];

            $querry ="UPDATE `team_setting` SET `img`='$img' , `name`='$name',`post`='$post',`description`='$description',`twitter_url`='$twitter_url' , `facebook_url`='$facebook_url' , `instagram_url`='$instagram_url' , `linkedin_url`='$linkedin_url' WHERE id='$id'";
            $result=mysqli_query($conn,$querry);
            // print_r($querry);exit();

            header("Location: ../team_section_view.php");
      }

      if(isset($_GET['td_id'])&&!empty($_GET['td_id']))
      {
            $td_id= $_GET['td_id'];

            $querry="DELETE FROM `team_setting` WHERE id='$td_id'";
            $result = mysqli_query($conn,$querry)or die('QUerry Failed');

            header("Location: ../team_section_view.php");
      }

      if(isset($_POST['team_header']))
      {
            $page_title=$_POST['page_title'];
            $page_description=$_POST['page_description'];
            // $querry ="UPDATE `team_header` SET `page_title`='$page_title', `$page_description`='$page_description' WHERE id='1'";
            

            $querry = "UPDATE `team_header` SET `page_title`='$page_title', `page_description`='$page_description' WHERE id='1' ";
            $result=mysqli_query($conn,$querry);
            
            // print_r($querry);exit();
            header("Location: ../team_section_view.php");  
      }

//======================= Team Section End =================================


?> 
<?php 
 include 'Admin/Backend/conn.php';

// ============Inquiry Section Start===================

if(isset($_POST['inquiry']))
{
      
      $name= $_POST['name'];
      $email= $_POST['email'];
      $subject= $_POST['subject'];
      $message= $_POST['message'];



      $querry ="INSERT INTO `inquiry_info`( `name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";

      // print_r($querry);exit;
    

      $result=mysqli_query($conn,$querry);

      header("Location: contact.php");

}

// ============Inquiry Section End=====================

?>
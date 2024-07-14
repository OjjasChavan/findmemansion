<?php 
 include 'Admin/Backend/conn.php';

//Fetch Infomartion 

      if(isset($_POST['bid']) && isset($_POST['bid'])!="" ) 
      {

            $bid= $_POST['bid'];
             

            $query = "SELECT * FROM `blog_info` WHERE id='$bid' ";
            
            if(!$result = mysqli_query($conn,$query)){
                  exit(mysqli_error());

            }
            

            $response = array();
            if(mysqli_num_rows($result) > 0)
            {
                  while ($row = mysqli_fetch_array($result))
                  {
                        $response =$row;
                  }
            }
            else{
                  $response['status']=200;
                  $response['message']="Data not found";
            }
            echo json_encode($response);
      }
            
      else{
            $response['status']=200;
            $response['message']="Invalid Request";
      }

?>
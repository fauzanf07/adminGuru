<?php 
   include("../conn.php");

   session_start();

   $email = $_SESSION['email'];

   if(isset($_FILES['file']['name'])){

      $filename = $_FILES['file']['name'];

      $location = "../../images/profile-img/".$filename;
      $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
      $imageFileType = strtolower($imageFileType);

      $valid_extensions = array("jpg","jpeg","png");

      $response = 0;
      if(in_array(strtolower($imageFileType), $valid_extensions)) {
         if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
            $changeSql = "UPDATE table_user SET `profile_img` = '$filename' WHERE `email` = '$email'";
            $rs = mysqli_query($con,$changeSql);
            if($rs){
               $_SESSION['profile_img'] = $filename;
               echo json_encode(array("statusCode"=>200));
            }else{
               echo json_encode(array("statusCode"=>201));
            }

         }else{
            echo "Not uploaded because of error #".$_FILES["file"]["error"];
            echo json_encode(array("statusCode"=>202));
         }
         
      }else{
            echo json_encode(array("statusCode"=>203));
      }
   }
   else{
      echo json_encode(array("statusCode"=>204));
   }
   
 ?>
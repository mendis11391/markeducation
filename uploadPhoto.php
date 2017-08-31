<?php include 'common/config.php' ?>
<?php
  $certinum = $_GET['certinum'];
  $folder="photos/";
  $target_file = $folder . basename($_FILES["file"]["name"]);
  //$new_file_name = strtolower($certinum);
  $new_file_name = str_replace('/', '-', $certinum);
  $extension = "." . $_GET['ext'];
  $fileExt = $folder  .$new_file_name . $extension;
  $action = "";
  if(isset($_GET['action'])) {
      $action = $_GET['action'];
  }
  
  
  if (file_exists($target_file) && $action!= 'updatePhoto' && $_FILES["file"]["name"] != "") {
      echo "File already exists";
  }
  else if ( 0 < $_FILES['file']['error'] ) {
      echo 'Error: ' . $_FILES['file']['error'] . 'File size is exeeding the limit';
  }
  else {
      if($_FILES["file"]["name"] != ""){
          if(move_uploaded_file($_FILES['file']['tmp_name'], $fileExt)){
          $sql= "update student set photo='$fileExt' where certificateNumber='$certinum'";
          $query = mysqli_query($mysqli,$sql);
          if($query){
              echo "Saved Successfully!";
          }else{
              echo "Something went wrong!";
          }
          }
      }
      else{
          $sql= "update student set photo='assets/img/defaultPhoto.png' where certificateNumber='$certinum'";
          $query = mysqli_query($mysqli,$sql);
          echo "has set";
      }
      
  }
  
  ?>
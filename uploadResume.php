<?php include 'common/config.php' ?>
<?php
  $certinum = $_GET['certinum'];
  $folder="resume/";
   $target_file = "";
  if($_FILES["file"]["name"] != ""){
      $target_file = $folder . basename($_FILES["file"]["name"]);
  }
  $new_file_name = str_replace('/', '-', $certinum);
  $fileExt = $folder  .$new_file_name . ".pdf";
  echo $fileExt;
  $action = "";
  if(isset($_GET['action'])) {
      $action = $_GET['action'];
  }
  
  
  if (file_exists($target_file) && $action!= 'updateResume' && $_FILES["file"]["name"] != "") {
      echo "File already exists";
  }
  else if ( 0 < $_FILES['file']['error'] ) {
      echo 'Error: ' . $_FILES['file']['error'] . 'File size is exeeding the limit';
  }
  else {
      if($_FILES["file"]["name"] != ""){
          move_uploaded_file($_FILES['file']['tmp_name'], 'resume/' . $new_file_name.".pdf");
          $sql= "update student set Resume='$fileExt' where certificateNumber='$certinum'";
          $query = mysqli_query($mysqli,$sql);
          if($query){
              echo "Saved Successfully!";
          }else{
              echo "Something went wrong!";
          }
      }
      else{
          $sql= "update student set Resume='javascript:;' where certificateNumber='$certinum'";
          $query = mysqli_query($mysqli,$sql);
      }
      
  }
  
  ?>
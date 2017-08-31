<?php include 'common/config.php' ?>
<?php

    if($_POST['action'] == 'checkDuplicate'){
       $certinum = $_POST['certiNum'];
       $sql= "SELECT COUNT(*) AS exist FROM student WHERE `certificateNumber` = '$certinum'";
       $result=mysqli_query($mysqli,$sql);
       $newRow = "";
       while ($row = mysqli_fetch_array($result)) {
           $newRow = $row;
       }
           echo json_encode($newRow);
   }

   if($_POST['action'] == 'verifyStudent'){
       $certinum = $_POST['certiNum'];
       $sql= "select * from student where certificateNumber='$certinum'";
       $result=mysqli_query($mysqli,$sql);
       $newRow[] = "";
       while ($row = mysqli_fetch_array($result)) {
           $newRow[] = $row;
       }
       if($newRow != [""]){
           $json = json_encode($newRow);
           echo $json;
       }
       else{
           echo "undefined";
       }
   }
   
   if($_POST['action'] == 'saveStudentData'){
       $certiNum = $_POST['certiNum'];
       $firstName = $_POST['firstName'];
       $lastName = $_POST['lastName'];
       $fatherName=$_POST['fatherName'];
       $DOB = $_POST['DOB'];
       $age = $_POST['age'];
       $address=$_POST['address'];
       $mobile=$_POST['mobile'];
       $alternateNumber=$_POST['alternateNumber'];
       $email=$_POST['email'];
       $sslcYOP = $_POST['sslcYOP'];
       $sslcPer = $_POST['sslcPer'];
       $puYOP = $_POST['puYOP'];
       $puPer = $_POST['puPer'];
       $dipYOP = $_POST['dipYOP'];
       $dipPer = $_POST['dipPer'];
       $ugYOP = $_POST['ugYOP'];
       $ugPer = $_POST['ugPer'];
       $pgYOP = $_POST['pgYOP'];
       $pgPer = $_POST['pgPer'];
       $skills=$_POST['skills'];
       $course = $_POST['course'];
       $duration = $_POST['duration'];
       $certificateIssueDate = $_POST['certificateIssueDate'];
       $grade=$_POST['grade'];
       $remarks = $_POST['remarks'];
       $working = $_POST['working'];
       $organizationName = $_POST['organizationName'];
       $designation = $_POST['designation'];
       $lookingForJob = $_POST['lookingForJob'];
       $about = $_POST['about'];
       $resume = '';
       $sql= "insert into student (certificateNumber, firstName, lastName, fatherOrHusbandName, DOB, age, address, mobile, alternateNumber, email, SSLCYearOfPassing, SSLCPercentage, PUCYearOfPassing, PUCPercentage, DiplomaYearOfPassing, DiplomaPercentage, UGYearOfPassing, UGPercentage,PGYearOfPassing, PGPercentage, skills, courseStudied, duration, certificateIssueDate, Grade, Remarks, Working, OrganizationName, Designation, LookingForJob, AboutMEA, Resume) values('$certiNum', '$firstName', '$lastName', '$fatherName', '$DOB', '$age', '$address', '$mobile', '$alternateNumber', '$email', '$sslcYOP', '$sslcPer', '$puYOP', '$puPer', '$dipYOP', '$dipPer', '$ugYOP', '$ugPer', '$pgYOP', '$pgPer', '$skills', '$course', '$duration', '$certificateIssueDate', '$grade', '$remarks', '$working', '$organizationName', '$designation', '$lookingForJob', '$about','$resume')";
       $result=mysqli_query($mysqli,$sql);
       if($result){
           echo "sucess";
       }else{
           echo "failure";
       }
   }
   
   if($_POST['action'] == 'updateStudentData'){
       $certiNum = $_POST['certiNum'];
       $firstName = $_POST['firstName'];
       $lastName = $_POST['lastName'];
       $fatherName=$_POST['fatherName'];
       $DOB = $_POST['DOB'];
       $age = $_POST['age'];
       $address=$_POST['address'];
       $mobile=$_POST['mobile'];
       $alternateNumber=$_POST['alternateNumber'];
       $email=$_POST['email'];
       $sslcYOP = $_POST['sslcYOP'];
       $sslcPer = $_POST['sslcPer'];
       $puYOP = $_POST['puYOP'];
       $puPer = $_POST['puPer'];
       $dipYOP = $_POST['dipYOP'];
       $dipPer = $_POST['dipPer'];
       $ugYOP = $_POST['ugYOP'];
       $ugPer = $_POST['ugPer'];
       $pgYOP = $_POST['pgYOP'];
       $pgPer = $_POST['pgPer'];
       $skills=$_POST['skills'];
       $course = $_POST['course'];
       $duration = $_POST['duration'];
       $certificateIssueDate = $_POST['certificateIssueDate'];
       $grade=$_POST['grade'];
       $remarks = $_POST['remarks'];
       $working = $_POST['working'];
       $organizationName = $_POST['organizationName'];
       $designation = $_POST['designation'];
       $lookingForJob = $_POST['lookingForJob'];
       $about = $_POST['about'];
       $sql= "update student set firstName='$firstName',lastName='$lastName',fatherOrHusbandName='$fatherName',DOB='$DOB',age='$age',address='$address',mobile='$mobile',alternateNumber='$alternateNumber',email='$email',SSLCYearOfPassing='$sslcYOP',SSLCPercentage='$sslcPer',PUCYearOfPassing='$puYOP',PUCPercentage='$puPer',DiplomaYearOfPassing='$dipYOP',DiplomaPercentage='$dipPer',UGYearOfPassing='$ugYOP',UGPercentage='$ugPer',PGYearOfPassing='$pgYOP',PGPercentage='$pgPer',skills='$skills',courseStudied='$course',duration='$duration',certificateIssueDate='$certificateIssueDate', Grade='$grade', Remarks='$remarks',Working='$working',OrganizationName= '$organizationName',Designation='$designation',LookingForJob='$lookingForJob',AboutMEA='$about' where certificateNumber='$certiNum'";
       $result=mysqli_query($mysqli,$sql);
   }
   
   
   if($_POST['action'] == 'deleteMultipleStudents'){
           $cheks = implode("','", $_POST['deleteStudents']);
           $sql = "delete from student where certificateNumber in ('$cheks')";
           $result = mysqli_query($mysqli,$sql);
           $arr = explode(",",$cheks);
           foreach ($arr as $file) {
               $file = str_replace('\'', '', $file);
               $file = str_replace('/', '-', $file);
           if ( @unlink ( "resume/".$file.".pdf" ) ) {
               echo 'The file <strong><span style="color:green;">' . "resume/".$file.".pdf" . '</span></strong> was deleted!<br />';
           } else {
               echo 'Couldn\'t delete the file <strong><span style="color:red;">' . "resume/".$file.".pdf" . '</span></strong>!<br />';
           }
           if ( @unlink ( "photos/".$file.".jpg" ) ) {
               
           }else{
               @unlink ( "photos/".$file.".png" );
           }
           }
           if($result){
               echo "deleted";
           }
   }
   
   if($_POST['action'] == 'uploadResume'){
       $file = $_FILES['file']['name'];
       $certinum = $_GET['certinum'];
       $folder="resume/";
       $target_file = $folder . basename($_FILES["file"]["name"]);
       //$new_file_name = strtolower($file);
       
       if (file_exists($target_file)) {
           echo "File already exists";
       }
       else if ( 0 < $_FILES['file']['error'] ) {
           echo 'Error: ' . $_FILES['file']['error'] . '<br>';
       }
       else {
           move_uploaded_file($_FILES['file']['tmp_name'], 'resume/' . $_FILES['file']['name']);
           $sql= "update student set Resume='$file' where certificateNumber='$certinum'";
           echo $sql;
           $query = mysqli_query($mysqli,$sql);
           if($query){
               echo $_GET['action'];
           }else{
               echo "fail";
           }
           
       }
   }
   
?>
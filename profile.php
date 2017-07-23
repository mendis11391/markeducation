<?php
   session_start();
   if(!isset($_SESSION["markEduUsername"])){
     header("Location: index.php");
   }
   ?>
<?php include 'common/sidebar.php' ?>
<?php include 'common/header.php' ?>
<?php
   if(isset($_GET['certiNum'])) {
       $certiNum = $_GET['certiNum'];
       $sql="SELECT * FROM student where certificateNumber='$certiNum'";
       $result=mysqli_query($mysqli,$sql);
       // Associative array
       $row=mysqli_fetch_assoc($result);
       // Free result set
       mysqli_free_result($result);
   }
   ?>
<div class="content" style="overflow:hidden; background:#fff;">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="">
               <div class="content">
								 <div class="col-md-1"></div>
                  <div class="col-md-3">
                     <img class="img-responsive" src="<?php echo $row['photo'] ?>" alt="No Image" width="160" style="margin: 0 auto;"/>
                  </div>
                  <div class="col-md-7">
                     <table class="table">
                        <tbody>
                           <tr>
                              <td class="p-12 textBold">DOB</td>
                              <td class="p-12"><?php echo $row['DOB']; ?></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Age</td>
                              <td class="p-12"><?php echo $row['age']; ?></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Address</td>
                              <td class="p-12"><?php echo $row['address']; ?></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Mobile</td>
                              <td class="p-12"><?php echo $row['mobile']; ?></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Alternate Number</td>
                              <td class="p-12"><?php echo $row['alternateNumber']; ?></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">E-Mail</td>
                              <td class="p-12"><?php echo $row['email']; ?></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Working</td>
                              <td class="p-12"><?php echo $row['Working']; ?></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Organazation Name</td>
                              <td class="p-12"><?php echo $row["OrganizationName"]; ?></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Designation</td>
                              <td class="p-12"><?php echo $row["Designation"]; ?></td>
                           </tr>
                           <tr>
                              <td>
                                 <h3>Educational Info</h3>
                              </td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">SSLC</td>
                              <td class="p-12">
                                 <span><?php echo $row['SSLCYearOfPassing']!=null ? $row['SSLCYearOfPassing'] : "NA" ?></span> ,&nbsp;&nbsp;&nbsp;<span><?php echo $row['SSLCPercentage']!=null ? $row['SSLCPercentage'].' %' : "NA" ?></span>
                              </td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">PUC</td>
                              <td class="p-12">
                                 <span><?php echo $row['PUCYearOfPassing']!=null ? $row['PUCYearOfPassing'] : "NA" ?></span> ,&nbsp;&nbsp;&nbsp;<span><?php echo $row['PUCPercentage']!=null ? $row['PUCPercentage'].' %' : "NA" ?></span>
                              </td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Diploma / ITI</td>
                              <td class="p-12">
                                 <span><?php echo $row['DiplomaYearOfPassing']!=null ? $row['DiplomaYearOfPassing'] : "NA" ?></span> ,&nbsp;&nbsp;&nbsp;<span><?php echo $row['DiplomaPercentage']!=null ? $row['DiplomaPercentage'].' %' : "NA" ?></span>
                              </td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">UG</td>
                              <td class="p-12">
                                 <span><?php echo $row['UGYearOfPassing']!=null ? $row['UGYearOfPassing'] : "NA" ?></span> ,&nbsp;&nbsp;&nbsp;<span><?php echo $row['UGPercentage']!=null ? $row['UGPercentage'].' %' : "NA" ?></span>
                              </td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">PG</td>
                              <td class="p-12">
                                 <span><?php echo $row['PGYearOfPassing']!=null ? $row['PGYearOfPassing'] : "NA" ?></span> ,&nbsp;&nbsp;&nbsp;<span><?php echo $row['PGPercentage']!=null ? $row['PGPercentage'].' %' : "NA" ?></span>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <h3>Course</h3>
                              </td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Skills</td>
                              <td class="p-12"><?php echo $row["skills"]; ?></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Course Studied</td>
                              <td class="p-12"><?php echo $row["courseStudied"]; ?></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Course Duration</td>
                              <td class="p-12"><?php echo $row["duration"]; ?></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Certificate Issue Date</td>
                              <td class="p-12"><?php echo $row["certificateIssueDate"]; ?></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Grade</td>
                              <td class="p-12"><?php echo $row["Grade"]; ?></td>
                           </tr>
                           <tr>
                              <td class="p-12 textBold">Remarks</td>
                              <td class="p-12"><?php echo $row["Remarks"]; ?></td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="col-md-12 m-b-20">
                        <a class="btn btn-info dwnloadButton" href="<?php echo $row['Resume'] ?>" target="_blank">Download Resume</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include 'common/footer.php' ?>
<script>
   if(location.href.indexOf("profile.php") >= -1){
   	if($(".dwnloadButton").attr("href") == "javascript:;"){
   		$(".dwnloadButton").hide()
   	}
   }
</script>
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
<div class="content" style="overflow:hidden">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="header">
                  <h4 class="title">Profile</h4>
               </div>
               <div class="content">
                  <form id="studentInfo" method="post">
                     <div id="updateStudentDetailsDiv">
                        <div class="navbar">
                           <div class="navbar-inner">
                              <div class="container">
                                 <ul>
                                    <li><a href="#tab1" data-toggle="tab">Personal</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Education</a></li>
                                    <li><a href="#tab3" data-toggle="tab">Other</a></li>
                                    <li><a href="#tab4" data-toggle="tab">Photo</a></li>
									<li><a href="#tab5" data-toggle="tab">Resume</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div id="bar" class="progress progress-striped active">
                           <div class="progress-bar"></div>
                        </div>
                        <div class="tab-content">
                           <div class="tab-pane" id="tab1">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Certificate Number</label><span class="required"> *</span>
                                       <input type="text" disabled class="form-control certificateNumber" name="certificateNumber" placeholder="Certificate Number" value="<?php echo $_GET['certiNum']; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>First Name</label><span class="required"> *</span>
                                       <input type="text" class="form-control firstName" name="firstName" placeholder="First Name" value="<?php echo $row["firstName"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Last Name</label>
                                       <input type="text" class="form-control lastName" name="lastName" placeholder="Last Name" value="<?php echo $row["lastName"]; ?>">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Date Of Birth</label><span class="required"> *</span>
                                       <input type="text" class="form-control datepicker DOB" name="DOB" placeholder="DOB" value="<?php echo $row['DOB']; ?>">
                                       <input type="hidden" class="form-control datepicker age" name="age" placeholder="DOB" value="<?php echo $row['age']; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Mobile</label><span class="required"> *</span>
                                       <input type="text" class="form-control mobile" name="mobile" placeholder="Mobile" value="<?php echo $row['mobile']; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Alternate Number</label>
                                       <input type="text" class="form-control alternateNumber" name="alternateNumber" value="<?php echo $row['alternateNumber']; ?>" placeholder="Alternate Number">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Email ID</label>
                                       <input type="text" class="form-control email" name="email" placeholder="Email ID" value="<?php echo $row['email']; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Father / Husband / Guardian Name</label><span class="required"> *</span>
                                       <input type="text" class="form-control disabled fatherName" name="fatherName" placeholder="Father / Husband Name" value="<?php echo $row['fatherOrHusbandName']; ?>">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Address</label><span class="required"> *</span>
                                       <textarea rows="4" class="form-control address" name="address" placeholder="Address" value=""><?php echo $row['address']; ?></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="pager wizard">
                                 <ul class="pager wizard">
                                    <li class="next last" style="display:none;"><a href="javascript:;">Last</a></li>
                                    <li class="next"><a href="javascript:;">Next</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="tab-pane" id="tab2">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>SSLC Year of Passing</label>
                                          <input type="text" class="form-control datepickerYears sslcYearOfPassing" name="sslcYearOfPassing" placeholder="Year of Passing" value="<?php echo $row["SSLCYearOfPassing"]; ?>">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>SSLC Percentage</label>
                                          <input type="text" class="form-control sslcPercentage" name="sslcPercentage" placeholder="Percentage" value="<?php echo $row["SSLCPercentage"]; ?>">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>PUC Year of Passing</label>
                                          <input type="text" class="form-control datepickerYears pucYearOfPassing" name="pucYearOfPassing" placeholder="Year of Passing" value="<?php echo $row["PUCYearOfPassing"]; ?>">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>PUC Percentage</label>
                                          <input type="text" class="form-control pucPercentage" name="pucPercentage" placeholder="Percentage" value="<?php echo $row["PUCPercentage"]; ?>">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>Diploma / ITI Year of Passing</label>
                                          <input type="text" class="form-control datepickerYears dipYearOfPassing" name="dipYearOfPassing" placeholder="Year of Passing" value="<?php echo $row["DiplomaYearOfPassing"]; ?>">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>Percentage</label>
                                          <input type="text" class="form-control dipPercentage" name="dipPercentage" placeholder="Percentage" value="<?php echo $row["DiplomaPercentage"]; ?>">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>UG Year of Passing</label>
                                          <input type="text" class="form-control datepickerYears ugYearOfPassing" name="ugYearOfPassing" placeholder="Year of Passing" value="<?php echo $row["UGYearOfPassing"]; ?>">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>UG Percentage</label>
                                          <input type="text" class="form-control ugPercentage" name="ugPercentage" placeholder="Percentage" value="<?php echo $row["UGPercentage"]; ?>">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>PG Year of Passing</label>
                                          <input type="text" class="form-control datepickerYears pgYearOfPassing" name="pgYearOfPassing" placeholder="Year of Passing" value="<?php echo $row["PGYearOfPassing"]; ?>">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>PG Percentage</label>
                                          <input type="text" class="form-control pgPercentage" name="pgPercentage" placeholder="Percentage" value="<?php echo $row["PGPercentage"]; ?>">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="pager wizard">
                                 <ul class="pager wizard">
                                    <li class="previous first" style="display:none;"><a href="javascript:;">First</a></li>
                                    <li class="previous"><a href="javascript:;">Previous</a></li>
                                    <li class="next last" style="display:none;"><a href="javascript:;">Last</a></li>
                                    <li class="next"><a href="javascript:;">Next</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="tab-pane" id="tab3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Skills</label><span class="required"> *</span>
                                       <input type="text" class="form-control skills" name="skills" placeholder="Skills (eg: Tally, Excel)" value="<?php echo $row["skills"]; ?>">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Course Studied</label><span class="required"> *</span>
                                       <input type="text" class="form-control courseStudied" name="courseStudied" placeholder="Course Studied" value="<?php echo $row["courseStudied"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Course Duration</label><span class="required"> *</span>
                                       <input type="text" class="form-control courseDuration" name="courseDuration" placeholder="Course Duration" value="<?php echo $row["duration"]; ?>">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Certificate Issue Date</label><span class="required"> *</span>
                                       <input type="text" class="form-control datepicker certificateIssueDate" name="certificateIssueDate" placeholder="Issue Date" value="<?php echo $row["certificateIssueDate"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Grade</label><span class="required"> *</span>
                                        <select class="form-control grade" name="grade">
                                            <option value="<?php echo $row["Grade"]; ?>" selected="selected"><?php echo $row["Grade"]; ?></option>
                                            <option value="A">A</option>
                                            <option value="A+">A+</option>
                                            <option value="B">B</option>
                                            <option value="B+">B+</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Remarks</label>
                                       <textarea rows="5" class="form-control remarks" name="remarks" placeholder="Description about the student"><?php echo $row["Remarks"]; ?></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Working</label>
                                       <div class="form-group">
                                          <label class="radio-inline"><input type="radio" name="isWorking" <?=$row['Working']=="yes" ? "checked" : ""?> value="yes">Yes</label>
                                          <label class="radio-inline"><input type="radio" name="isWorking" <?=$row['Working']=="no" ? "checked" : ""?> value="no">No</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row careerInfo">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Organization Name</label>
                                       <input type="text" class="form-control organizationName" name="organizationName" placeholder="Organization Name" value="<?php echo $row["OrganizationName"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Designation</label>
                                       <input type="text" class="form-control designation" name="designation" placeholder="Designation" value="<?php echo $row["Designation"]; ?>">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Looking for Job</label>
                                       <div class="form-group">
                                          <label class="radio-inline"><input type="radio" name="lookingForJob" <?=$row['LookingForJob']=="yes" ? "checked" : ""?> value="yes">Yes</label>
                                          <label class="radio-inline"><input type="radio" name="lookingForJob" <?=$row['LookingForJob']=="no" ? "checked" : ""?> value="no">No</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>How did you come to know about Mark Education Acadamy</label>
                                       <select class="form-control knowAbout" name="knowAbout" value="<?php echo $row["AboutMEA"]; ?>">
                                          <option value="Internet"<?=$row['AboutMEA'] == 'Internet' ? ' selected="selected"' : '';?>>Internet</option>
                                          <option value="Advertisement"<?=$row['AboutMEA'] == 'Advertisement' ? ' selected="selected"' : '';?>>Advertisement</option>
                                          <option value="Friends"<?=$row['AboutMEA'] == 'Friends' ? ' selected="selected"' : '';?>>Friends</option>
                                          <option value="Other"<?=$row['AboutMEA'] == 'Other' ? ' selected="selected"' : '';?>>Other</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="pager wizard">
                                 <ul class="pager wizard">
                                    <li class="previous first" style="display:none;"><a href="javascript:;">First</a></li>
                                    <li class="previous"><a href="javascript:;">Previous</a></li>
                                    <li class="next last" style="display:none;"><a href="javascript:;">Last</a></li>
                                    <li class="next"><a href="javascript:;" class="updateStudentInfo">Next</a></li>
                                 </ul>
                              </div>
                           </div>
						   <div class="tab-pane" id="tab4">
						   <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Update Photo ?</label>
                                       <div class="form-group">
                                          <label class="radio-inline"><input type="radio" name="updatePhoto" value="yes">Yes</label>
                                          <label class="radio-inline"><input type="radio" name="updatePhoto" checked value="no">No</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  <div class="row reUploadPhoto" style="display:none;">
							  <div class="col-md-8">
								<div class="form-group">
								  <label>Profile Photo</label>
								  <input type="file" name="file" class="form-control photo" accept="image/jpeg, image/png"/>
								</div>
							  </div>
							  <div class="col-md-4">
								<div class="form-group">
								  <div class="uploadingPhoto" style="margin-top: 32px; display: none;">
								  <span style="color: #2a9a0f; font-size: 16px;">Updating  <img src="assets/img/loading.png" width="25" class=""/></span>
								</div>
							  </div>
							  </div>
							  <div class="col-md-12">
								<div class="alert alert-warning" style="color: #222;">
								  <strong>Important!</strong> 
								  <p style="font-size: 13px;">Recommended image width is <strong>200 px</strong> and recommended height is <strong>250 px</strong>.</p>
								  <p style="font-size: 13px;">Recommended image size is <strong>35 KB</strong>.</p>
								</div>
							  </div>
							</div>
                              <div class="clearfix"></div>
                              <div class="pager wizard">
                                 <ul class="pager wizard">
                                    <li class="previous first" style="display:none;"><a href="javascript:;">First</a></li>
                                    <li class="previous"><a href="javascript:;">Previous</a></li>
                                    <li class="next last" style="display:none;"><a href="javascript:;">Last</a></li>
                                    <li class="next" title="updateExistingPhoto"><a href="javascript:;" class="uploadPhoto">Next</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="tab-pane" id="tab5">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Update Resume ?</label>
                                       <div class="form-group">
                                          <label class="radio-inline"><input type="radio" name="updateResume" value="yes">Yes</label>
                                          <label class="radio-inline"><input type="radio" name="updateResume" checked value="no">No</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-8">
                                    <div class="form-group reUploadResume" style="display:none;">
                                       <label>Resume</label>
                                       <input type="file" name="file" class="form-control resume" accept=".pdf"/>
                                    </div>
                                 </div>
								 <div class="col-md-4">
								<div class="form-group">
								  <div class="uploadingResume" style="margin-top: 32px; display: none;">
								  <span style="color: #2a9a0f; font-size: 16px;">Updating  <img src="assets/img/loading.png" width="25" class=""/></span>
								</div>
							  </div>
							  </div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="pager wizard">
                                 <ul class="pager wizard">
                                    <li class="previous first" style="display:none;"><a href="javascript:;">First</a></li>
                                    <li class="previous"><a href="javascript:;">Previous</a></li>
                                    <li class="next last" style="display:none;"><a href="javascript:;">Last</a></li>
                                    <li class=""><button type="button" class="btn btn-info btn-fill pull-right saveUpdatedResume">Save</button></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include 'common/footer.php' ?>
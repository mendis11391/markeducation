<?php
session_start();
if(!isset($_SESSION["markEduUsername"])){
  header("Location: index.php");
}
?>

<?php include 'common/sidebar.php' ?>
<?php include 'common/header.php' ?>
<div class="content" style="overflow:hidden">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="content">
                  <form id="studentInfo" method="post" enctype="multipart/form-data">
                     <div id="rootwizard">
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
                                       <input type="text" class="form-control certificateNumber" name="certificateNumber" placeholder="Certificate Number" value="">
                                       <span class="certiNumExists" style="display:none; color:red;">Certificate Number Already Exists</span>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>First Name</label><span class="required"> *</span>
                                       <input type="text" class="form-control firstName" name="firstName" placeholder="First Name" value="">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Last Name</label>
                                       <input type="text" class="form-control lastName" name="lastName" placeholder="Last Name" value="">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Date Of Birth</label><span class="required"> *</span>
                                       <input type="text" class="form-control DOB" name="DOB" placeholder="DOB" value="">
                                       <input type="hidden" class="form-control datepicker age" name="age" placeholder="DOB" value="">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Mobile</label><span class="required"> *</span>
                                       <input type="text" class="form-control mobile" name="mobile" placeholder="Mobile" value="">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Alternate Number</label>
                                       <input type="text" class="form-control alternateNumber" name="alternateNumber" placeholder="Alternate Number">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Email ID</label>
                                       <input type="text" class="form-control email" name="email" placeholder="Email ID" value="">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Father / Husband / Guardian Name</label><span class="required"> *</span>
                                       <input type="text" class="form-control fatherName" name="fatherName" placeholder="Father / Husband Name" value="">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Address</label><span class="required"> *</span>
                                       <textarea rows="4" class="form-control address" name="address" placeholder="Address" value="Mike"></textarea>
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
                                          <input type="text" class="form-control datepickerYears sslcYearOfPassing" name="sslcYearOfPassing" placeholder="Year of Passing" value="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>SSLC Percentage</label>
                                          <input type="text" class="form-control sslcPercentage" name="sslcPercentage" placeholder="Percentage" value="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>PUC Year of Passing</label>
                                          <input type="text" class="form-control datepickerYears pucYearOfPassing" name="pucYearOfPassing" placeholder="Year of Passing" value="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>PUC Percentage</label>
                                          <input type="text" class="form-control pucPercentage" name="pucPercentage" placeholder="Percentage" value="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>Diploma / ITI Year of Passing</label>
                                          <input type="text" class="form-control datepickerYears dipYearOfPassing" name="dipYearOfPassing" placeholder="Year of Passing" value="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>Percentage</label>
                                          <input type="text" class="form-control dipPercentage" name="dipPercentage" placeholder="Percentage" value="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>UG Year of Passing</label>
                                          <input type="text" class="form-control datepickerYears ugYearOfPassing" name="ugYearOfPassing" placeholder="Year of Passing" value="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>UG Percentage</label>
                                          <input type="text" class="form-control ugPercentage" name="ugPercentage" placeholder="Percentage" value="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>PG Year of Passing</label>
                                          <input type="text" class="form-control datepickerYears pgYearOfPassing" name="pgYearOfPassing" placeholder="Year of Passing" value="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>PG Percentage</label>
                                          <input type="text" class="form-control pgPercentage" name="pgPercentage" placeholder="Percentage" value="">
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
                                       <input type="text" class="form-control skills" name="skills" placeholder="Skills (eg: Tally, Excel)" value="">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Course Studied</label><span class="required"> *</span>
                                       <input type="text" class="form-control courseStudied" name="courseStudied" placeholder="Course Studied" value="">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Course Duration</label><span class="required"> *</span>
                                       <input type="text" class="form-control courseDuration" name="courseDuration" placeholder="Course Duration" value="">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Certificate Issue Date</label><span class="required"> *</span>
                                       <input type="text" class="form-control datepicker certificateIssueDate" name="certificateIssueDate" placeholder="Issue Date" value="">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Grade</label><span class="required"> *</span>
                                       <input type="text" class="form-control grade" name="grade" placeholder="Grade" value="">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Remarks</label>
                                       <textarea rows="5" class="form-control remarks" name="remarks" placeholder="Description about the student" value=""></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Working</label>
                                       <div class="form-group">
                                          <label class="radio-inline"><input type="radio" name="isWorking" value="yes">Yes</label>
                                          <label class="radio-inline"><input type="radio" name="isWorking" checked value="no">No</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row careerInfo" style="display:none;">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Organization Name</label><span class="required"> *</span>
                                       <input type="text" class="form-control organizationName" name="organizationName" placeholder="Organization Name" value="">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Designation</label><span class="required"> *</span>
                                       <input type="text" class="form-control designation" name="designation" placeholder="Designation" value="">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Looking for Job</label>
                                       <div class="form-group">
                                          <label class="radio-inline"><input type="radio" checked name="lookingForJob" value="yes">Yes</label>
                                          <label class="radio-inline"><input type="radio" name="lookingForJob" value="no">No</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>How did you come to know about Mark Education Acadamy</label>
                                       <select class="form-control knowAbout" name="knowAbout">
                                          <option>Internet</option>
                                          <option>Advertisement</option>
                                          <option>Friends</option>
                                          <option>Other</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="pager wizard">
                                 <ul class="pager wizard">
                                    <li class="previous first" style="display:none;"><a href="javascript:;">First</a></li>
                                    <li class="previous"><a href="javascript:;">Previous</a></li>
                                    <li class="next last" style="display:none;"><a href="javascript:;">Last</a></li>
                                    <li class="next"><a href="javascript:;" id="saveStudentInfo">Next</a></li>
                                 </ul>
                              </div>
                           </div>
						              <div class="tab-pane" id="tab4">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Profile Photo</label>
                                       <input type="file" name="file" class="form-control photo" accept="image/jpeg, image/png"/>
                                    </div>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="pager wizard">
                                 <ul class="pager wizard">
                                    <li class="next last" style="display:none;"><a href="javascript:;">Last</a></li>
									                  <li class="next"><a href="javascript:;" class="uploadPhoto">Next</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="tab-pane" id="tab5">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Resume</label>
                                       <input type="file" name="file" class="form-control resume" accept=".pdf"/>
                                    </div>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="pager wizard">
                                 <ul class="pager wizard">
                                    <li class="previous first" style="display:none;"><a href="javascript:;">First</a></li>
                                    <li class="previous"><a href="javascript:;">Previous</a></li>
                                    <li class="next last" style="display:none;"><a href="javascript:;">Last</a></li>
                                    <li class=""><button type="button" class="btn btn-info btn-fill pull-right uploadResume">Save</button></li>
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
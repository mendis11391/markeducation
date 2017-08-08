<?php session_start(); if(!isset($_SESSION[ "markEduUsername"])){ echo '<script>window.location = "index.php";</script>'; } ?>

<?php include 'common/sidebar.php' ?>
<?php include 'common/header.php' ?>
<input type="hidden" class="loginType" value="<?php echo $_SESSION['loginType']; ?>" />
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Students List</h4>
                    </div>
                    <div class="content">
                        <table class="table" id="studentsList">
                            <thead>
                                <tr>
                                    <!-- ko if: $root.aLogin -->
                                    <th></th>
                                    <!-- /ko -->
                                    <th>Profile</th>
                                    <th>Certificate Number</th>
                                    <th class="hideMobile">Name</th>
                                    <th class="hideMobile">Skills</th>
                                    <th class="hideMobile">Grade</th>
                                    <!-- ko if: $root.aLogin -->
                                    <th></th>
                                    <th class="hideMobile"></th>
                                    <!-- /ko -->
                                </tr>
                            </thead>
                            <tbody data-bind="foreach:studentsList">
                                <tr>
                                    <!-- ko if: $root.aLogin -->
                                    <td>
                                        <input name="selectedStudentsForDeletion" type="checkbox" data-bind="value: certificateNumber" />
                                    </td>
                                    <!-- /ko -->
                                    <td><a href="javascript:;" target="_blank" class="viewProfile">View Profile</a>
                                    </td>
                                    <td data-bind="text:certificateNumber" id="certificateNumber">No Data Received</td>
                                    <td data-bind="text: firstName" class="hideMobile">No Data Received</td>
                                    <td data-bind="text: skills" class="hideMobile">No Data Received</td>
                                    <td data-bind="text: Grade" class="hideMobile"> No Data Received</td>
                                    <!-- ko if: $root.aLogin -->
                                    <td><a href="javascript:;" id="editStudent"><i class="fa fa-pencil"></i></a>
                                    </td>
                                    <td class="hideMobile"><a href="javascript:;" id="deleteStudent"><i class="fa fa-trash text-danger"></i></a>
                                    </td>
                                    <!-- /ko -->
                                </tr>
                            </tbody>
                        </table>
                        <div class="footer">
                            <hr>
                            <div class="stats">
                                <!-- ko if: $root.aLogin -->
                                <button id="deleteMultipleStudents" class="btn btn-danger">Delete</button>
                                <!-- /ko -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include 'common/footer.php' ?>
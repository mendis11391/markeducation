$(document).ready(function () {
	//Initialization of students list table
	$('#studentsList').DataTable();
	$("#studentsList").removeAttr("class").attr("class", "table");

	//Initialization of datepicker
	$('.datepicker').datepicker({
		format: "dd-M-yyyy",
		autoclose: true
	});

	$('.DOB').datepicker({
		format: "dd-M-yyyy",
		startView: 2,
		autoclose: true,
		endDate: '-5y',
		todayHighlight: true
	});


	//save student info
	$('#rootwizard').bootstrapWizard({
		onNext: function (tab, navigation, index) {
			if (index == 1) {
				var valid = true;
				if ($('.certificateNumber').val() == "" || $('.firstName').val() == "" || $(".DOB").val() == "" || $(".mobile").val() == "" || $(".fatherName").val() == "" || $(".address").val() == "") {
					valid = false;
				}
				if (valid == false) {
					$.notify({
						icon: "pe-7s-bandaid",
						message: "Please fill all the fields!"
					}, {
						type: 'danger',
						timer: 200,
						placement: {
							from: 'top',
							align: 'right'
						}
					});
					return false;
				}
			}
			if (index == 2) {}
			if (index == 3) {
				var valid = true;
				if ($('.skills').val() == "" || $('.courseStudied').val() == "" || $(".courseDuration").val() == "" || $(".certificateIssueDate").val() == "" || $(".grade").val() == "") {
					valid = false;
				}
				if($("input[name='isWorking']:checked").val() == "yes"){
					if($(".organizationName").val() == "" || $(".designation").val() == ""){
						valid = false;
					}
				}
				if (valid == false) {
					$.notify({
						icon: "pe-7s-bandaid",
						message: "Please fill all the required fields!"
					}, {
						type: 'danger',
						timer: 200,
						placement: {
							from: 'top',
							align: 'right'
						}
					});
					return false;
				}
			}
			if (index == 4) {

			}


		},
		onTabShow: function (tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index + 1;
			var $percent = ($current / $total) * 100;
			$('#rootwizard .progress-bar').css({
				width: $percent + '%'
			});
		},
		onTabClick: function () {
			return false;
		}
	});

	$('#updateStudentDetailsDiv').bootstrapWizard({
		onNext: function (tab, navigation, index) {
			if (index == 1) {
				var valid = true;
				if ($('.certificateNumber').val() == "" || $('.firstName').val() == "" || $(".DOB").val() == "" || $(".mobile").val() == "" || $(".fatherName").val() == "" || $(".address").val() == "") {
					valid = false;
				}
				if (valid == false) {
					$.notify({
						icon: "pe-7s-bandaid",
						message: "Please fill all the required fields!"
					}, {
						type: 'danger',
						timer: 200,
						placement: {
							from: 'top',
							align: 'right'
						}
					});
					return false;
				}
			}
			if (index == 2) {}
			if (index == 3) {
				var valid = true;
				if ($('.skills').val() == "" || $('.courseStudied').val() == "" || $(".courseDuration").val() == "" || $(".certificateIssueDate").val() == "" || $(".grade").val() == "") {
					valid = false;
				}
				if (valid == false) {
					$.notify({
						icon: "pe-7s-bandaid",
						message: "Please fill all the required fields!"
					}, {
						type: 'danger',
						timer: 200,
						placement: {
							from: 'top',
							align: 'right'
						}
					});
					return false;
				}
			}


		},
		onTabShow: function (tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index + 1;
			var $percent = ($current / $total) * 100;
			$('#rootwizard .progress-bar').css({
				width: $percent + '%'
			});
		},
		onTabClick: function () {
			return false;
		}
	});


});


$(".DOB").change(function () {
	var DOB = $(this).val();
	var age = moment(DOB, "DD-MMM-YYYY").month(0).from(moment().month(0));
	age = age.replace(" years ago", "");
	$(".age").val(age);
});


$(document).on('click', '#editStudent', function (event) {
	var certiNum = $(this).closest("tr").find("#certificateNumber").text();
	window.location = "editStudentInfo.php?certiNum=" + certiNum;
});

$(document).on('click', '.viewProfile', function (event) {
	var certiNum = $(this).closest("tr").find("#certificateNumber").text();
	$(this).attr("href", "profile.php?certiNum=" + certiNum);
});


$(document).on('blur', '.certificateNumber', function (e) {

	var certiNum = $(".certificateNumber").val();
		$.ajax({
			type: "POST",
			url: "ajaxCalls.php",
			data: {
				'action': 'checkDuplicate',
				'certiNum': certiNum
			},
			cache: false,
			success: function (response) {
				var alreadyExists = JSON.parse(response);
				if(parseInt(alreadyExists.exist) > 0 ){
					$(".certiNumExists").show();
					$( ".certificateNumber" ).focus();
				}else{
					$(".certiNumExists").hide();
				}
			}
		});
});

$(document).on('click', '#saveStudentInfo', function (e) {

	var certiNum = $(".certificateNumber").val();
	var firstName = $(".firstName").val();
	var lastName = $(".lastName").val();
	var DOB = $(".DOB").val();
	var age = $(".age").val();
	var mobile = $(".mobile").val();
	var alternateNumber = $(".alternateNumber").val();
	var email = $(".email").val();
	var fatherName = $(".fatherName").val();
	var address = $(".address").val();
	var sslcYOP = $(".sslcYearOfPassing").val();
	var sslcPer = $(".sslcPercentage").val();
	var puYOP = $(".pucYearOfPassing").val();
	var puPer = $(".pucPercentage").val();
	var dipYOP = $(".dipYearOfPassing").val();
	var dipPer = $(".dipPercentage").val();
	var ugYOP = $(".ugYearOfPassing").val();
	var ugPer = $(".ugPercentage").val();
	var pgYOP = $(".pgYearOfPassing").val();
	var pgPer = $(".pgPercentage").val();
	var skills = $(".skills").val();
	var course = $(".courseStudied").val();
	var duration = $(".courseDuration").val();
	var certificateIssueDate = $(".certificateIssueDate").val();
	var grade = $(".grade").val();
	var remarks = $(".remarks").val();
	var working = $("input[name='isWorking']:checked").val();
	var organizationName = $(".organizationName").val();
	var designation = $(".designation").val();
	var lookingForJob = $("input[name='lookingForJob']:checked").val();
	var about = $(".knowAbout").val();


	var valid = true;
	if ($('.skills').val() == "" || $('.courseStudied').val() == "" || $(".courseDuration").val() == "" || $(".certificateIssueDate").val() == "" || $(".grade").val() == "") {
		valid = false;
	}
	if (valid == false) {
		$.notify({
			icon: "pe-7s-bandaid",
			message: "Please fill all the fields!"
		}, {
			type: 'danger',
			timer: 200,
			placement: {
				from: 'top',
				align: 'right'
			}
		});
		return false;
	}

	if (valid == true) {
		$.ajax({
			type: "POST",
			url: "ajaxCalls.php",
			data: {
				'action': 'saveStudentData',
				'certiNum': certiNum,
				'firstName': firstName,
				'lastName': lastName,
				'DOB': DOB,
				'age': age,
				'email': email,
				'mobile': mobile,
				'alternateNumber': alternateNumber,
				'fatherName': fatherName,
				'address': address,
				'sslcYOP': sslcYOP,
				'sslcPer': sslcPer,
				'puYOP': puYOP,
				'puPer': puPer,
				'dipYOP': dipYOP,
				'dipPer': dipPer,
				'ugYOP': ugYOP,
				'ugPer': ugPer,
				'pgYOP': pgYOP,
				'pgPer': pgPer,
				'skills': skills,
				'course': course,
				'duration': duration,
				'certificateIssueDate': certificateIssueDate,
				'grade': grade,
				'remarks': remarks,
				'working': working,
				'organizationName': organizationName,
				'designation': designation,
				'lookingForJob': lookingForJob,
				'about': about,

			},
			cache: false,
			success: function (response) {
				//alert(response);
			}
		});
	} else {
		$.notify({
			icon: "pe-7s-bandaid",
			message: "Certificate Number is mandatory!"
		}, {
			type: 'danger',
			timer: 200,
			placement: {
				from: 'top',
				align: 'right'
			}
		});
	}
});


//Update student details
$(document).on('click', '.updateStudentInfo', function (e) {

	var certiNum = $(".certificateNumber").val();
	var firstName = $(".firstName").val();
	var lastName = $(".lastName").val();
	var DOB = $(".DOB").val();
	var age = $(".age").val();
	var mobile = $(".mobile").val();
	var alternateNumber = $(".alternateNumber").val();
	var email = $(".email").val();
	var fatherName = $(".fatherName").val();
	var address = $(".address").val();
	var sslcYOP = $(".sslcYearOfPassing").val();
	var sslcPer = $(".sslcPercentage").val();
	var puYOP = $(".pucYearOfPassing").val();
	var puPer = $(".pucPercentage").val();
	var dipYOP = $(".dipYearOfPassing").val();
	var dipPer = $(".dipPercentage").val();
	var ugYOP = $(".ugYearOfPassing").val();
	var ugPer = $(".ugPercentage").val();
	var pgYOP = $(".pgYearOfPassing").val();
	var pgPer = $(".pgPercentage").val();
	var skills = $(".skills").val();
	var course = $(".courseStudied").val();
	var duration = $(".courseDuration").val();
	var certificateIssueDate = $(".certificateIssueDate").val();
	var grade = $(".grade").val();
	var remarks = $(".remarks").val();
	var working = $("input[name='isWorking']:checked").val();
	var organizationName = $(".organizationName").val();
	var designation = $(".designation").val();
	var lookingForJob = $("input[name='lookingForJob']:checked").val();
	var about = $(".knowAbout").val();

	if ($("#certificateNumber").val() != "") {
		$.ajax({
			type: "POST",
			url: "ajaxCalls.php",
			data: {
				'action': 'updateStudentData',
				'certiNum': certiNum,
				'firstName': firstName,
				'lastName': lastName,
				'DOB': DOB,
				'age': age,
				'email': email,
				'mobile': mobile,
				'alternateNumber': alternateNumber,
				'fatherName': fatherName,
				'address': address,
				'sslcYOP': sslcYOP,
				'sslcPer': sslcPer,
				'puYOP': puYOP,
				'puPer': puPer,
				'dipYOP': dipYOP,
				'dipPer': dipPer,
				'ugYOP': ugYOP,
				'ugPer': ugPer,
				'pgYOP': pgYOP,
				'pgPer': pgPer,
				'skills': skills,
				'course': course,
				'duration': duration,
				'certificateIssueDate': certificateIssueDate,
				'grade': grade,
				'remarks': remarks,
				'working': working,
				'organizationName': organizationName,
				'designation': designation,
				'lookingForJob': lookingForJob,
				'about': about,
			},
			cache: false,
			success: function (response) {}
		});
	} else {
		$.notify({
			icon: "pe-7s-bandaid",
			message: "Certificate Number is mandatory!"
		}, {
			type: 'danger',
			timer: 200,
			placement: {
				from: 'top',
				align: 'right'
			}
		});
	}
});


$(document).on('click', '#deleteMultipleStudents, #deleteStudent', function (event) {
	var self = this;
	var StudentsData = $('input[name=selectedStudentsForDeletion]:checked').map(function () {
		return $(this).val();
	}).get();

	if (StudentsData == "") {
		var temp = $(self).parent().closest("tr").find("#certificateNumber").text();
		//Converting string to object for the data to be valid
		StudentsData = JSON.parse(
			JSON.stringify({
				StudentsData: temp
			})
		);
	}

	if (StudentsData.StudentsData != "") {
		$.ajax({
			type: "POST",
			url: "ajaxCalls.php",
			data: {
				'action': 'deleteMultipleStudents',
				'deleteStudents': StudentsData
			},
			success: function (response) {
				if ($.trim(response).indexOf("deleted") > -1) {
					setTimeout(function () {
						location.href = "dashboard.php";
					}, 2000);

					$.notify({
						icon: "pe-7s-like2",
						message: "Successfully Deleted!"
					}, {
						type: 'success',
						timer: 200,
						placement: {
							from: 'top',
							align: 'right'
						}
					});
				}
			}
		});
	} else {
		$.notify({
			icon: "pe-7s-help1",
			message: "Please select a student to delete!"
		}, {
			type: 'danger',
			timer: 200,
			placement: {
				from: 'top',
				align: 'right'
			}
		});
	}
});


//Show / hide working info
$('input[name=isWorking]').change(function () {
	var value = $('input[name=isWorking]:checked').val();
	if (value == 'yes') {
		$(".careerInfo").show();
	} else if (value == 'no') {
		$(".careerInfo").hide();
	}
});


$('.uploadResume').on('click', function () {
	var certiNum = $(".certificateNumber").val();
	var file_data = $('.resume').prop('files')[0];
	var form_data = new FormData();
	form_data.append('file', file_data);
	$.ajax({
		url: 'uploadResume.php?certinum=' + certiNum, // point to server-side PHP script 
		dataType: 'text', // what to expect back from the PHP script, if anything
		cache: false,
		contentType: false,
		processData: false,
		data: form_data,
		type: 'post',
		success: function (response) {
			if ($.trim(response) != 'File already exists') {
				setTimeout(function () {
					location.href = "dashboard.php";
				}, 2000);

				$.notify({
					icon: "pe-7s-like2",
					message: "Saved Successfully!"
				}, {
					type: 'success',
					timer: 200,
					placement: {
						from: 'top',
						align: 'right'
					}
				});
			} else {
				alert("File name already exists!");
			}
		}
	});

});

//Edit profile page show / hide resume div
$('input[name=updateResume]').change(function () {
	if ($(this).val() == 'yes') {
		$(".reUploadResume").show();
	} else {
		$(".reUploadResume").hide();
	}
});


$('.saveUpdatedResume').on('click', function () {
	var certiNum = $(".certificateNumber").val();
	var file_data = $('.resume').prop('files')[0];
	var form_data = new FormData();
	form_data.append('file', file_data);
	if ($('input[name=updateResume]').val() == 'yes' && $('.resume').prop('files')[0] != null) {
		$.ajax({
			url: 'uploadResume.php?certinum=' + certiNum + '&action=updateResume', // point to server-side PHP script 
			dataType: 'text', // what to expect back from the PHP script, if anything
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,
			type: 'post',
			success: function (response) {
				setTimeout(function () {
					location.href = "dashboard.php";
				}, 2000);

				$.notify({
					icon: "pe-7s-like2",
					message: response
				}, {
					type: 'success',
					timer: 200,
					placement: {
						from: 'top',
						align: 'right'
					}
				});
			}
		});
	} else {
		setTimeout(function () {
			location.href = "dashboard.php";
		}, 5000);

		$.notify({
			icon: "pe-7s-like2",
			message: "Updated Successfully!"
		}, {
			type: 'success',
			timer: 200,
			placement: {
				from: 'top',
				align: 'right'
			}
		});
	}

});


$('.uploadPhoto').on('click', function () {
	var certiNum = $(".certificateNumber").val();
	var file_data = $('.photo').prop('files')[0];
	var ext = "";
	if (file_data != null || file_data != undefined) {
		var revFname = $('.photo').prop('files')[0].name.split(".").reverse().join(".");
		ext = revFname.split(".")[0];
	}
	var form_data = new FormData();
	form_data.append('file', file_data);
	$.ajax({
		url: 'uploadPhoto.php?certinum=' + certiNum + '&ext=' + ext, // point to server-side PHP script 
		dataType: 'text', // what to expect back from the PHP script, if anything
		cache: false,
		contentType: false,
		processData: false,
		data: form_data,
		type: 'post',
		success: function (response) {
			if ($.trim(response) != 'File already exists') {

			} else {
				alert("File name already exists!");
			}
		}
	});

});


$('#verifyStudent').on('click', function () {
	var certiNum = $(".certificateNumberForVerification").val();
	if (certiNum != "") {
        $(".loader").show();
		$.ajax({
			type: "POST",
			url: "ajaxCalls.php",
			data: {
				'action': 'verifyStudent',
				'certiNum': certiNum,

			},
			cache: false,
			success: function (response) {
                $(".loader").hide();
				if (response.indexOf("Undefined variable") <= -1 && response.indexOf("undefined") <= -1) {
					var obj = jQuery.parseJSON(response);
					var studentName = obj[1].firstName + " " + obj[1].lastName;
					$(".modalResultErrorDiv").hide();
					$(".dispStudentName").text(studentName);
					$(".dispCourse").text(obj[1].courseStudied);
					$(".dispGrade").text(obj[1].Grade);
					$(".dispCertificateNum").text(obj[1].certificateNumber);
					var dateString = obj[1].certificateIssueDate;
					var dateObj = new Date(dateString);
					var momentObj = moment(dateObj);
					var formattedCertificateDate = momentObj.format('MMM DD, YYYY');
					$(".dispCertificateIssueDate").text(formattedCertificateDate);
					$(".profilePhoto").attr('src', obj[1].photo);
					$(".studentDataTitle").show();
					$(".modalResultDiv").show();

				} else {
					$(".studentDataTitle").hide();
					$(".modalResultDiv").hide();
					$(".modalResultErrorDiv").show();
					$(".dispStudentName").text("Does not exist");
					$(".dispCourse").text("Does not exist");
					$(".dispGrade").text("Does not exist");
					$(".dispCertificateNum").text("Does not exist");
					$(".dispCertificateIssueDate").text("Does not exist");
				}
				$(".verifyInputBx").val(certiNum);
				$("#myModal").show();

			}
		});
	} else {
		$.notify({
			icon: "pe-7s-bandaid",
			message: "Please enter a certificate number!"
		}, {
			type: 'danger',
			timer: 100,
			placement: {
				from: 'top',
				align: 'center'
			}
		});
	}

});

$('.verifyInputBtn').on('click', function () {
	var certiNum = $(".verifyInputBx").val();

	$.ajax({
		type: "POST",
		url: "ajaxCalls.php",
		data: {
			'action': 'verifyStudent',
			'certiNum': certiNum,

		},
		cache: false,
		success: function (response) {
			if (response.indexOf("Undefined variable") <= -1 && response.indexOf("undefined") <= -1) {
				var obj = jQuery.parseJSON(response);
				var studentName = obj[1].firstName + " " + obj[1].lastName;
				$(".dispStudentName").text(studentName);
				$(".dispCourse").text(obj[1].courseStudied);
				$(".dispGrade").text(obj[1].Grade);
				$(".dispCertificateNum").text(obj[1].certificateNumber);
				$(".dispCertificateIssueDate").text(obj[1].certificateIssueDate);

			} else {
				$(".dispStudentName").text("Does not exist");
				$(".dispCourse").text("Does not exist");
				$(".dispGrade").text("Does not exist");
				$(".dispCertificateNum").text("Does not exist");
				$(".dispCertificateIssueDate").text("Does not exist");
			}

		}
	});

});

$(".closeBtn, body").click(function () {
	$("#myModal").hide();
});

//Stop modal from hiding on click on modal body
$(".verificationResult").click(function(e){
  e.stopPropagation();
});


//Hide datable fields in mobile screen
const mq = window.matchMedia( "(max-width: 550px)" );
if (mq.matches) {
  $(".hideMobile").hide();
} else {
  $(".hideMobile").show();
}
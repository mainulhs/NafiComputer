jQuery(document).ready(function(){

    // ADD CLASS VALIDATION
    $("#addClass").on("click", function(){
        $(this).validate({
            errorElement: "div",
            errorPlacement: function(error, element) {
                error.appendTo( element.next(".form-error").html(''));
                //error.appendTo($("div#errorcont"));
            },
            rules: {
                'className': {
                    required:true,
                },
                'classDesc': {
                    required:true
                }
            },
            messages:{
                'className': {
                    required:"Class Name Required! ",
                },
                'classDesc': {
                    required:"Class Description Required! ",
                }
            },
            success: function(label) {
                label.text("").addClass("success");
            }
        });
    });

    // ADD SECTION VALIDATION
    $("#addSection").on("click", function(){
        $(this).validate({
            errorElement: "div",
            errorPlacement: function(error, element) {
                error.appendTo( element.next(".form-error").html(''));
                //error.appendTo($("div#errorcont"));
            },
            rules: {
                'sectionName': {
                    required:true,
                },
                'sectionDesc': {
                    required:true
                }
            },
            messages:{
                'sectionName': {
                    required:"Section Name Required! ",
                },
                'sectionDesc': {
                    required:"Section Description Required! ",
                }
            },
            success: function(label) {
                label.text("").addClass("success");
            }
        });
    });

    // ADD SUBJECT VALIDATION
    $("#addSubject").on("click", function(){
        $(this).validate({
            errorElement: "div",
            errorPlacement: function(error, element) {
                error.appendTo( element.next(".form-error").html(''));
                //error.appendTo($("div#errorcont"));
            },
            rules: {
                'coreSubName': {
                    required:true,
                }
            },
            messages:{
                'sectionName': {
                    required:"Subject Name Required! ",
                }
            },
            success: function(label) {
                label.text("").addClass("success");
            }
        });
    });

    // CHANGE PASSWORD VALIDATION
    $("#change_password").on("click", function(){
         $(this).validate({
                 errorElement: "div",
                 errorPlacement: function(error, element) {
                    error.appendTo( element.next(".form-error").html(''));
                    //error.appendTo($("div#errorcont"));
             },
            rules: {
                'oldPass':{
                     required: true,
                },
                 'newPass': {
                    required:true,
                },
                'conPass': {
                    required:true,
                    equalTo:'#newPass'
                }
            },
             messages:{
                'oldPass':{
                    required:"Old Password Requird!"
                },
                'newPass': {
                    required:"New Password Required! "
                },
                'conPass': {
                    required:"Confirm Password Required! ",
                         equalTo: "Does Notmatch"
                    }
                },
            success: function(label) {
                    label.text("").addClass("success");
                    }
                });
     });

    // ADD TEACHER VALIDATION
    $("#addTeacher").on("click", function(){
        $(this).validate({
            errorElement: "div",
            errorPlacement: function(error, element) {
                error.appendTo( element.next(".form-error").html(''));
                //error.appendTo($("div#errorcont"));
            },
            rules: {
                'teacherName': {
                    required:true,
                },
                'fName': {
                    required:true,
                },
                'mName': {
                    required:true,
                },
                'preAddress': {
                    required:true,
                },
                'perAddress': {
                    required:true,
                },
                'email': {
                    required:true,
                },
                'mobileNo': {
                    required:true,
                },
                'gender': {
                    required:true,
                },
                'religion': {
                    required:true,
                },
                'dob': {
                    required:true,
                },
                'doj': {
                    required:true,
                },
                'openSalary': {
                    required:true,
                },
                'subPreference': {
                    required:true,
                }
            },
            messages:{
                'teacherName': {
                    required:"Teacher Name Required! ",
                },
                'fName': {
                    required:"Father Name Required! ",
                },
                'mName': {
                    required:"Mother Name Required! ",
                },
                'preAddress': {
                    required:"Present Address Required! ",
                },
                'perAddress': {
                    required:"Permanent Address Required! ",
                },
                'email': {
                    required:"Email Required! ",
                },
                'mobileNo': {
                    required:"Mobile No. Required! ",
                },
                'gender': {
                    required:"Gender Required! ",
                },
                'religion': {
                    required:"Religion Required! ",
                },
                'dob': {
                    required:"DOB Required! ",
                },
                'doj': {
                    required:"DOJ Required! ",
                },
                'openSalary': {
                    required:"Salary Required! ",
                },
                'subPreference': {
                    required:"Subject Preferance Required! ",
                },

            },
            success: function(label) {
                label.text("").addClass("success");
            }
        });
    });

  /*  // ADD STUDENT VALIDATION
    $("#addStudent").on("click", function(){
        $(this).validate({
            errorElement: "div",
            errorPlacement: function(error, element) {
                error.appendTo( element.next(".form-error").html(''));
                //error.appendTo($("div#errorcont"));
            },
            rules: {
                'registrationID': {
                    required:true,
                },
                'admissionDate': {
                    required:true,
                },
                'firstName': {
                    required:true,
                },
                'lastName': {
                    required:true,
                },
                'class': {
                    required:true,
                },
                'shift': {
                    required:true,
                },
                'section': {
                    required:true,
                },
                'rollNo': {
                    required:true,
                },
                'fatherName': {
                    required:true,
                },
                'motherName': {
                    required:true,
                },
                'gender': {
                    required:true,
                },
                'religion': {
                    required:true,
                },
                'presentAddress': {
                    required:true,
                }
                'perAddress': {
                    required:true,
                }
                'mobile': {
                    required:true,
                }
                'guardianName': {
                    required:true,
                }
                'guardianCN': {
                    required:true,
                }
                'guardianAddress': {
                    required:true,
                }
                'sguardianName': {
                    required:true,
                }
                'sguardianCN': {
                    required:true,
                }
                'sguardianAddress': {
                    required:true,
                }
                'username': {
                    required:true,
                }
                'password': {
                    required:true,
                }
                'userType': {
                    required:true,
                }

            },
            messages:{
                'registrationID': {
                    required:"Registration ID Required! ",
                },
                'admissionDate': {
                    required:"Admission Date Required! ",
                },
                'firstName': {
                    required:"First Name Required! ",
                },
                'lastName': {
                    required:"Last Name Required! ",
                },
                'class': {
                    required:"Class Required! ",
                },
                'shift': {
                    required:"Shift Required! ",
                },
                'section': {
                    required:"Section Required! ",
                },
                'rollNo': {
                    required:"Roll No Required! ",
                },
                'fatherName': {
                    required:"Father Name Required! ",
                },
                'motherName': {
                    required:"Mother Name Required! ",
                },
                'gender': {
                    required:"Gender Required! ",
                },
                'religion': {
                    required:"Religion Required! ",
                },
                'preAddress': {
                    required:"Present Address Required! ",
                },
                'perAddress': {
                    required:"Permanent Address Required! ",
                },
                'mobile': {
                    required:"Mobile No. Required! ",
                },
                'guardianName': {
                    required:"Guardian Name Required! ",
                },
                'guardianCN': {
                    required:"GuardianCN Required! ",
                },
                'guardianAddress': {
                    required:"Guardian Address Required! ",
                },
                'sguardianName': {
                    required:"Second Guardian Name Required! ",
                },
                'sguardianCN': {
                    required:"Second Guardian Cell No Required! ",
                },
                'sguardianAddress': {
                    required:"Second Guardian Address Required! ",
                },
                'username': {
                    required:"User Name Required! ",
                },
                 'password': {
                    required:"Password Required! ",
                },
                'userType': {
                    required:"User Type Required! ",
                },

            },
            success: function(label) {
                label.text("").addClass("success");
            }
        });
    });*/
});
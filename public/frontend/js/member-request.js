$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#requestForm').validate({
            rules: {
                fname: {
                    required: true,
                },
                lname: {
                    required: true,
                },
                 email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                    minlength: 10,
                    maxlength:10
                },
                dobad: {
                    required: true
                },
                age: {
                    required: true
                },
                gender: {
                    required: true
                },
                country: {
                    required: true
                },
                state: {
                    required: true
                },
                district: {
                    required: true
                },
                munvdc: {
                    required: true
                },
                ward: {
                    required: true
                }   
            },
            messages: {
                fname: {
                    required: "<p style='color:red;'> * Please enter your First Name ! </p>"
                },
                lname: {
                    required: "<p style='color:red;'> * Please enter your Last Name ! </p>"
                },
                 email: {
                    required: "<p style='color:red;'> * Please enter your valid email ! </p>"
                },
                mobile: {
                    required: "<p style='color:red;'> * Please enter your mobile number ! </p>",
                    minlength: "<p style='color:red;'> * Mobile number must be 10 digits long ! </p>",
                    maxlength: "<p style='color:red;'> * Mobile number must be 10 digits long ! </p>"
                },
                dobad: {
                    required: "<p style='color:red;'> * Please select your date of birth ! </p>"
                },
                age: {
                    required: "<p style='color:red;'> * Please enter your age ! </p>"
                },
                gender: {
                    required: "<p style='color:red;'> * Please select your gender ! </p>"
                },
                country: {
                    required: "<p style='color:red;'> * Please select your country ! </p>"
                },
                state: {
                    required: "<p style='color:red;'> * Please select your state ! </p>"
                },
                district: {
                    required: "<p style='color:red;'> * Please select your district ! </p>"
                },
                munvdc: {
                    required: "<p style='color:red;'> * Please enter ! </p>"
                },
                ward: {
                    required: "<p style='color:red;'> * Please enter your ward number! </p>"
                }
            },
        })
    })
        
 })(jQuery)
})
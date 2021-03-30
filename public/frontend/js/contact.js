$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true
                },
                subject: {
                    required: true
                },
                number: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                }
            },
            messages: {
                name: {
                    required: "<p style='color:red;'>* Name required </p>"
                },
                subject: {
                    required: "<p style='color:red;'>* Subject required </p>"
                },
                number: {
                    required: "<p style='color:red;'>* Contact number required </p>",
                    minlength: "<p style='color:red;'>* Number must be 10 digits long </p>"
                },
                email: {
                    required: "<p style='color:red;'>* Invalid email </p>"
                },
                message: {
                    required: "<p style='color:red;'>* Please write your message or feedbacks</p>"
                }
            },
        })
    })
        
 })(jQuery)
})
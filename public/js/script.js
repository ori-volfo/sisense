$(document).ready(function(){

    var submitBtn = $('#submit');

    // Fields validations
    $('#email').focusout(function(e){
       if(!validateEmail(e.target.value)){
           inValid(this);
       }
       else{
           valid(this);
       }
    });

    $('#first, #last').change(function(e){
        if(!validateName(e.target.value)){
            inValid(this);
        }
        else{
            valid(this);
        }
    });

    $('#timeframe').change(function(e){
        valid(this);
    });


    // Check entire form
    function validateForm(){
        var formFields = [];

        $('#registration-form .form-control').each(function(key,field){
            formFields.push($(field).data('valid'));
        });
        var formIsValid = formFields.every(function(valid){return valid});

        if(formIsValid){
            submitBtn.removeAttr('disabled');
        }
        else{
            submitBtn.attr('disabled','disabled');
        }
    }

    // Submit to backend
    submitBtn.click(function(e){
        e.preventDefault();
        var form = $('#registration-form').serializeArray();

        form[3].value = selectValues[parseInt(form[3].value)]; // replace Select field numeric's value with text

        $.ajax({
            type: "POST",
            url: '/user/register',
            data: form,
            dataType: "text",
            success: function(data){
                $('.modal-content').hide();
                $('.successbox').fadeIn();
            },
            error: function(data){
            var errorMsg = JSON.parse(data.responseText).message;
            console.error(errorMsg);
                $('.modal-content').hide();
                if(errorMsg.indexOf("Duplicate entry") > -1){
                    $('#emailErrMsg').show();
                }
                else{
                    $('#generalErrMsg').append('<div>'+errorMsg+'</div>').show();
                }
                $('.errorbox').fadeIn();
            }
        });

    });
    $('#backBtn').click(function(){
        $('.errorbox').hide();
        $('.modal-content').fadeIn();
    });

    // Helper functions
    function valid(_this){
        $(_this).data('valid',true).parent().addClass('valid').removeClass('error');
        validateForm();
    }

    function inValid(_this){
        $(_this).data('valid',false).parent().addClass('error').removeClass('valid');
        validateForm();
    }
});


// REGEX functions
function validateEmail(email) {
    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(email.toLowerCase());
}

function validateName(str){
    var reg = /^[a-zA-Z ]+$/;
    return reg.test(str.toLowerCase());
}
// Select box text values
var selectValues = {
    1: 'Over 6 months',
    2: '3 - 6 months',
    3: 'Less than 3 months'
};
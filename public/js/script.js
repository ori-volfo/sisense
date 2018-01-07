$(document).ready(function(){

    $('#submit').click(function(e){
        var form = $('#registration-form').serializeArray();
        // console.log(form);

    });

    $('#email').focusout(function(e){
       if(!validateEmail(e.target.value)){
           inValid(this);
       }
       else{
           valid(this);
       }
    });

    $('#first, #last').keyup(function(e){
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

});

function validateEmail(email) {
    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(email.toLowerCase());
}

function validateName(str){
    var reg = /^[a-zA-Z ]+$/;
    return reg.test(str.toLowerCase());
}

function valid(_this){
    $(_this).parent().addClass('valid').removeClass('error');
}

function inValid(_this){
    $(_this).parent().addClass('error').removeClass('valid');
}
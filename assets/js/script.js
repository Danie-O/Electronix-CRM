function getValues(){
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var email = $('#email').val();
    var mobile = $('#mobile').val();
    var address = $('#address').val();
    var password = $('#password1').val();

    if(fname.length !==0 && lname.length !==0 && email.length !== 0 && mobile.length == 10 && address.length !== 0){
        var input = {
            "fname" : fname,
            "lname" : lname,
            "email" : email,
            "mobile" : mobile,
            "address" : address,
            "password" : password,
            "action" : "save_into_db"
        };
        $.ajax({
            url : 'controller.php',
            type : 'POST',
            dataType : "json",
            data : input,
            success : function(response)
            {
                $('.success').html(response.message).show();
                $('.error').hide();
            },
            error : function(response)
            {
                 $('.error').html("Error").show();
                 $('.success').hide();
            }
        });
    }
    else
    {
           
            $('.error').html("One or more than one field empty.").show();
            $('.success').hide();
    }
}
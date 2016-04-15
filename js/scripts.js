$(function(){


    $("#register_email").on('change', function(){


    var email = $(this).val();



    $.post("ajax_functions.php", {email : email}, function(data){

    

        $(".db-feedback").html(data);

    });




    });

   
$(document).ready(function () {
    $(document).on("click", "li.closed a", function () {
        $(this)
        .parent()
        .animate({
            height: "300px",
            width: "300px",
            backgroundColor: "#fff"
        })
        .attr("class", "open");
        $(this).text("Close");
    }); // closes click on "li.closed a"
$(document).on("click", "li.open a", function () {
    $(this)
    .parent()
    .animate({
       width: "72px",
       height: "72px",
       backgroundColor: "#09f"
    })
    .attr("class", "closed");
    $(this).text("Open");
}); // closes click on "li.closed a"
}); // closes document ready function





    // $('#login-form-link').click(function(e) {
    //     $("#login-form").delay(100).fadeIn(100);
    //     $("#register-form").fadeOut(100);
    //     $('#register-form-link').removeClass('active');
    //     $(this).addClass('active');
    //     e.preventDefault();
    // });
    // $('#register-form-link').click(function(e) {
    //     $("#register-form").delay(100).fadeIn(100);
    //     $("#login-form").fadeOut(100);
    //     $('#login-form-link').removeClass('active');
    //     $(this).addClass('active');
    //     e.preventDefault();
    // });



    // $('#register-form').on('submit',function(){
        
        

    //     if($('#password').val()!=$('#confirm-password').val()){




    //     alert("Passwords don't match");
    //     return false;
    // }

    //     return true;

    // });




});

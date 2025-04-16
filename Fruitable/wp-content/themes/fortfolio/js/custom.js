$(document).ready(function(){
    // alert("Document is ready!");
      $("#contactForm").on("submit", function(e){
            e.preventDefault(); 
        var name = $("#name").val().trim();
        var email = $("#email").val().trim();
        var subject = $("#subject").val().trim();
        var message = $("#message").val().trim();
        var error_message = $("#error_message");
       
        error_message.html('');
       if(name =='' || email == '' || subject == '' || message == ''){
          error_message.html('<h3 style="color:red;">All fields are required</h3>').show().delay(2000).fadeOut(1000);
          return false;
       }
        
        //  alert(formdata);
        $.ajax({
            url:ajaxurl,
            action: "contact_form",
            type:"POST",
            data: {
                action: "contact_form",
                name: name,
                email: email,
                subject: subject,
                message: message
            },
            success: function(response){
                 $("#success_message").html(`<h3 style="color:green;">Message sent successfully </h3>`).show().delay(2000).fadeOut(1000);
                $("#contactForm")[0].reset();
                // $("#success_message").show().delay(2000).fadeOut(1000);
                console.log(response);
            }
        })

    });
});

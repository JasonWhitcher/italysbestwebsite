$(document).ready(function(){
    
    var logid = 'IB: '; // console.log() identifier
    
    /* Contact form */
    $('input').attr('maxlength', 35);
    $('textarea').attr('maxlength', 400);
    
    // AJAX and client side validation for contact form
    
    $('#ib-contact-submit').click(function(event){
    
        //$('#ib-contact-form').submit(function(event){
        event.preventDefault();
        
        // Form validation.
        form_name = $('#ib-contact-name').val();
        form_email = $('#ib-contact-email').val();
        form_subject = $('#ib-contact-subject').val();
        
        validateEmail(form_email);
        
        function validateEmail(email){
            console.log(logid + email);
            var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if ( email.match(regex) ) {
                console.log(logid + 'email true');
            } else {
                console.log(logid + 'email false');
            }
        }
        
        $.ajax(
            {
                url: 'process-contact-form.php',
                method: 'GET',
                data: $('#ib-contact-form').serialize(),
                beforeSend: function(){
                    // 1. Remove existing messages to the user.
                    // 2. Remove submit button.
                    // 3. Display 'loading icon/message.
                    $('#ib-contact-ajax-message').empty();
                    $('#ib-contact-ajax-message').hide();
                    $('#ib-contact-submit').fadeOut(100);
                    $('#ib-contact-loader-message').delay(300).fadeIn(100).addClass('ib-contact-loader-container');
                    
                },
                success: function(data){
                    // 1. Remove 'loading icon/message.
                    // 2. Display submit button.
                    // 3. Display message to the user.
                    
                    $('#ib-contact-loader-message').fadeOut(100).removeClass('ib-contact-loader-container');
                    $('#ib-contact-submit').delay(300).fadeIn(100);
                    
                    // Check success or failure and display message.
                    if (data == 'TRUE') {
                        console.log(logid + data);
                        $('#ib-contact-ajax-message').html('Message sent. Thank you.').delay(200).fadeIn(1000);
                    } else {
                        console.log(logid + data);
                        $('#ib-contact-ajax-message').html('Sorry, something went wrong, please try again later.').delay(200).fadeIn(1000);
                    }
                    
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(logid + textStatus);
                    console.log(logid + errorThrown);
                    $('#ib-contact-loader-message').fadeOut(100).removeClass('ib-contact-loader-container');
                    $('#ib-contact-submit').delay(300).fadeIn(100);
                    $('#ib-contact-ajax-message').html('An error has occured, please try again later.').delay(200).fadeIn(1000);
                },
                complete: function(){
                    // No action needed for this application.
                }
            }
        );
    });
    
});


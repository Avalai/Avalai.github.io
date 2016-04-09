/****************
//  CONTACT FORM
//  Code from https://scotch.io/tutorials/submitting-ajax-forms-with-jquery
****************/

$(document).ready(function() {

    // Initialize fancybox
    $(".fancybox").fancybox();


});

/*
    // Scripts for the Contact Form
    $('input').blur(function() {
      var fieldName = $(this).attr(name);
      if (fieldName == 'name'){
        //validate name
        var enteredName = $('input[name=name]').val();
        if (enteredName.length < 2){
          addNameError();
        }

      } else if (fieldName == 'email') {
        //validate email
        var enteredEmail = $('input[name=email]').val();
        var  emailPattern = /[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,4}/i;
        var emailTest = emailPattern.test(enteredEmail);

        if (emailTest == false){
          addEmailError();
        }

      } else if (fieldName == 'message'){
        //validate message
        var enteredMessage = $('input[name=message]').val();
        if (enteredName.length < 2){
          addMessageError();
        }
      }
    });

    $('#contactForm').submit(function(event) {

    $('#contactForm').removeClass('has-error'); // remove the error class
    $('.help-block').remove(); // remove the error text

      // get the form data
      // there are many ways to get this data using jQuery (you can use the class or id also)
      var formData = {
          'name'              : $('input[name=name]').val(),
          'email'             : $('input[name=email]').val(),
          'message'    : $('input[name=message]').val()
      };

    // process the form
    $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : '../contact.php', // the url where we want to POST
        data        : formData, // our data object
        dataType    : 'json' // what type of data do we expect back from the server
    })
    // using the done promise callback
    .done(function(data) {

        // log data to the console so we can see
        console.log(data);

        // here we will handle errors and validation messages
        if ( ! data.success) {

            // handle errors for name ---------------
            if (data.errors.name) {
                addNameError();
            }

            // handle errors for email ---------------
            if (data.errors.email) {
                addEmailError();
            }
            // handle errors for superhero alias ---------------
            if (data.errors.message) {
                addMessageError();
            }
        } else {
            // ALL GOOD! just show the success message!
            $('#contactForm').append('<div class="alert alert-success">' + data.message + '</div>');
            $('#submit').addClass('pure-button-disabled');
            // usually after form submission, you'll want to redirect
            // window.location = '/thank-you'; // redirect a user to another page
            alert('success'); // for now we'll just alert the user
        }

    });

});

function addNameError() {
  $('#name-input').addClass('has-error'); // add the error class to show red input
  $('#name-input').append('<div class="help-block">' + data.errors.name + '</div>'); // add the actual error message under our input
};
function addEmailError() {
  $('#email-input').addClass('has-error'); // add the error class to show red input
  $('#email-input').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
};
function addMessageError() {
  $('#message-input').addClass('has-error'); // add the error class to show red input
  $('#message-input').append('<div class="help-block">' + data.errors.message + '</div>'); // add the actual error message under our input
}; */

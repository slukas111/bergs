function validate(){
    var error="";
    var name = document.getElementById( "user_name" );

    // error_message.style.padding = "10px";

    // User name is empty and alerts user to enter name
    if( name.value == "" ){
        error = " Please enter your name ";
        document.getElementById( "error-message" ).innerHTML = error;
        return false;
    }
    // Checks if User Email is empty and missing @ symbol alert
    var email = document.getElementById( "user_email" );
    if( email.value == "" || email.value.indexOf( "@" ) == -1 ){
        error = " You Have To Write Valid Email Address. ";
        document.getElementById( "error-message" ).innerHTML = error;
        return false;
    }
    // Checks if User Message is empty alert
    var message = document.getElementById( "user_message" );
    if( message.value == ""){
        error = " Please Input a Message. ";
        document.getElementById( "error-message" ).innerHTML = error;
        return false;
    }
    else
    {
    // Allow the submit to go to PHP form on SubmitS
    return true;
    }
}

<?php 

//post method from 'submit' button
if (isset($_POST['email']) && $_POST['email'] !=''){

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];
// was working on actually sending the email not working yet
    $sent = "sashamati@gmail.com"; //place own email for testing
    $body = "";
// take in the form and create it for user
    $body .= "From: ".$name. "\r\n";
    $body .= "Email: ".$email. "\r\n";
    $body .= "Message: ".$name. "\r\n";

// print the form with html
    printf(
    "<body>
    <h3> Thank You %s for Your Submission!</h3>
    <p> we shall reply to you shortly </p>
    <div class='email-copy'>
    <h4> Email: %s </h4>
    <h4> Message </h4>
    <p> %s </p>

    </div>
    </body>",$name,$email,$message);

    

}


?>
<html>
    <body>
<?php 

//post method from 'submit' button
if (isset($_POST['email']) && $_POST['email'] !=''){

    // Variables declared
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Variables to send email to a 3rd party
    $sent = "sashamati@gmail.com"; //place own email for testing
    $body = "";

    $body .= "From: ".$name. "\r\n";
    $body .= "Email: ".$email. "\r\n";
    $body .= "Message: ".$message. "\r\n";

// print the body
    printf(
    "
    <style>
    body {
        background-color: linen;
      }
      
      h3 {
        color: maroon;
        font-size: 35px;
        margin-top: 25px;
      }
      p {
        text-align: center;
        margin-top: -25px;
        font-size: 24px;
        padding: 10px;
      }
      .card {
        border-radius: 10px;
        box-shadow: 0 20px 20px rgba(0, 0, 0, 0.08);
        display: flex;
        margin: 20px auto;
        max-width: 800px;
      }
      .form-btn {
        position: relative;
        border: none;
        padding: 10px;
        margin-top: 20px;

      }
      .card-side {
        width: 450px;
      }
      img  {
        height: 345px;
        width: 300px;
      }
      .card-side--body {
        background-color: #fff;
        padding: 50px;
        padding-bottom: 20px;
        padding-left: 150px;
        position: relative;
      }
      span {
        text-align: center;


      }
      .card-text {

      }
    </style>
    <body>
    <h3 style='text-align: center'> Thank you, %s for your submission</h3>
    <p> we shall reply to you shortly </p>
    <div class='card'>
  <div class='card-side card-side--image'>
    <img src='https://picsum.photos/200/300/?blur=1' />
  </div>
  <div class='card-side card-side--body'>
    <h4 class='card-title'>Here is your copy</h4>
    <p class='card-text'><h5>Email: %s</h5><br><h5>%s</h5></p>
    <a href='index.html'><button class='form-btn'>Return Home</button>
  </div>
</div>

    </div>
    </body>",$name,$email,$message);
}


?>
</body>
</html>

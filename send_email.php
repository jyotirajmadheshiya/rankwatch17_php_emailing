<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
        
$php_mailer = new PHPMailer(); 
$php_mailer->Host = "smtp.mandrillapp.com";  
$php_mailer->Port = 587; 
$php_mailer->SMTPAuth = true;  
$php_mailer->Username = "jyoti1595raj@gmail.com"; 
$php_mailer->Password = "16602a342a47e4ede4e6ca8a31c8ad98-us16"; 
$php_mailer->SMTPDebug = 1; 
$php_mailer->AddAddress($_POST["emailaddress"]); 
$php_mailer->Subject = $_POST["subject"];
$php_mailer->MsgHTML($_POST["message"]); 
$php_mailer->setFrom('jyoti1595raj@gmail.com', "Jyoti Raj"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mail Information! </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>
        <?php 
            if(!$php_mailer->send()) {
                echo "Email sent failed.";
            } else {
                echo "Email sent.";
            }
        ?>    
    </h1>
</div>
  
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="send_email.php" method="post">
                <div class="form-group">
                    <label for="emailaddress">Email address:</label>
                    <input type="email" class="form-control" value="
                    <?php 
                        if (isset($_POST["emailaddress"])) {
                            echo $_POST["emailaddress"];
                        }
                    ?>" placeholder="Enter email address" name="emailaddress">
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" value="<?php 
                        if (isset($_POST["subject"])) {
                            echo $_POST["subject"];
                        }
                    ?>" placeholder="Enter subject" name="subject">
                </div>
                <div class="form-group">
                    <label for="emailaddress">Message:</label>
                    <input type="text" class="form-control" value="<?php 
                        if (isset($_POST["message"])) {
                            echo $_POST["message"];
                        }
                    ?>" placeholder="Enter message" name="message">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-default">Send</button>
                </div>   
            </form>
        </div>
    </div>
</div>      
</body>
</html>
</body>
</html>


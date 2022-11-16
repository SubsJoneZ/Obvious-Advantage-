<?php
    
$first-name = $_POST['first-name'];
$last-name = $_POST['last-name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:" .$name."<".$email.">\r\n";

$recipient = "developer@kodesubs.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/png" href="favicon_io/favicon-16x16.png">
    <link rel="stylesheet" href="mail.css">
    <title>Contact Form</title>
</head>
<body>

       <!-- Received -->
       <div class="container">
                <h1>Message sent! Thank you for filling out the form. I will get back to you as soon as possible! </h1>
            <p class="back">Go back to the <a href="index.html">homepage</a>.</p> 
       </div>         

</body>
</html>
';

?>

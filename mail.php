<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

// MDP & email

require 'Function/pass.php';

$nameErr = $emailErr = $genderErr = $message = "";

// sanitization
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email =filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);


}

// Declaration des variables
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST['name']);
    $gender = test_input($_POST['title']);
    $email =test_input($_POST['email']);
    $phone = test_input($_POST['phone']);
    $objet = test_input($_POST['objet']);
    $message = test_input($_POST['message']);
    $reply_type =test_input($_POST['reply']);  

}

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST['name'])) {
        $nameErr = "Veuillez Introduire votre Nom";
    }else {
        $name = test_input($_POST['name']);
    }

    if (empty($_POST['email'])) {
        $emailErr = "Veuillez Introdure un email valide";
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr = "Seulement lettres et espaces permis"; 
 }
}


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $username;                 // SMTP username
    $mail->Password = $password;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('mewthom@gmail.com', 'Website Senoah');
    $mail->addAddress('mewthom@gmail.com');
    $mail->addReplyTo('mewthom@gmail.com');
    $mail->addCC($email);     // Add a recipient



    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $objet;
    $mail->Body    = $gender .'<br>'.$email.'<br>'.$name.'<br>'.'<br>'.$phone.'<br>'.$message;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Votre message à été envoyé';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

header('Location: ' .$_SERVER['HTTP_REFERER']);
}

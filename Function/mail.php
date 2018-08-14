<?php 
 // CLASS PHPMailer
  use PHPMailer\PHPMailer\PHPMailer;
  require 'vendor/autoload.php';
  $mail = new PHPMailer;
  // Import Formulaire
  $file = DOMDocument::loadHTMLFile('/Partials/contact.php');
  $form = $file->getElementById('formContact');

  //FUCTION
  function breakText($name){
  	global $file;
  	$sauts = $name
  	$$sauts = $file ->createElement('br');
  	return ${$sauts};
  }
  // VERIFICATION DE MOT PASSE
  if (file_exists("Partials/passwordGmail")) {
  	include (".Partials/passwordGmail/php");
  }
  	else{
  		$placement = $file->getElementById("firstformelement");
  		$username = $file->createElement("label","votre adresse Gmail");
  		$username->setAttribute("form","username");
  		$usernameInput= $file->createElement("input");
  		$UFIA = ['type' => "email","id"=>"usermail","name"=>"usermail"];
  		foreach ($UFIA as $key => $value) {
  			$usernameInput->setAttribute($key,$value);
  		}
  		//Creation d'un password
  		$passwordForm = $file->createElement('label', 'Entrer votre mot de passe Gmail');
	    $passwordForm->setAttribute('for', 'gmailpassword');
	    $passwordFormInput = $file->createElement('input');
	    $PFIA = ['type' => 'password', 'id' => 'gmailpassword', 'name' => 'gmailpassword'];
	    foreach ($PFIA as $key => $value) {
	      $passwordFormInput->setAttribute($key, $value);
    }
		    function errorMsg($id, $message, $test){
		    global $file, $form;
		    $newnode = $test;
		    $element = $file->getElementById($id);
		    $$newnode = $file->createElement('p', $message);
		    $form->insertBefore(${$newnode}, $element);
  	}

  	//

?>
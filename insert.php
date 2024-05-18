<?php
  if(isset($_POST['envoyez']))
  {

    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));
 
    $headers = 'Content-type: text/plain; charset="utf-8"'." ";
    $envoi = "Envoi de Message Mail à REALITY TECH de la part de : ".$name;

  	if (mail($email, $envoi, $message, $headers)) {
  		# code...
  		echo "Message Mail Envoye avec Succes !";
  	} else {
  		echo "Desole ! Une erreur est survenue... Votre Message mail n'a pas ete envoye.";
  	}

  }
?>
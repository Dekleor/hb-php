<?php

include 'includes/header.php';

$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];
   
    if (empty($subect)) {
        $errors[] = 'Un sujet nous aiderait a mieux saisir votre problème';
    }
 
    if (empty($email)) {
        $errors[] = 'Entrez une adresse mail valide pour que nous puissions répondre';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Entrez une adresse mail valide pour que nous puissions répondre';
    }
 
    if (empty($message)) {
        $errors[] = 'Vous avez surement plus à nous dire';
    }
}

if (!empty($errors)) {
   $allErrors = join('<br/>', $errors);
   $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
}

echo '
'.$errorMessage.'

<form action="" method="post">  
    <div class="container">   
        <label>Sujet :</label>   
        <input type="text" placeholder="Entrez le sujet de votre message" name="subject">  
        <label>Votre adresse mail : </label>   
        <input type="email" placeholder="Entrez votre mot de passe" name="email">
        <label>Votre message :</label>
        <textarea placeholder="Ecrivez nous un petit message !" name="message" rows="4" cols="50"></textarea>
        <button type="submit">Envoyer</button>   
        </div>   
</form>';

include 'includes/footer.php';

?>
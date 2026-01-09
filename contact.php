<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "olaitanhounkpatin48@gmail.com"; // ton adresse de réception
    $subject = "Nouveau message du formulaire de contact";
    $body = "Nom: $nom\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès ✅";
    } else {
        echo "Erreur lors de l'envoi ❌";
    }
}
?>

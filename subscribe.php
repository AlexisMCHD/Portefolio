<?php 

    spl_autoload_register();

    // Load Composer's autoloader
    require 'vendor/autoload.php';

    //si le formulaire est soumis
    if (!empty($_POST)){
        $name = $_POST['name'];
        $email = $_POST['email'];

        $mailer = new Mailer();
        $mailer->sendNewsletterWelcome($name, $email);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription à la newsletter</title>
</head>
<body>
    <h1>Inscription à la newsletter</h1>

    <form method="post">
        <input name="name" type="text" placeholder="Votre nom">
        <input name="email" type="email" placeholder="Votre email">
        <button>M'inscrire !</button>
    </form>

</body>
</html>
<!-- include le head et le header... -->
<?php include("top.php"); 



    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require 'vendor/autoload.php';

    //si le formulaire est soumis
    if (!empty($_POST)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contenu = $_POST['content'];
        $title= $_POST['title'];

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP            
            $mail->Host       = 'smtp.sendgrid.net';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'apikey';                     // SMTP username
            $mail->Password   = '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';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to
            
            //à ne pas oublier pour éviter les problèmes d'accent ! 
            $mail->CharSet = 'UTF-8';

            //Recipients
            $mail->setFrom ('michaud.alexis2@gmail.com', 'Alexis Michaud');//écrit
            $mail->addAddress ($email, $name);//destinataire    // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $title;
            $mail->Body    = $contenu; 

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<form method="post" enctype="multipart/form-data">
    <h2>Me contacter !</h2>



    <div class="form-group"> 
        
        <input class="form-control" type="text" id="text" name="name" value="<?php if(!empty($_POST['name'])){
            echo $_POST['name'];
        } ?>" placeholder="votre Nom ">
    </div>

    <div class="form-group"> 
        <textarea class="form-control" type="title" placeholder="Votre titre" id="title" name="title" rows="1"><?php if(!empty($_POST['title'])){
            echo $_POST['title'];
        } ?></textarea>
    </div>

    <div class="form-group"> 
        <textarea class="form-control" type="email" placeholder="Votre adresse mail" id="mail" name="email" rows="1"><?php if(!empty($_POST['email'])){
            echo $_POST['email'];
        } ?></textarea>
    </div>

    <div class="form-group"> 
        <textarea class="form-control" type="text" placeholder="Votre message" id="content" name="content" rows="5"><?php if(!empty($_POST['content'])){
            echo $_POST['content'];
        } ?></textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Envoyé !</button>
    </div>
</form>


<!-- inclue le footer et les fermetures de balises -->
<?php include("bottom.php") ?>

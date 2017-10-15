<?php
if (isset($_POST['g_recaptcha_response']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['content'])) {
    $name = htmlentities(trim($_POST['name']));
    $email = htmlentities(strtolower(trim($_POST['email'])));
    $subject = htmlentities(trim($_POST['subject']));
    $content = htmlentities($_POST['content']);

    $response = $_POST['g_recaptcha_response'];


    if (!empty($name) && !empty($email) && !empty($subject) && !empty($content)) {
        $clen = strlen($content);
        if (preg_match('/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,10})$/', $email)){
             if (preg_match('/^[a-zA-Zα-ωA-Ω ]{2,50}$/', $name)) {
                 if ($clen > 10) {
                     if ($response == true) {
                         $to = 'developer@greekcoder.com';
                         $body = $content;
                         $headers = "From: $name <$email>";

                         if (mail($to, $subject, $body, $headers)) {
                             echo '<p class="form-success">Email successfully sent! Thanks for getting in touch with me...</p>';
                         } else {
                             echo '<p class="form-errors">There was an errors sending the email, try again later!</p>';
                         }
                     } else {
                         echo '<p class="form-errors">REcaptcha Failed! Try again!</p>';
                     }
                 } else {
                     echo '<p class="form-errors">The content is too small!</p>';
                 }
             } else {
                 echo '<p class="form-errors">Enter your real name!</p>';
             }
        } else {
            echo '<p class="form-errors">Enter your real email address!</p>';
        }
    } else {
        echo '<p class="form-errors">Please fill in all fields!</p>';
    }
} else {
    //nothing
}

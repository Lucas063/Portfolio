<?php
// configure
$from = 'Demo contact form <lucas.santo@protonmail.com>';
$sendTo = 'Demo contact form <lucas.santo@protonmail.com>';
$subject = 'New message from contact form';
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); // array variable name => Text to appear in the email
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// let's do the sending




try
{
    $emailText = "You have a new message from form\n=============================\n";
    
    foreach ($_POST as $key => $value) {
        if (isset($fields[$key]))
    }
}

$headers = array('Content-Type: text/plain; charset="UTF-8";',
                'From: ' . $from,
                'Reply-To: ' . $form,
                'Return-Path: ' . $form,
                );
mail($sendTo, $subject, $emailText, implode("\n", $headers));

$responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage)
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    echo $encoded;
}

else {
    echo $responseArray['message'];
}
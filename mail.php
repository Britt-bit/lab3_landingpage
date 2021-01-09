<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

    // COMPANY INFORMATION
    // adress where the mail will be sent from
    $sender_company = "contact@dontbequiet.be";

    // CLIENT INFORMATION
    $receiver_client = $_GET["email"];
    $client_name = $_GET["name"];
    $client_message = $_GET["message"];

    // MAIL INFORMATION
    $mail_subject_client = "Don't be quiet message";
    $mail_subject_company = "Message ".$client_name;
    $mail_header = "From:" . $sender_company;
    $mail_client_message = 
    'Beste '.$client_name
    ."\r\n\r\n"
    .'Bedankt voor uw interesse, hieronder vind u uw verzonden bericht terug:'
    ."\r\n"
    .$client_message
    ."\r\n\r\n"
    ."Wij nemen zo snel mogelijk contact met uw op."
    ."\r\n\r\n"
    ."Met vriendelijke groeten,"
    ."\r\n"
    ."Don't be quiet"
    ."\r\n";
    $mail_company_message = "Er is een nieuw bericht van ".$client_name.' ('.$receiver_client.')'."\r\n\r\n".$mail_client_message;

    // FUNCTION TO SEND MAILS
    function  mailTo($receiverClient, $mailSubjectClient, $mailClientMessage, $mailHeader){
        mail($receiverClient, $mailSubjectClient, $mailClientMessage, $mailHeader);   
    }

    
    mailTo($receiver_client, $mail_subject_client, $mail_client_message, $mail_header);
    mailTo($sender_company, $mail_subject_company, $mail_company_message, $mail_header);
    header('Location: ../contact.html');
 
    
    // SENDING MAILS
    // Check if contact information is given
    if(!empty($client_name) || !empty($client_message) || !empty($receiver_client)){
        mailTo($receiver_client, $mail_subject_client, $mail_client_message, $mail_header);
        mailTo($sender_company, $mail_subject_company, $mail_company_message, $mail_header);
        header('Location: ../contact.html');
    }else{
        $message = "Something went wrong.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>
<?php
/*
* jeito com funções php

function send($data){
    $to = 'vnilsanches@gmail.com';
    $subject = $data->subject;
    $message = $data->message;
    $headers = "From: {data->email}"."\r\n" .
    'Reply-To: vnilsanches@gmail.com' . "\r\n" .
    'X-Mailer: PHP/'.phpversion();
    return mail($to,$subject,$message,$headers);
}

*/


function send(Array $data){
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain'; //ssl
    $email->isSMTP();
    $email->Host = 'smtp.mailtrap.io';
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = 'acd9a9491a47cf';
    $email->Password = '4dd395a5328eea';
    $email->isHTML(true);
    $email->setFrom('vnilsanches@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
    $email->MsgHTML($data['mensagem']);
    return $email->send();
}

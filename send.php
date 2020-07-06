<?php

    $name = $_POST['name'];
    $email =  $_POST['email'];
    $message = 'Nadawca: '. $name .' -- '. $_POST['content'];

    $subject = 'Formularz kontaktowy';

    $headers = '';


    if(mail($email, $subject, $message, $headers)){
        header('Location: success.html');
        exit;
    }else{
        header('Location: error.html');
        exit;
    }

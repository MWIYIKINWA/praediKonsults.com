<?php

require_once '../classes/database.php';

if (isset($_POST['subscribe'])) {

    $emails = $_POST['email'];
    
    if (empty($emails)) 
    {
        header("Location:../../index.php?subscribe=empty-fields");
        exit();
    }
    else
    {
        if (!filter_var($emails, FILTER_VALIDATE_EMAIL)) {
            header("Location:../../index.php?subscribe=wrong-mail");
            exit();
        }
        else
        {
            $email->create_subscription($emails);
             header("Location:../../index.php?subscribe=success");
             exit();
        }
        
    }
   
}


?>
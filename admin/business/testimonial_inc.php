<?php

include('../../include/classes/database.php');

if (isset($_POST['testimonial'])) {
    
    $name = htmlspecialchars( $_POST['name']);
    $message = htmlspecialchars( $_POST['message']) ;
    $company = htmlspecialchars( $_POST['company']);
    $contact = htmlspecialchars( $_POST['contact']) ;
    $email = htmlspecialchars( $_POST['email']);

    $original =  $_FILES["picture"]["tmp_name"];
    $file_types = ["gif", "png", "jpg", "jpeg", "mp4"];
    $file_extension = pathinfo($_FILES["picture"]['name'], PATHINFO_EXTENSION);
    $dir = 'uploads/';
    $destination = $dir . basename($_FILES["picture"]["name"]);

    if (! in_array($file_extension, $file_types)) {
        header("Location:../testimonial.php?testimonial=invalid-file");
        exit();
    }
    elseif($_FILES["picture"]["size"] > 3000000) {
        header("Location:../testimonial.php?testimonial=large-file");
        exit();
    }
    else{ 
       move_uploaded_file($original, $destination);
    } 

    if (empty($name) || empty($message) || empty($company) || empty($contact) || empty($email)) {
        header("Location:../testimonial.php?testimonial=empty");
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
         {
            header("Location:../testimonial.php?testimonial=wrong-email");
            exit();
         }
     else{
            if($testimonial->create($name, $company, $message, $contact, $destination, $email))
            {
            header("Location:../testimonial.php?testimonial=posted");
            exit();
            }
            else
            {
            header("Location:../testimonial.php?testimonial=failed");
            exit();
            }
    
         }
        }


        
//deleting


if (isset($_GET['delete_id'])) {
    
    $id = $_GET['delete_id'];
    
    if ($testimonial->delete($id)) {
        header("Location:../testimonial.php?testimonial=deleted");
        exit();
    }
    else{
        header("Location:../testimonial.php?testimonial=failed");
        exit(); 
    }
}


//updating


if (isset($_POST['update-testimonial'])) {
    
    $id = htmlspecialchars( $_POST['id']);
    $name = htmlspecialchars( $_POST['name']);
    $message = htmlspecialchars( $_POST['message']) ;
    $company = htmlspecialchars( $_POST['company']);
    $contact = htmlspecialchars( $_POST['contact']) ;
    $email = htmlspecialchars( $_POST['email']);

    $original =  $_FILES["picture"]["tmp_name"];
    $file_types = ["gif", "png", "jpg", "jpeg", "mp4"];
    $file_extension = pathinfo($_FILES["picture"]['name'], PATHINFO_EXTENSION);
    $dir = 'uploads/';
    $destination = $dir . basename($_FILES["picture"]["name"]);

    if (! in_array($file_extension, $file_types)) {
        header("Location:../testimonial.php?testimonial=invalid-file");
        exit();
    }
    elseif($_FILES["picture"]["size"] > 3000000) {
        header("Location:../testimonial.php?testimonial=large-file");
        exit();
    }
    else{ 
       move_uploaded_file($original, $destination);
    } 

    if (empty($name) || empty($message) || empty($company) || empty($contact) || empty($email)) {
        header("Location:../testimonial.php?testimonial=empty");
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
         {
            header("Location:../testimonial.php?testimonial=wrong-email");
            exit();
         }
     else{
            if($testimonial->update($id, $name, $company, $message, $contact, $destination, $email))
            {
            header("Location:../testimonial.php?testimonial=updated");
            exit();
            }
            else
            {
            header("Location:../testimonial.php?testimonial=failed");
            exit();
            }
    
         }
        }
  



?>
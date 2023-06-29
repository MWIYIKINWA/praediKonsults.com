<?php

include('../../include/classes/database.php');

if (isset($_POST['team'])) {
    
    $name = htmlspecialchars( $_POST['name']);
    $title = htmlspecialchars( $_POST['title']) ;
    $email = htmlspecialchars( $_POST['email']);

    $original =  $_FILES["picture"]["tmp_name"];
    $file_types = ["gif", "png", "jpg", "jpeg", "mp4"];
    $file_extension = pathinfo($_FILES["picture"]['name'], PATHINFO_EXTENSION);
    $dir = 'uploads/';
    $destination = $dir . basename($_FILES["picture"]["name"]);

    if (! in_array($file_extension, $file_types)) {
        header("Location:../team.php?team=invalid-file");
        exit();
    }
    elseif($_FILES["picture"]["size"] > 3000000) {
        header("Location:../team.php?team=large-file");
        exit();
    }
    else{ 
       move_uploaded_file($original, $destination);
    } 

    if (empty($name) || empty($title) || empty($email)) {
        header("Location:../team.php?team=empty");
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
         {
            header("Location:../team.php?team=wrong-email");
            exit();
         }
     else{
            if($team->create($name, $title, $email,$destination))
            {
            header("Location:../team.php?team=posted");
            exit();
            }
            else
            {
            header("Location:../team.php?team=failed");
            exit();
            }
    
         }
        }


        
//deleting


if (isset($_GET['delete_id'])) {
    
    $id = $_GET['delete_id'];
    
    if ($team->delete($id)) {
        header("Location:../team.php?team=deleted");
        exit();
    }
    else{
        header("Location:../team.php?team=failed");
        exit(); 
    }
}


//updating


if (isset($_POST['update-team'])) {
    
    $id = htmlspecialchars( $_POST['id']);
    $name = htmlspecialchars( $_POST['name']);
    $title = htmlspecialchars( $_POST['title']) ;
    $email = htmlspecialchars( $_POST['email']);

    $original =  $_FILES["picture"]["tmp_name"];
    $file_types = ["gif", "png", "jpg", "jpeg", "mp4"];
    $file_extension = pathinfo($_FILES["picture"]['name'], PATHINFO_EXTENSION);
    $dir = 'uploads/';
    $destination = $dir . basename($_FILES["picture"]["name"]);

    if (! in_array($file_extension, $file_types)) {
        header("Location:../team.php?team=invalid-file");
        exit();
    }
    elseif($_FILES["picture"]["size"] > 3000000) {
        header("Location:../team.php?team=large-file");
        exit();
    }
    else{ 
       move_uploaded_file($original, $destination);
    } 

    if (empty($name) || empty($title) || empty($email)) {
        header("Location:../team.php?team=empty");
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
         {
            header("Location:../team.php?team=wrong-email");
            exit();
         }
     else{
            if($team->update($id, $name, $title, $email,$destination))
            {
            header("Location:../team.php?team=updated");
            exit();
            }
            else
            {
            header("Location:../team.php?team=failed");
            exit();
            }
    
         }
        }
  



?>
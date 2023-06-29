<?php

include('../../include/classes/database.php');

if (isset($_POST['service'])) {
    
    $title = htmlspecialchars( $_POST['title']);
    $description = htmlspecialchars( $_POST['description']) ;
    $file_types = ["picture/gif", "picture/png", "picture/jpg", "picture/jpeg", "picture/mp4"];

   
    if($_FILES["picture"]["size"] > 3000000) {
        header("Location:../service.php?soon=large-file");
        exit();
    }
    
    $original =  $_FILES["picture"]["tmp_name"];
    $dir = 'uploads/';
    $destination = $dir . basename($_FILES["picture"]["name"]);
    move_uploaded_file($original, $destination);
   

    if (empty($title) || empty($description)) {
        header("Location:../service.php?service=empty");
        exit();
    }
    else{
       if($service->create($title, $description, $destination))
       {
        header("Location:../service.php?soon=posted");
        exit();
       }
       else
       {
        header("Location:../service.php?soon=failed");
        exit();
       }
    }
}

//deteting


if (isset($_GET['delete_id'])) {
    
    $id = $_GET['delete_id'];
    
    if ($service->delete($id)) {
        header("Location:../service.php?service=deleted");
        exit();
    }
    else{
        header("Location:../service.php?service=failed");
        exit(); 
    }
}

//editing

if (isset($_POST['update-service'])) {
    
    $id = htmlspecialchars( $_POST['id']);
    $title = htmlspecialchars( $_POST['title']);
    $description = htmlspecialchars( $_POST['description']) ;
    // $file_types = ["gif", "png", "jpg", "picture/jpeg", "picture/mp4"];

    // if (!in_array($_FILES["picture"]["type"], $file_types)) {
    //     header("Location:../service.php?soon=invalid-file");
    //     exit();
    // }
    if($_FILES["picture"]["size"] > 4056150) {
        header("Location:../service.php?soon=large-file");
        exit();
    }
    
    $original =  $_FILES["picture"]["tmp_name"];
    $dir = 'uploads/';
    $destination = $dir . basename($_FILES["picture"]["name"]);
    move_uploaded_file($original, $destination);
   

    if (empty($title) || empty($description)) {
        header("Location:../service.php?service=empty");
        exit();
    }
    else{
       if($service->update($id, $title, $description, $destination))
       {
        header("Location:../service.php?soon=updated");
        exit();
       }
       else
       {
        header("Location:../service.php?soon=failed");
        exit();
       }
    }
  
}


?>
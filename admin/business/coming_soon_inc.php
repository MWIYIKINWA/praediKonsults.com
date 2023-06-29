<?php

include('../../include/classes/database.php');

if (isset($_POST['soon'])) {
    
    $title = htmlspecialchars( $_POST['title']);
    $details = htmlspecialchars( $_POST['details']) ;
    $date = htmlspecialchars( $_POST['date']) ;
    $time = htmlspecialchars( $_POST['time']) ;

    $original =  $_FILES["poster"]["tmp_name"];
    $dir = 'uploads/';
    $destination = $dir . basename($_FILES["poster"]["name"]);
    move_uploaded_file($original, $destination);


    if (empty($title) || empty($details) || empty($date) || empty($time)) {
        header("Location:../coming_soon.php?soon=empty");
        exit();
    }
    else{
       if($coming_soon->create($title, $details, $date, $time, $destination))
       {
        header("Location:../coming_soon.php?soon=posted");
        exit();
       }
       else
       {
        header("Location:../coming_soon.php?soon=failed");
        exit();
       }
    }
}

//deteting


if (isset($_GET['delete_id'])) {
    
    $id = $_GET['delete_id'];
    
    if ($coming_soon->delete($id)) {
        header("Location:../coming_soon.php?soon=deleted");
        exit();
    }
    else{
        header("Location:../coming_soon.php?soon=failed");
        exit(); 
    }
}

//editing

if (isset($_POST['update-soon'])) {
    
    $id = htmlspecialchars( $_POST['id']);
    $title = htmlspecialchars( $_POST['title']);
    $details = htmlspecialchars( $_POST['details']) ;
    $date = htmlspecialchars( $_POST['date']) ;
    $time = htmlspecialchars( $_POST['time']) ;

    $original =  $_FILES["poster"]["tmp_name"];
    $dir = 'uploads/';
    $destination = $dir . basename($_FILES["poster"]["name"]);
    move_uploaded_file($original, $destination);


       if($coming_soon->update($id, $title, $details, $date, $time, $destination))
       {
        header("Location:../coming_soon.php?soon=updated");
        exit();
       }
       else
       {
        header("Location:../coming_soon.php?soon=failed");
        exit();
       }
    
  
}


?>
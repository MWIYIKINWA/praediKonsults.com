<?php

include('../../include/classes/database.php');

if (isset($_POST['blog'])) {
    
    $title = $_POST['title'];
    $body =  $_POST['body'] ;
    $author = $_POST['author'];
    $youtube = $_POST['youtube'];

    $original =  $_FILES["picture"]["tmp_name"];
    $file_types = ["gif", "png", "jpg", "jpeg", "mp4"];
    $file_extension = pathinfo($_FILES["picture"]['name'], PATHINFO_EXTENSION);
    $dir = 'uploads/';
    $destination = $dir . basename($_FILES["picture"]["name"]);

    if (! in_array($file_extension, $file_types))  {
        header("Location:../blog.php?blog=invalid-file");
        exit();
    }
    elseif($_FILES["picture"]["size"] > 3000000) {
        header("Location:../blog.php?blog=large-file");
        exit();
    }
    else{ 
       move_uploaded_file($original, $destination);
    } 

    if (empty($title) || empty($body) || empty($author)) {
         header("Location:../blog.php?blog=empty");
        exit();
    }
     else{
        if ($blog->create($title, $body, $destination, $author, $youtube)) {
            header("Location:../blog.php?blog=posted");
            exit();
        }
        else{
            header("Location:../blog.php?blog=failed");
            exit();
        }
            
            
           
    
         }
        }


        
//deleting


if (isset($_GET['delete_id'])) {
    
    $id = $_GET['delete_id'];
    
    if ($blog->delete($id)) {
        header("Location:../blog.php?blog=deleted");
        exit();
    }
    else{
        header("Location:../blog.php?blog=failed");
        exit(); 
    }
}


//updating


if (isset($_POST['update-blog'])) {
    
    $id = $_POST['id'];
    $title = $_POST['title'];
    $body =  $_POST['body'] ;
    $author = $_POST['author'];
    $youtube = $_POST['youtube'];

    $original =  $_FILES["picture"]["tmp_name"];
    $file_types = ["gif", "png", "jpg", "jpeg", "mp4"];
    $file_extension = pathinfo($_FILES["picture"]['name'], PATHINFO_EXTENSION);
    $dir = 'uploads/';
    $destination = $dir . basename($_FILES["picture"]["name"]);

    if (! in_array($file_extension, $file_types)) {
        header("Location:../blog.php?blog=invalid-file");
        exit();
    }
    elseif($_FILES["picture"]["size"] > 3000000) {
        header("Location:../blog.php?blog=large-file");
        exit();
    }
    else{ 
       move_uploaded_file($original, $destination);
    } 

    if (empty($title) || empty($body) || empty($email)) {
        header("Location:../blog.php?blog=empty");
        exit();
    }
    else{
            if($blog->update($id, $title, $body, $destination, $author, $youtube))
            {
            header("Location:../blog.php?blog=updated");
            exit();
            }
            else
            {
            header("Location:../blog.php?blog=failed");
            exit();
            }
    
        }
}
  



?>
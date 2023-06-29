<?php 
   session_start();
   include('../../include/classes/database.php');

   if (isset($_POST['login_in'])) {
      
      $pwd = htmlspecialchars( $_POST['pwd']) ;
      $email = htmlspecialchars( $_POST['email']) ;

      $res = $user->check_user($email, $pwd);
     
   if (empty($pwd) || empty($email)) {
      header("Location:../login.php?login=empty");
      exit();
     }
     else{

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         header("Location:../login.php?login=wrong-email");
         exit();
        }else{

            if (!$res) {
               header("Location:../login.php?login=wrong-credentials");
               exit();
            }else{
               
               if ($res) {
                  $_SESSION['name'] = $res->name;
                  $_SESSION['id'] = $res->id;
                  $_SESSION['email'] = $res->email;
                  $_SESSION['phone'] = $res->phone;
                  $_SESSION['picture'] = $res->picture;
                  header("Location: ../index.php?index=success");
                  
               }
               
               
            }

        }
 
     }

}



if (isset($_POST['change_pic'])) {
   
   $id = $_POST['id'];

  $original =  $_FILES["picture"]["tmp_name"];
    $file_types = ["gif", "png", "jpg", "jpeg", "JPG"];
    $file_extension = pathinfo($_FILES["picture"]['name'], PATHINFO_EXTENSION);
    $dir = 'uploads/';
    $destination = $dir . basename($_FILES["picture"]["name"]);

    if (! in_array($file_extension, $file_types))  {
        header("Location:../profile.php?profile=invalid-file");
        exit();
    }
    elseif($_FILES["picture"]["size"] > 3000000) {
        header("Location:../profile.php?profile=large-file");
        exit();
    }
    else{ 
       move_uploaded_file($original, $destination);
    } 

    if ($user->update_picture($id, $destination)) {
      header("Location:../profile.php?profile=updated");
        exit('updated');
    }
    else{
      header("Location:../profile.php?profile=failed");
      exit();
    }

}

?> 
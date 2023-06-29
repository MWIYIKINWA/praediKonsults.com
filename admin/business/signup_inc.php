<?php 

include('../../include/classes/database.php');

   if (isset($_POST['sign_in'])) {
      
     $name = htmlspecialchars( $_POST['name']);
     $pwd = htmlspecialchars( $_POST['pwd']) ;
     $email = htmlspecialchars( $_POST['email']) ;
     $phone = htmlspecialchars( $_POST['phone']) ;

     if (empty($name) || empty($pwd) || empty($email) || empty($phone)) {
      header("Location:../signup.php?signup=empty");
      exit();
     }
     else{
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         header("Location:../signup.php?signup=wrong-email");
         exit();
        }
        else{
          if (preg_match("/^[0-9]*$/", $name)) {
            header("Location:../signup.php?signup=wrong-char");
            exit();
           }
           else{
            if (!preg_match("/^[0-9]*$/", $phone)){
               header("Location:../signup.php?signup=wrong-phone");
               exit();
              }
              else{
                $user->register($name, $pwd, $email, $phone);
                header("Location:../signup.php?signup=success");
               exit();
              }
           }
        }
     }

}



?>   
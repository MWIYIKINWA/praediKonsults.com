
 <?php


include('../PHPMailer/PHPMailerAutoLoad.php');

 if (isset($_POST['contact'])) {

    $name = stripslashes($_POST['name']) ;
    $email = stripslashes($_POST['email']) ;
    $user_subject = stripslashes($_POST['subject']) ;
    $message = stripslashes($_POST['message']) ;
    $subject = 'Contact:'.'  '.$user_subject;
    $mail = new PHPMailer();
    

    if (empty($name) || empty($email) || empty($subject) || empty($message))
    {
        header("Location:../../contact.php?contact=empty-fields");
        exit();
    }
    else
    {
        $mail->isSMTP(); 
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl' ; 
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465; 
        $mail->isHTML(true); 
        $mail->isSMTP(); 
        $mail->Username = 'isaacmwiyikinwa08@gmail.com'; 
        $mail->Password = 'pxueyqzyyxnoynxy'; 
        $mail->setFrom('isaacmwiyikinwa08@gmail.com'); 

        $mail->Body = '<h2>From PraediiKonsults Website: <br> '.$name.'<br></h2>' .$message; 
        $mail->Subject = $subject; 
        $mail->addAddress($email); 
      
        if ($mail->send()) {
            header("Location:../../contact.php?contact=contact-success");
            exit();
        }
        else
        {
            header("Location:../../contact.php?contact=contact-failure");
            exit();
        }
        
        
    }

    

 }

 ?>
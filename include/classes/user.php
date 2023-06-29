<?php

class user{

    private $database;

    function __construct($conn){
        $this->database = $conn;
    }


    public function register($name, $pwd, $email, $phone){

         try {
            
           $sql = "INSERT INTO `users`(`name`, `email`, `password`, `phone` ) VALUES (:name, :email, :password, :phone)";   
           $stmt = $this->database->prepare($sql);

           $stmt->bindparam(':name',$name);
           $stmt->bindparam(':email',$email);
           $stmt->bindparam(':password',$pwd);
           $stmt->bindparam(':phone',$phone);

           $stmt->execute();
           return true;

         } catch (PDOException $th) {
            echo $th->getMessage();
            return false;
         }

    }


    

    public function check_user($email, $pwd){
        try {
           
          $sql = "select * from users where email = :email AND password = :password";
          $stmt = $this->database->prepare($sql);
          
          $stmt->bindparam(':email',$email);
          $stmt->bindparam(':password',$pwd);
          $stmt->execute();
          $result = $stmt->fetch(PDO::FETCH_OBJ);
 
          return $result;

        } catch (PDOException $th) {
           echo $th->getMessage();
           return false;
        }

    }


      //count all
       
      public function count(){
        try {
            
            $sql = "select COUNT(*) from users";   
            $stmt = $this->database->query($sql);
            $num = $stmt->fetchColumn();

            return $num;

        } 
        catch (PDOException $th) {
            echo $th->getMessage();
        }
    }


    //update photo

    public function update_picture($id, $picture){
            
      try {
            
        $sql = "UPDATE `users` SET `picture` = :picture WHERE id = :id";   
        $stmt = $this->database->prepare($sql);

        $stmt->bindparam(':id',$id);
        $stmt->bindparam(':picture',$picture);
    

        $stmt->execute();
        return true;

      } catch (PDOException $th) {
         echo $th->getMessage();
         return false;
      }

    }

}


?>
<?php

class email
{

    private $database;
    
    function __construct($db_connection){
         $this->database = $db_connection;
    }

    //create

    public function create_subscription($email){
        try {
            
            $sql = "INSERT INTO emails (email) VALUES (:email)";   
            $stmt = $this->database->prepare($sql);

            $stmt->bindparam(':email',$email);

            $stmt->execute();
            return true;

        } 
        catch (PDOException $th) {
            echo $th->getMessage();
            return false;
        }
    }



    //read all
       
    public function read_subscription(){
        try {
            
            $sql = "select * from emails";   
            $result = $this->database->query($sql);

            return $result;

        } 
        catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    
    //count all
       
    public function count(){
        try {
            
            $sql = "select COUNT(*) from emails";   
            $stmt = $this->database->query($sql);
            $num = $stmt->fetchColumn();

            return $num;

        } 
        catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    //read specific row

    public function get_email($id){
        try {
           
          $sql = "select * from emails where id = :id";
          $stmt = $this->database->prepare($sql);
          
          $stmt->bindparam(':id',$id);
          $stmt->execute();
          $result = $stmt->fetch();
 
          return $result;

        } catch (PDOException $th) {
           echo $th->getMessage();
           return false;
        }

    }

   //update
      
    public function update($id, $email){
        try {
            
            $sql = "UPDATE `emails` SET `email`= :email WHERE id = :id";   
            $stmt = $this->database->prepare($sql);

            $stmt->bindparam(':email',$email);

            $stmt->execute();
            return true;

        } 
        catch (PDOException $th) {
            echo $th->getMessage();
            return false;
        }
    }
    //delete

    public function delete($id){
        try {
            
            $sql = "DELETE FROM `emails` WHERE id = :id";   
            $stmt = $this->database->prepare($sql);

            $stmt->bindparam(':id',$id);

            $stmt->execute();
            return true;

        } 
        catch (PDOException $th) {
            echo $th->getMessage();
            return false;
        }
    }

    


}




?>
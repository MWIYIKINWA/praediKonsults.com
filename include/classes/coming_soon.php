<?php

class coming_soon
{

    private $database;
    
    function __construct($db_connection){
         $this->database = $db_connection;
    }

    //create

    public function create($title, $details, $date, $time, $poster){
        try {
            
            $sql = "INSERT INTO coming_soon (title, details, date, time, poster) VALUES (:title, :details, :date, :time, :poster)";   
            $stmt = $this->database->prepare($sql);

            $stmt->bindparam(':title',$title);
            $stmt->bindparam(':details',$details);
            $stmt->bindparam(':date',$date);
            $stmt->bindparam(':time',$time);
            $stmt->bindparam(':poster',$poster);

            $stmt->execute();
            return true;

        } 
        catch (PDOException $th) {
            echo $th->getMessage();
            return false;
        }
    }



    //read all
       
    public function read(){
        try {
            
            $sql = "select * from coming_soon";   
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
            
            $sql = "select COUNT(*) from coming_soon";   
            $stmt = $this->database->query($sql);
            $num = $stmt->fetchColumn();

            return $num;

        } 
        catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    //read specific row

    public function get_by_id($id){
        try {
           
          $sql = "select * from coming_soon where id = :id";
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
      
    public function update($id, $title, $details, $date, $time, $poster){
        try {
            
            $sql = "UPDATE coming_soon SET `title` = :title, `details` = :details, `date` = :date, `time` = :time, `poster` = :poster WHERE id = :id";   
            $stmt = $this->database->prepare($sql);

            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':title',$title);
            $stmt->bindparam(':details',$details);
            $stmt->bindparam(':date',$date);
            $stmt->bindparam(':time',$time);
            $stmt->bindparam(':poster',$poster);

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
            
            $sql = "DELETE FROM coming_soon WHERE id = :id";   
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
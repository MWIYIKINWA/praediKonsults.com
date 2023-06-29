<?php

class team
{

    private $database;
    
    function __construct($db_connection){
         $this->database = $db_connection;
    }

    //create

    public function create($name, $title, $email, $picture){
        try {
            
            $sql = "INSERT INTO team (name,	title,	picture, email) VALUES 
            (:name,	:title,	:picture, :email)";   
            $stmt = $this->database->prepare($sql);

            $stmt->bindparam(':name',$name);
            $stmt->bindparam(':title',$title);
            $stmt->bindparam(':picture',$picture);
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
       
    public function read(){
        try {
            
            $sql = "select * from team";   
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
            
            $sql = "select COUNT(*) from team";   
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
           
          $sql = "select * from team where id = :id";
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
      
    public function update($id, $name, $title, $email, $picture){
        try {
            
            $sql = "UPDATE team SET `name`= :name,`title`= :title,`picture`=:picture,`email`=:email 
            WHERE id = :id";   
            $stmt = $this->database->prepare($sql);

            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':name',$name);
            $stmt->bindparam(':title',$title);
            $stmt->bindparam(':picture',$picture);
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
            
            $sql = "DELETE FROM team WHERE id = :id";   
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
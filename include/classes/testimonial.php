
<?php

class testimonial
{

    private $database;
    
    function __construct($db_connection){
         $this->database = $db_connection;
    }

    //create

    public function create($name, $company, $message, $contact, $picture, $email){
        try {
            
            $sql = "INSERT INTO testimonial (name,	company, message, contact, picture,	email) 
            VALUES  (:name,	:company, :message, :contact, :picture, :email)";   
            $stmt = $this->database->prepare($sql);

            $stmt->bindparam(':name',$name);
            $stmt->bindparam(':company',$company);
            $stmt->bindparam(':message',$message);
            $stmt->bindparam(':contact',$contact);
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
            
            $sql = "select * from testimonial";   
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
            
            $sql = "select COUNT(*) from testimonial";   
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
           
          $sql = "select * from testimonial where id = :id";
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
      
    public function update($id, $name, $company, $message, $contact, $picture, $email){
        try {
            
            $sql = "UPDATE testimonial SET `name`= :name,`message`= :message, `company`= :company, `contact`= :contact, `picture`= :picture,`email`= :email  
            WHERE id = :id";   
            $stmt = $this->database->prepare($sql);

            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':name',$name);
            $stmt->bindparam(':company',$company);
            $stmt->bindparam(':message',$message);
            $stmt->bindparam(':contact',$contact);
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
            
            $sql = "DELETE FROM testimonial WHERE id = :id";   
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
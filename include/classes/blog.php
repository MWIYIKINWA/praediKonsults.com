
<?php

class blog
{

    private $database;
    
    function __construct($db_connection){
         $this->database = $db_connection;
    }

    //create

    public function create($title,	$body, $picture,  $author, $youtube){
        try {
            
            $sql = "INSERT INTO blog (title, body, picture, author, youtube) VALUES 
            (:title, :body, :picture, :author, :youtube)";   
            $stmt = $this->database->prepare($sql);

            $stmt->bindparam(':title',$title);
            $stmt->bindparam(':body',$body);
            $stmt->bindparam(':picture',$picture);
            $stmt->bindparam(':author',$author);
            $stmt->bindparam(':youtube',$youtube);

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
            
            $sql = "select * from blog";   
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
            
            $sql = "select COUNT(*) from blog";   
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
           
          $sql = "select * from blog where id = :id";
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
      
    public function update($id, $title,	$body ,$picture,  $author, $youtube){
        try {
            
            $sql = "UPDATE blog SET `title`= :title,`body`= :body, `picture`= :picture, `author`=:author, `youtube`=:youtube WHERE id = :id";   
            $stmt = $this->database->prepare($sql);

            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':title',$title);
            $stmt->bindparam(':body',$body);
            $stmt->bindparam(':picture',$picture);
            $stmt->bindparam(':author',$author);
            $stmt->bindparam(':youtube',$youtube);

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
            
            $sql = "DELETE FROM blog WHERE id = :id";   
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
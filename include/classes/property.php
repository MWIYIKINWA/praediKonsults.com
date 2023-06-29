
<?php

class property
{

    private $database;
    
    function __construct($db_connection){
         $this->database = $db_connection;
    }

    //create

    public function create($name, $description, $self_contained, $air_conditioning, $car_parking, $alarm_system, 
    $door_man, $balcon, $garage, $fire_place, $heating_system, $garden, $high_ceiling, $laundry_room,
    $swimming_pool, $category, $living_room, $bed_room, $bath_room, $kitchen, $pool, $toilet, 
    $area, $cost, $address, $map_link, $p_id, $road_access, $type, $for){
        try{
            
            $sql = "INSERT INTO property 
            (`name`,`description`, `address`, cost, category, location_link,surface_area, 
            self_contained, air_conditioning, car_parking, alarm_system, door_man, 
             balcon, garage, fire_place, heating_system, garden, high_ceiling, laundry_room, 
             swimming_pool, p_id, road_access, `type`, `for`) VALUES 
            (:n_ame,	:d_escription, :a_ddress, :cost, :category, :location_link, :surface_area, 
            :self_contained, :air_conditioning, :car_parking, :alarm_system, :door_man, 
            :balcon, :garage,:fire_place, :heating_system, :garden, :high_ceiling, :laundry_room,
              :swimming_pool, :p_id, :road_access, :t_ype, :for)";   

            $stmt = $this->database->prepare($sql);

            $sql2 = "INSERT INTO property_features (bathrooms,	bedrooms,	livingrooms,	pools,	kitchens,	toilets) VALUES 
            (:bathrooms, :bedrooms,	:livingrooms, :pools, :kitchens, :toilets)";  

            $stmt2 = $this->database->prepare($sql2);

            $stmt->bindparam(':n_ame',$name);
            $stmt->bindparam(':d_escription',$description);
            $stmt->bindparam(':a_ddress',$address);
            $stmt->bindparam(':road_access',$road_access);
            $stmt->bindparam(':t_ype',$type);
            $stmt->bindparam(':for',$for);
            $stmt->bindparam(':cost',$cost);
            $stmt->bindparam(':category',$category);
            $stmt->bindparam(':location_link',$map_link);
            $stmt->bindparam(':surface_area',$area);

            $stmt->bindparam(':self_contained',$self_contained);
            $stmt->bindparam(':air_conditioning',$air_conditioning);
            $stmt->bindparam(':car_parking',$car_parking);
            $stmt->bindparam(':alarm_system',$alarm_system);
            $stmt->bindparam(':door_man',$door_man);
            $stmt->bindparam(':balcon',$balcon);
            $stmt->bindparam(':garage',$garage);
            $stmt->bindparam(':fire_place',$fire_place);
            $stmt->bindparam(':heating_system',$heating_system);
            $stmt->bindparam(':garden',$garden);
            $stmt->bindparam(':high_ceiling',$high_ceiling);
            $stmt->bindparam(':laundry_room',$laundry_room);
            $stmt->bindparam(':swimming_pool',$swimming_pool);
            $stmt->bindparam(':p_id',$p_id);
            
            $stmt2->bindparam(':bathrooms',$bath_room);
            $stmt2->bindparam(':bedrooms',$bed_room);
            $stmt2->bindparam(':livingrooms',$living_room);
            $stmt2->bindparam(':pools',$pool);
            $stmt2->bindparam(':kitchens',$kitchen);
            $stmt2->bindparam(':toilets',$toilet);

            $stmt->execute();
            $stmt2->execute();
            return true;

        } 
        catch (PDOException $th) {
            echo $th->getMessage();
            return false;
        }
    }

    public function add_pictures($pic, $p_id){
        try {
            
            $sql = "INSERT INTO property_pics (pic, p_id) VALUES (:pic, :p_id)";   
            $stmt= $this->database->prepare($sql);

            $stmt->bindparam(':pic',$pic);
            $stmt->bindparam(':p_id',$p_id);
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
            
            $sql = "SELECT * FROM property p INNER JOIN property_features pf 
                    ON p.id = pf.p_id";  
                     
            $result = $this->database->query($sql);

            return $result;

        } 
        catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

      //read all
       
      public function read_pics($p_id){
        try {
            
            $sql = "SELECT * FROM property_pics WHERE p_id = :p_id";  
            $stmt = $this->database->prepare($sql); 
            $stmt->bindparam(':p_id',$p_id);
            $stmt->execute();
            $result = $stmt->fetch();
            
            return $result;

        } 
        catch (PDOException $th) {
            echo $th->getMessage();
        }
    }


    
    //count all
       
    public function count(){
        try {
            
            $sql = "select COUNT(*) from property";   
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
           
          $sql = "select * from property where id = :id";
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
      
    public function update($id, $name, $description	,$picture ,$address ,$owner ,$surface_area, $cost){
        try {
            
            $sql = "UPDATE property SET name= :name,description= :description, picture= picture, address=:address owner=:owner,surface_area=:surface_area,cost=:cost 
            WHERE id = :id";   
            $stmt = $this->database->prepare($sql);

            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':name',$name);
            $stmt->bindparam(':description',$description);
            $stmt->bindparam(':picture',$picture);
            $stmt->bindparam(':address',$address);
            $stmt->bindparam(':owner',$owner);
            $stmt->bindparam(':surface_area',$surface_area);
            $stmt->bindparam(':cost',$cost);
           

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
            
            $sql = "DELETE FROM property WHERE id = :id";   
            $stmt = $this->database->prepare($sql);
            $sql2 = "DELETE FROM property_features WHERE p_id = :id";   
            $stmt2 = $this->database->prepare($sql2);

            $stmt->bindparam(':id',$id);
            $stmt2->bindparam(':id',$id);

            $stmt->execute();
            $stmt2->execute();
            return true;

        } 
        catch (PDOException $th) {
            echo $th->getMessage();
            return false;
        }
    }

    


}




?>
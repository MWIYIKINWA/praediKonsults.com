<?php

include('../../include/classes/database.php');

if (isset($_POST['property'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $for = $_POST['for'];
    $type = $_POST['type'];
    
    $self_contained = $_POST['sc'];
    $air_conditioning = $_POST['ac'];
    $car_parking = $_POST["carp"];
    $alarm_system = $_POST['as'];

    $door_man = $_POST['dm'];
    $garage = $_POST['gr'];
    $fire_place = $_POST['fp'];
    $heating_system = $_POST['hs'];
    $garden = $_POST['gd'];
    $high_ceiling = $_POST['hc'];
    $balcon = $_POST['bl'];
    $laundry_room = $_POST['lm'];
    $swimming_pool = $_POST['swp'];
    $road_access = $_POST['rc'];


    $living_room = $_POST['lv'];
    $bed_room = $_POST['bdr'];
    $bath_room = $_POST['btr'];
    $kitchen = $_POST['ktn'];
    $pool = $_POST['pl'];
    $toilet = $_POST['tt'];

    $area = $_POST['area'];
    $cost = $_POST['cost'];
    $address = $_POST['address'];
    $map_link = $_POST['map_link'];
    $p_id = rand();

    $img_count = count($_FILES["picture"]["name"]);
    for ($i=0; $i < $img_count; $i++) { 
        $img_name = $_FILES["picture"]['name'][$i];
        $original = $_FILES["picture"]["tmp_name"][$i];
        $dir = "uploads/".$img_name;  
        move_uploaded_file($original, $dir);
        $property->add_pictures($dir, $p_id);    
    }

    if(empty($name) || empty($description)
    || empty($category)  || empty($cost)
    || empty($map_link)  || empty($address))
    {
        header("Location:../property.php?property=empty");
        exit();
    }

    if ($property->create($name, $description, $self_contained, $air_conditioning, $car_parking, $alarm_system, 
    $door_man, $balcon, $garage, $fire_place, $heating_system, $garden, $high_ceiling, $laundry_room,
    $swimming_pool, $category, $living_room, $bed_room, $bath_room, $kitchen, $pool, $toilet, 
    $area, $cost, $address, $map_link, $p_id, $road_access, $type, $for)) {
        header("Location:../property.php?property=posted");
        exit();
    }
    else
    {
        header("Location:../property.php?property=failed");
        exit();
    }


        }


        
//deleting


if (isset($_GET['delete_id'])) {
    
    $id = $_GET['delete_id'];
    
    if ($property->delete($id)) {
        header("Location:../property.php?property=deleted");
        exit();
    }
    else{
        header("Location:../property.php?property=failed");
         exit(); 
     }
}


//updating


  



?>
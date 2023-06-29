<?php

$host = 'localhost';
$pwd = '';
$user = 'root';
$db = 'praediikonsults';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    
    $pdo = new PDO($dsn, $user, $pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
     
}


require_once 'email.php';
$email = new email($pdo);

require_once 'user.php';
$user = new user($pdo);

require_once 'coming_soon.php';
$coming_soon = new coming_soon($pdo);

require_once 'blog.php';
$blog = new blog($pdo);

require_once 'property.php';
$property = new property($pdo);

require_once 'service.php';
$service = new service($pdo);

require_once 'testimonial.php';
$testimonial = new testimonial($pdo);

require_once 'team.php';
$team = new team($pdo);



?>
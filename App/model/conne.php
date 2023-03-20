<?php

#$MinhaQuery = "SELECT * FROM usuarios WHERE email=:mail"

# I decided to use PDO architecture because besides a more consistent syntax it is more secure.

$db_User = "root";
$db_Pass = "";


try{

    $pdo = new PDO('mysql:host=localhost;dbname=register_mvc', $db_User, $db_Pass);

}catch(PDOException $err){

    echo"Database connection error <br>" . $err -> getMessage();

}

?>


<?php

#$MinhaQuery = "SELECT * FROM usuarios WHERE email=:mail"

# I decided to use PDO architecture because besides a more consistent syntax it is more secure.

// class Conect{
    
//     try{
        
//         $pdo = new PDO('mysql:host=localhost;dbname=register_mvc', "root", "");
        
//     }catch(PDOException $err){
        
//         echo"Database connection error <br>" . $err -> getMessage();
        
//     }

// }
   
class Conect {
    
    private $pdo;

    public function __construct() {
        
        $this->pdo = new PDO('mysql:host=localhost;dbname=register_mvc', "root", "");
    
    }

    // other methods that use $this->pdo
}

?>


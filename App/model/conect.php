<?php

#$MyQuerySelect = "SELECT * FROM usuarios WHERE email=:email";

# I decided to use PDO architecture because besides a more consistent syntax it is more secure.

// class Conect{
    
//     try{
        
//         $pdo = new PDO('mysql:host=localhost;dbname=register_mvc', "root", "");
        
//     }catch(PDOException $err){
        
//         echo"Database connection error <br>" . $err -> getMessage();
        
//     }

// }
   
class Conect {
    
    public $pdo;

    public function __construct() {
        
        $this->pdo = new PDO('mysql:host=sql206.epizy.com;dbname=epiz_33847192', "root", "YqaH1qkqZe9Mype");
    
    }

    // other methods that use $this->pdo
}

?>


<?php

class Crud
{
    
    public function select_all(object $conect)
    {

        $conect = new Conect();

        $MyQuerySelect = $conect->pdo->prepare("SELECT * FROM user");    

        $MyQuerySelect->execute();

        $result = $MyQuerySelect -> fetchALL(PDO::FETCH_ASSOC);

        return $result;

    }
    
    public function select_by_email(string $email,object $conect)
    {

        $this->conect = $conect;

        $this->email = $email;
        
        $MyQuerySelect = $this->conect->pdo->prepare("SELECT * FROM user WHERE email='$this->email' ");    

        $MyQuerySelect->execute();

        $result = $MyQuerySelect -> fetchALL(PDO::FETCH_ASSOC);

        return $result;


    }

}


?>
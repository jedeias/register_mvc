<?php

class Crud
{
    
    public function select_all()
    {

        $MyQuerySelect = $conect->pdo->prepare("SELECT * FROM user");    

        $MyQuerySelect->execute();

        $result = $MyQuerySelect -> fetchALL(PDO::FETCH_ASSOC);

        return $result;

    }
    
    public function select(object $person,object $conect)
    {

        $this->conect = $conect;

        $this->person = $person;

        $email = $this->preson->email;
        
        $MyQuerySelect = $conect->pdo->prepare("SELECT * FROM user WHERE email='$email' ");    

        $MyQuerySelect->execute();

        $result = $MyQuerySelect -> fetchALL(PDO::FETCH_ASSOC);

        return $result;

    }

}


?>
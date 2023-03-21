<?php

class Crud
{
    
    public function select(object $person,object $conect)
    {

        $this->conect = $conect;

        $this->person = $person;

        $MyQuerySelect = $conect->pdo->prepare("SELECT * FROM user");    

        echo"<br><br> <pre>";

        var_dump($MyQuerySelect);

        $MyQuerySelect->execute();

        $result = $MyQuerySelect -> fetchALL(PDO::FETCH_ASSOC);

        var_dump($result);

        foreach ($MyQuerySelect as $key => $value) {
            # code...
        }

        var_dump($MyQuerySelect);

    }

}


?>
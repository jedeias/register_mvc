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

    public function delete_by_id(int $id, object $conect)
    {
        $this->conect = $conect;

        $this->id = $id;

        $MyQueryDelete = $this->conect->pdo->prepare("DELETE FROM user WHERE id = :id");

        $MyQueryDelete->bindParam(':id', $this->id);

        $MyQueryDelete->execute();
        
        echo"this id: $id was deleted";
    
        header("Refresh: 2 ; url=../index.php");

    }

    public function insert_user(object $person, object $conect)
    {
        $MyQueryInsert = $conect->pdo->prepare("INSERT INTO user (id,name, nick_name, sex, date, email, cpf, password) VALUES (:default ,:name, :nick_name, :sex, :date, :email, :cpf, :password)");
    
        var_dump($person);

        $MyQueryInsert->execute([
            ':id' => default,
            ':name' => $person->name,
            ':nick_name' => $person->nick_name,
            ':sex' => $person->sex,
            ':date' => $person->date,
            ':cpf'  => $person->cpf,
            ':email' => $person->email,
            ':password' => $person->password
        ]);

        //header("Refresh: 2 ; url=./main.php");
    }

}


?>
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
        $MyQueryInsert = $conect->pdo->prepare("INSERT INTO user (name, nick_name, sex, date, email, password) VALUES (:name, :nick_name, :sex, :date, :email, :password)");
    
        $MyQueryInsert->bindParam(':name', $person->name);
        $MyQueryInsert->bindParam(':nick_name', $person->nick_name);
        $MyQueryInsert->bindParam(':sex', $person->sex);
        $MyQueryInsert->bindParam(':date', $person->date);
        $MyQueryInsert->bindParam(':email', $person->email);
        $MyQueryInsert->bindParam(':password', $person->password);
    
        $MyQueryInsert->execute();
    }

}


?>
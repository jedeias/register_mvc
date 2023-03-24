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
    
        header("Refresh: 2 ; url=../index.html");

    }

    public function insert_user(object $person,object $conect) {
        try {
            //$stmt = $conect->prepare("INSERT INTO user (name, nick_name, sex, date_birth, email, CPF, password) VALUES (:name, :nick_name, :sex, :date_birth, :email, :CPF, :password)");
        
            $stmt = $conect->pdo->prepare("INSERT INTO user (name, nick_name, sex, date_birth, email, CPF, password) VALUES (:name, :nick_name, :sex, :date_birth, :email, :CPF, :password)");

            $stmt->bindParam(':name', $person->name);
            $stmt->bindParam(':nick_name', $person->nick_name);
            $stmt->bindParam(':sex', $person->sex);
            $stmt->bindParam(':date_birth', $person->date);
            $stmt->bindParam(':email', $person->email);
            $stmt->bindParam(':CPF', $person->cpf);
            $stmt->bindParam(':password', $person->password);
            
            $stmt->execute();
            
            echo "Usuário inserido com sucesso!";
            header("Refresh: 2 ; url=main.php");
        } catch(PDOException $e) {
            echo "Erro ao inserir usuário: " . $e->getMessage();
            header("Refresh: 2 ; url=main.php");
        }
    }

}


?>
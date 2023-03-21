<?php

class Controller{
    
    public function show_test(string $var = null){
        
        echo $var->test();

    }

    public function People(    string $name,
                                string $nick_name, 
                                string $sex, 
                                string $date, 
                                int $cpf, 
                                string $email, 
                                string $password){

    $this->name = $name;
    $this->nick_name = $nick_name;        
    $this->sex = $sex;
    $this->date = $date;
    $this->cpf = $cpf;
    $this->email = $email;
    $this->senha = $password;

    $person = new People($name, $nick_name, $sex, $date, $cpf, $email, $password);

    return $person;

    }

    public function Query_select(object $person)
    {

        $this->person = $person;

        try {
    
            $conect = new Conect();
            // do something with $conect

            $conect;


        } catch(PDOException $err) {
        
            echo "Database connection error <br>" . $err -> getMessage();
        
        }
        


    }

}

?>
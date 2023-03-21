<?php

/**
 * this is my class person for crete person.
 */

 class People{

    public function __construct(    
        string $name, 
        string $nick_name, 
        string $sex, 
        string $date, 
        int $cpf,
        string $email, 
        string $password
    )
    {
        $this->name = $name;
        $this->nick_name = $nick_name;        
        $this->sex = $sex;
        $this->date = $date;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->password = $password;
    }
}

?>
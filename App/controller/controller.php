<?php

class Controller{
    
    public function show_display(string $mansage){
        
        $this->mansage = $mansage;

        $display = new Display();
        
        $display_test = $display->test($this->mansage);
        
    }

    public function show_user_list()
    {
        
        $display = new Display();

        $display->table_select();
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

    public function Query_select_all()
    {
        try {
    
            $conect = new Conect();
            // do something with $conect
            
            $selec_mysql = new Crud();

            $selec_mysql->select_all();

        } catch(PDOException $err) {
        
            echo "Database connection error <br>" . $err -> getMessage();
        
        }
        
        return $user_list;

    }

    public function Query_select_person(object $person)
    {

        $this->person = $person;

        try {
    
            $conect = new Conect();
            // do something with $conect
            
            $selec_mysql = new Crud();

            $user_list = $selec_mysql->select($person, $conect);

        } catch(PDOException $err) {
        
            echo "Database connection error <br>" . $err -> getMessage();
        
        }
        
        return $user_list;

    }


}

?>
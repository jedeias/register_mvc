<?php

class Controller{
    
    public function show_display(string $mansage){
        
        $this->mansage = $mansage;

        $display = new Display();
        
        $display_test = $display->test($this->mansage);
        
    }

    public function show_all_user_list(array $user_array)
    {
        
        $this->user_array = $user_array;

        $display = new Display();

        $display->table_select($this->user_array);
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

            $result = $selec_mysql->select_all($conect);

            return $result;

        } catch(PDOException $err) {
        
            echo "Database connection error <br>" . $err -> getMessage();
        
        }

    }

    // public function Query_select_login(string $email, string $password)
    // {

    //     $this->email = $email;
    //     $this->password = $password;

    //     try {
    
    //         $conect = new Conect();
    //          // do something with $conect
            
    //         $selec_mysql = new Crud();

    //         $user_list = $selec_mysql->select_by_email($this->email, $conect);

    //         var_dump($user_list);

    //     } catch(PDOException $err) {
        
    //         echo "Database connection error <br>" . $err -> getMessage();
        
    //     }
        
    //     return $user_list;

    // }

    public function login_check(string $email, string $password)
    {
        
        $this->email = $email;
        $this->password = $password;

        try {
    
            $conect = new Conect();
             // do something with $conect
            
            $selec_mysql = new Crud();

            $login_verify = $selec_mysql->select_by_email($this->email, $conect);
            
            $email_sql = $login_verify[0]["email"];
            $password_sql = $login_verify[0]["password"];

            if($this->email == $email_sql and $password_sql==$this->password ){
                
                return TRUE;

            }else{
                
                echo"Password or email invalid";

                header("Refresh: 1 ; url=../index.php");

            }

        } catch(PDOException $err) {
        
            echo "Database connection error <br>" . $err -> getMessage();
        
        }

    }

}

?>
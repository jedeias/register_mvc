<?php

class controller{
    
    public function show_test(string $var = null)
    {
        
        echo $var->test();

    }

    public function Query_select()
    {
        try {
    
            $conect = new Conect();
            // do something with $conect
        

        } catch(PDOException $err) {
        
            echo "Database connection error <br>" . $err -> getMessage();
        
        }
        

    }

}

?>
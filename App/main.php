<?php

include ("autoload.php");

#call the class

$email = $_POST["email"];
$password = $_POST["password"];


if (isset($email) or isset($password) ){

    $controller = new Controller();
    
    #declares the objects:

    $login_view = $controller->login_check($email, $password);
    
    if($login_view==TRUE){
        

        $person = $controller->People("nome","sobrenome","M","1935-05-06", "01234567890" ,"teste@teste","123456");
        
        $user_array = $controller->Query_select_all();
        
        //$controller->show_display("test <br>");
        
        $controller->show_all_user_list($user_array);
    }else{
        echo"Password or email invalid";

        header("Refresh: 2 ; url=../index.php");
    }

}else{

    echo"email or password not fin";
    
    header("Refresh: 2 ; url=../index.php");    

}


?>
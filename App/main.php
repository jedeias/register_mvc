<?php

include ("autoload.php");

#call the class

$email = $_POST["email"];
$password = $_POST["password"];


if (isset($email) and isset($password) ){

    $controller = new Controller();
    
    #declares the objects:

    $login_view = $controller->login_check($email, $password);
    
    if($login_view==TRUE){
        
        $user_array = $controller->Query_select_all();
        
        //$controller->show_display("test <br>");
        
        $controller->show_all_user_list($user_array);
        
    }else{
        echo"Password or email invalid";

        header("Refresh: 2 ; url=../index.html");
    }

}else{

    echo"email or password not fin";
    
    header("Refresh: 2 ; url=../index.html");    

}


?>
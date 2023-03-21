<?php

include ("autoload.php");

#call the class

$controller = new Controller();

#declares the objects:

$person = $controller->People("nome","sobrenome","M","1935-05-06", "01234567890" ,"teste@teste","123456");

$controller->Query_select($person);

$controller->show_display("test <br>");

$controller->show_user_list();

?>
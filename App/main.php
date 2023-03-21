<?php

include ("autoload.php");

#call the class

$controller = new Controller();

$controller->var = new View_test();

$controller->show_test = new View_test();

#declares the objects:

$controller->show_test->test();

$person = $controller->People("nome","sobrenome","M","1935-05-06", "01234567890" ,"teste@teste","123456");

$controller->Query_select($person);


?>
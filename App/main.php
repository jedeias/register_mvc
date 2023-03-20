<?php

include ("autoload.php");

#call the class

$controller = new Controller();

$controller->var = new View_test();

$controller->show_test = new View_test();

$obj = new Person("tom", "jobin","M","1994-04-05","01234567890","teste@teste.com", "password");

#declares the objects:

$controller->show_test->test();

echo"<pre>";
print_r ($obj);

?>
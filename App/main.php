<?php

include ("autoload.php");

$controller = new Controller();

$controller->var = new View_test();

$controller->show_test = new View_test();

$controller->show_test->test();

$obj = new Person("tom", "jobin","M","1994-04-05","01234567890","teste@teste.com", "password");

echo"<pre>";
print_r ($obj);

?>
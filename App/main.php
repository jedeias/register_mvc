<?php

include ("autoload.php");

#call the class

$controller = new Controller();

$controller->var = new View_test();

$controller->show_test = new View_test();

$controller->Query_select();

#declares the objects:

$controller->show_test->test();


?>
<?php

include ("autoload.php");

$controller = new Controller();

$controller->var = new View_test();

$controller->show_test = new View_test();

$controller->show_test->test();


?>
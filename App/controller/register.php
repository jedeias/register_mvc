<?php
include"../autoload.php";

require_once"../model/conect.php";
require_once"../model/crud.php";
require_once"../model/people.php";

$controller = new Controller();

$name = $_POST['name'];
$nick_name = $_POST['name2'];
$sex = $_POST['sex'];
$date = $_POST['date_brith'];
$cpf = $_POST['cpf'];
$email = $_POST['email'] ;
$password = $_POST['password'];

$preson = $controller->People($name, $nick_name, $sex , $date, $cpf, $email, $password);

$controller->insert_into($preson);

?>

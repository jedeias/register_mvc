<?php

include"../autoload.php";

require_once"../model/conect.php";
require_once"../model/crud.php";

$id = $_GET['id']; 


function delete_user(int $id)

{
    $id;
    
    $conect = new Conect();

    $delete = new Crud();

    $delete->delete_by_id($id, $conect);

}

delete_user($id);

?>
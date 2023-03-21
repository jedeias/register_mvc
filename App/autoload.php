<?php

#autoloading a method to find classes and integrate them into a file

public function recept(Type $var = null)
{
    # code...
}

function autoload($class_Name){

    #we look for the classes within the directories within this array

    $dirs = array("controller/","model/","view/", "");

    foreach($dirs as $dir){
        
        $file = ("$dir" . "$class_Name" . ".php");

        if(file_exists($file)){
            
            include_once($file);
        
        }
    }
}

spl_autoload_register('autoload');



?>
 

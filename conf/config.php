<?php
// includo librerie e file di oggetti
function autoloadViste($class_name) {
    $filename = "viste/" . $class_name . ".php";
    if(is_readable($filename))
        require $filename;
}

function autoloadModelli($class_name) {
    $filename = "modelli/" . $class_name . ".php";
    if(is_readable($filename))
        require $filename;
}

spl_autoload_register("autoloadViste");
spl_autoload_register("autoloadModelli");


?>

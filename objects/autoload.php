<?php

function autoload(string $namespace) {

    $path = "{$namespace}.php";
    
    require_once($path);
}

spl_autoload_register('autoload');
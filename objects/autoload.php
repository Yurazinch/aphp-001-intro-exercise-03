<?php

function autoload(string $namespace) {

    $path = str_replace('\\', '/', $namespace) . '.php';
    
    require_once($path);
}

spl_autoload_register('autoload');
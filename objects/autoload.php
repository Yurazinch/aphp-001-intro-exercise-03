<?php

function autoload(string $namespace, string $classname) {

    $path = "{$namespace}\{$classname}.php";
    
    require_once($path);
}

spl_autoload_register('autoload');
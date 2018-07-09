<?php

spl_autoload_register('AutoLoader');

function AutoLoader($className)
{
    // What it does?
    // imports files based on the namespace as folder and class as filename.
    
    $file = str_replace('\\',DIRECTORY_SEPARATOR, $className);
    require_once $file . '.php'; 
}
<?php

// You need to import auto load so that you can use classes without import:
require_once 'autoload.php';


// Use Hello (without import):
$hello = new \one\Hello();
echo $hello->message;
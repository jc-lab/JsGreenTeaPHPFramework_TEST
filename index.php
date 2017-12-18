<?php
require_once(__DIR__.'/JsGreenTeaPHPFramework/Core.php');

function getTickCount()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$st = getTickCount();
\JsGreenTeaPHPFramework\Core::index("testweb", dirname($_SERVER['SCRIPT_NAME']));
$dt = getTickCount() - $st;

echo "dt : $dt";

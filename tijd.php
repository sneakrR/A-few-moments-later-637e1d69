<?php

$a = explode(" ", $argv[1]);
$eind = 0;

foreach ($a as $value){
    $b = substr($value, -1);

switch ($b) {
    case "s":
       $sec = (int) $value;
       $eind += $sec;
    break;
    case "m":
        $sec = (int) $value * 60;
        $eind += $sec;
    break;
    case "u":
        $sec = (int) $value * 3600;
        $eind += $sec;
    break;
    case "d":
        $sec = (int) $value * 86400;
        $eind += $sec;
    break;
}
}
print_r($sec);
print_r(" seconds");
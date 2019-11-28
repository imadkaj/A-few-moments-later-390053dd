<?php

$a=explode(" ", $argv[1]);
$b=0;
foreach ($a as $value) {
$last = substr($value, -1);
switch ($last) {
    case "d":
  $b=$b+((int)$value*86400);
        break;
        case "u":
    $b=$b+((int)$value*3600);
            break;
        case "m":
    $b=$b+((int)$value*60);
                break;
    case "s":
  $b=$b+(int)$value;
        break;
    default:
    echo "is geen tijd";
        break;
}
}
print_r($b);
print_r(" seconde");



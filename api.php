<?php
$text = $_GET["text"];

$string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$stringLength1 = strlen($string);
$randomIndex1 = mt_rand(0, $stringLength1 - 1);
$stringLength2 = strlen($string);
$randomIndex2 = mt_rand(0, $stringLength2 - 1);
$stringLength3 = strlen($string);
$randomIndex3 = mt_rand(0, $stringLength3 - 1);
$stringLength4 = strlen($string);
$randomIndex4 = mt_rand(0, $stringLength4 - 1);
$stringLength5 = strlen($string);
$randomIndex5 = mt_rand(0, $stringLength5 - 1);
$stringLength6 = strlen($string);
$randomIndex6 = mt_rand(0, $stringLength6 - 1);
$stringLength7 = strlen($string);
$randomIndex7 = mt_rand(0, $stringLength7 - 1);
$stringLength8 = strlen($string);
$randomIndex8 = mt_rand(0, $stringLength8 - 1);


$raw = fopen("raw/$string[$randomIndex1]$string[$randomIndex2]$string[$randomIndex3]$string[$randomIndex4]$string[$randomIndex5]$string[$randomIndex6]$string[$randomIndex7]$string[$randomIndex8].txt", "w");
fwrite($raw, $text);
fclose($raw);

$thislink = "https://testingphp.onlysploits.repl.co/";

echo "<script>window.location.replace('raw/". $string[$randomIndex1],$string[$randomIndex2],$string[$randomIndex3],$string[$randomIndex4],$string[$randomIndex5],$string[$randomIndex6],$string[$randomIndex7],$string[$randomIndex8] .".txt');</script>";
?>

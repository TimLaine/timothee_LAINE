<?php
$date = new DateTime();
$date->format('d-m-y');
$birth = new DateTime('01-01-2000');
$age = $date->diff($birth);
var_dump($date);
var_dump($age);
echo $age->y;
?>
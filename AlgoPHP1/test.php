<?php
$date = new DateTime();
$date->format('d-m-y');
$birth = new DateTime('01-01-2000');
$age = $date->diff($birth);
echo $date->format('Y');
echo $age->y;
?>
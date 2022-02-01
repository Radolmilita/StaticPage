<?php
$f = fopen(__DIR__ . "../dish.txt", "r");
$dishString = fgets($f);
$dishArray = explode(";", $dishString);
fclose($f);

$data['dish'] = [
    'dishName' => $dishArray[0],
    'dishType'=>$dishArray[1],
    'weight'=>$dishArray[2]
];

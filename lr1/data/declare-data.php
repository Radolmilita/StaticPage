<?php
$data = [];
$f = fopen("data/dish.txt", "r");
$dishString = fgets($f);
$dishArray = explode(";", $dishString);
fclose($f);


$data ['dish'] = [
        'dishName'=>$dishArray[0],
        'dishType'=>$dishArray[1],
        'weight'=>$dishArray[2],
];
$f = fopen("data/dishComponents.txt","r");
while (!feof($f)){
    $rowString = fgets($f);
    $rowArray = explode(";",$rowString);
    $DishComponents = [
        "componentName"=>$rowArray[0],
        "componentWeight"=>$rowArray[1],
    ];
    $data['dishes'][]= $DishComponents;
}
fclose($f);

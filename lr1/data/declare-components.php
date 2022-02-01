<?php
$f = fopen(__DIR__ ."/dishComponents.txt", "r");
$i = 0;
while(!feof($f)){
    $rowStr = fgets($f);
    $rowArr = explode(";", $rowStr);
    $data['dishComponents'][$i]["componentName"]= $rowArr[0];
    $data['dishComponents'][$i]["componentWeight"] = $rowArr[1];
    $i++;
}
fclose($f);
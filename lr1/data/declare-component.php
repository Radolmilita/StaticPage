<?php
$f = fopen($path.'/'.$node,"r");
$rowStr = fgets($f);
$rowArr = explode(";",$rowStr);
$component["file"] = trim($node);
$component["componentName"] = $rowArr[0];
$component["componentWeight"] = $rowArr[1];
$component["pack"] = $rowArr[2];
$component["sweet"] = $rowArr[3];
fclose($f);

return $component;

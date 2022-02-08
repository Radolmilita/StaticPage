<?php
if($_POST){
    $f= fopen("../data/Dish".$_GET['file'],"w");
    $dishArray = [
        $_POST['component_name'],
        $_POST['component_weight'],
        $_POST['component_pack'],
        $_POST['component_sweet']
    ];
    $dishString = implode(";",$dishArray);
    fwrite($f.$dishString);
    fclose($f);
    header('Location: ../index.php');
}
    $path = __DIR__."/../data/Dish";
    $node = $_GET['file'];
    $component = require __DIR__.'/../data/declare-component.php'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование компонента блюда</title>
    <link rel="stylesheet", type="text/css" href="../css/edit-component-form-style.css">
</head>
<body>
    <a href="../index.php"> На главную </a>
    <form name = 'edit-component' method="post">
        <div>
            <label for="component_name"> Название кмпонента: </label>
            <input type="text" name="component_name" value=<?php echo $component['componentName'];?>>
        </div>
        <div>
            <label for="component_weight"> Вес ингредиента: </label>
            <input type="text" name="component_weight" value=<?php echo $component['componentWeight'];?>>
        </div>
        <div>
            <label for="component_pack"> Вес ингредиента: </label>
            <input type="date" name="component_pack" value=<?php echo $component['pack'];?>>
        </div>
        <div>
            <label for="component_sweet"> Вес ингредиента: </label>
            <input type="text" name="component_sweet" value=<?php echo $component['sweet'];?>>
        </div>
        <div>
            <input type="submit" name="ok" value="Изменить">
        </div>
    </form>
</body>
</html>
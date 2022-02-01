<?php
    if($_POST){
        $f = fopen("../data/dish.txt","w");
        $dishArray = [
                $_POST['dishName'],
                $_POST['dishType'],
                $_POST['weight'],
        ];
        $dishString = implode( ";" , $dishArray);
        fwrite($f,$dishString);
        fclose($f);
        header('Location: ../index.php');
    }
    require ('../data/declare-dish.php');
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/edit-dish-form-style.css">
    <title>Dish Edit</title>
</head>
<body>
    <a href="../index.php">На главную</a>
    <form name = 'edit-dish' method="post">
        <div>
            <label for = 'dish-name'>Название блюда: </label>
            <input type="text" name = "dishName" value = "<?php echo $data['dish']['dishName'];?>">
        </div>
        <div>
            <label for='dish-type'>Тип блюда: </label>
            <input type="text" name="dishType" value = "<?php echo $data['dish']['dishType'];?>">
        </div>
        <div>
            <label for='weight'>Вес блюда: </label>
            <input type="text" name="weight" value = "<?php echo $data['dish']['weight'];?>">
        </div>
        <div>
            <input type="submit" name="ok" value="Изменить">
        </div>
    </form>

</body>
</html>
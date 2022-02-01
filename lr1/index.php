<!---index.php-->
<!--Created by Valerij Dimitriev-->
<!--on 2022.01.17-->
<!--All rights reserved and belong to their owners-->

<?php
    require_once "data/declare-data.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/main-style.css">
    <link rel="stylesheet" type="text/css" href="css/low-weight-products.css">
    <title>Static HTML page</title>
</head>
<body>
<header>
    <h1>Блюдо
        <span class="dish-name">
            <?php echo $data['dish']['dishName'];?>
        </span>
    </h1>
    <h3>Тип
        <span class="dish-type">
            <?php echo $data['dish']['dishType'];?>
        </span>
    </h3>
    <h3>Вес порции
        <span class="dish-weight">
            <?php echo $data['dish']['weight'];?>
        </span>
    </h3>
    <a href="forms/edit-dish.php">Редактировать блюдо</a>
</header>
<section>
    <table>
        <thead>
        <tr>
            <th>№ Ингридиента </th>
            <th>Позиция</th>
            <th>Вес на порцию</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($data['dishComponents']as $key=>$component){
                $row_class = 'row';
                if($component['componentWeight']>100){
                    $row_class = 'high-weight';
                }
                if($component['componentWeight']<100){
                    $row_class = 'low-weight';
                }
                echo "<tr class = '$row_class'>
                    <td>".($key+1)."</td>
                    <td>".$component['componentName']."</td> 
                    <td>".$component['componentWeight']."</td>
                </tr>";
            }
        ?>
        </tbody>
    </table>
</section>

</body>
</html>
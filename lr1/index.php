<!---index.php-->
<!--Created by Valerij Dimitriev-->
<!--on 2022.01.17-->
<!--All rights reserved and belong to their owners-->

<?php
    require "data/declare-data.php"
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Static HTML page</title>
    <style>
        table{
            background-color: lightgray;
        }
        thead{
            background-color: grey;
        }
        td{
            border: solid 1px black;
        }
    </style>
</head>
<body>
<header>
    <h1>Блюдо <span style = "color: purple"><?php echo $data['dish']['dishName'];?></span></h1>
    <h3>Тип <span style="color: purple"><?php echo $data['dish']['dishType'];?></span></h3>
    <h3>Вес порции <span style="color: purple"><?php echo $data['dish']['weight'];?></span></h3>
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
        <?php foreach ($data['components']as $key=>$component): ?>
            <tr>
                <td><?php echo($key+1);?></td>
                <td><?php echo $component['componentName'];?></td>
                <td><?php echo $component['componentWeight'];?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</section>

</body>
</html>
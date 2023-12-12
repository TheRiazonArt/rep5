<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Задание №1</title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    </head>
    <main>
        <body>
            <?php
                if ((int)$_POST['n'] == (int)$_POST['m']) { echo "Числа равны.";}
                elseif ((int)$_POST['n'] > (int)$_POST['m']) {echo "Число ".$_POST['n']." больше.";} 
                else {echo "Число ".$_POST['m']." больше.";}
            ?>
        </body>
    </main>
</html>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Задание №2</title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    </head>
    <main>
        <body>
            <?php
                if ($_POST['act'] == 0 ) {echo $_POST['n']." + ".$_POST['m']." = ".$_POST['n']+$_POST['m'];} 
                elseif ($_POST['act'] == 1 ) {echo $_POST['n']." - ".$_POST['m']." = ".$_POST['n']-$_POST['m'];} 
                elseif ($_POST['act'] == 2 ) {echo $_POST['n']." * ".$_POST['m']." = ".$_POST['n']*$_POST['m'];} 
                else {
                    if ($_POST['m']!=0) {echo $_POST['n']." / ".$_POST['m']." = ".$_POST['n']/$_POST['m'];} 
                    else {echo "Деление на ноль запрещено";}
                }
            ?>
        </body>
    </main>
</html>
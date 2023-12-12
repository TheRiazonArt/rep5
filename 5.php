<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Задание №5</title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    </head>
    <main>
        <body>
            <?php
                $sum = 0;
                $sum += $_POST["r1"];
                $sum += $_POST["r2"];
                $sum += $_POST["r3"];
                $sum += $_POST["r4"];
                $sum += $_POST["r5"];
                $sum += $_POST["r6"];
                $sum += $_POST["r7"];
                $sum += $_POST["r8"];
                $sum += $_POST["r9"];
                $sum += $_POST["r10"];
                $sum += $_POST["r11"];
                $sum += $_POST["r12"];
                $sum += $_POST["r13"];
                $sum += $_POST["r14"];
                $sum += $_POST["r15"];
                $sum += $_POST["r16"];
                $sum += $_POST["r17"];
                $sum += $_POST["r18"];
                $sum += $_POST["r19"];
                echo "<h2>";
                    if ($sum > 15) {echo $_POST["name"].", у Вас добрый характер!";}
                    elseif ($sum <= 15 && $sum >=8) {echo $_POST["name"].", у Вас есть проблемы в характере, однако с Вами можно подружиться";}
                    else {echo $_POST["name"].", Вы очень плохой человек.";}
                echo "</h2>";
            ?>
        </body>
    </main>
</html>
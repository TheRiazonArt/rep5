<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Задание №3</title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    </head>
    <main>
        <body>
            <?php
                $a = $_POST['n'];
                switch ($_POST['act']) 
                {
                    case 0:
                        Chet($a);
                        break;
                    case 1:
                        neChet($a);
                        break;
                    case 2:
                        Prost($a);
                        break;
                    case 3:
                        Sost($a, true);
                        break;
                    default:
                        Chet($a, true);
                        break;
                }
                
                function Chet($number) 
                {
                    echo "<h2>Делители числа ".$number.":</h2>";
                    echo "<p>";
                        for($i = 1; $i <= $number; ++$i) {
                            if($number % $i == 0 && $i%2==0) echo $i." ";
                        }
                    echo "</p>";
                }

                function neChet($number) 
                {
                    echo "<h2>Делители числа ".$number.":</h2>";
                    echo "<p>";
                        for($i = 1; $i <= $number; ++$i) {
                            if ($number % $i == 0 && $i%2!=0) echo $i." ";
                        }
                    echo "</p>";
                }

                function Prost($number) 
                {
                    echo "<h2>Делители числа ".$number.":</h2>";
                    echo "<p>";
                        for($i = 1; $i <= $number; ++$i) {
                            if($number % $i == 0) {
                                $temp = 0;
                                for($j = 2; $j < $i; ++$j) {
                                    if ($i%$j == 0) $temp++;
                                }
                                if($temp==0) echo $i." ";
                            }
                        }
                    echo "</p>";
                }

                function Sost($number) 
                {
                    echo "<h2>Делители числа ".$number.":</h2>";
                    echo "<p>";
                        for($i = 1; $i <= $number; ++$i) {
                            if($number % $i == 0) {
                                $temp = 0;
                                for($j = 2; $j < $i; ++$j) {
                                    if ($i%$j == 0) $temp++;
                                }
                                if ($temp!=0) echo $i." ";
                            }
                        }
                    echo "</p>";
                }
            ?>
        </body>
    </main>
</html>
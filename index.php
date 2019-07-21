<?php

require 'src/functions.php';

$array_string = ['one', 'two', 'three', 'four'];

echo $result = task1($array_string, true);

echo '<br>';

task2('+', 567, 1, 23, 4, 56);

echo '<br>';
?>
<html>
    <body>
        <table>
            <?php task3(9,5);?>
        </table>
    </body>
</html>

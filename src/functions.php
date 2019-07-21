<?php

function task1(array $array, bool $return = false)
{
    if ( $return == true ){
        $srt = '';
        foreach ($array as $item){
            $srt .= $item . ' ';
        }
        return trim($srt);
    }else {
        foreach ($array as $item){
            echo '<p>' . $item . '</p>';
        }
    }
}

function task2(string $operation, ...$args)
{
    if ($operation == '+'){
        if (isset($args)) {
            $result = 0;
            foreach($args as $arg){
                $result += $arg;
            }
            echo $result;
        }else{
            echo 'Error';
        }
    }elseif ($operation == '-'){
        if (isset($args)) {
            $result = 1;
            foreach($args as $arg){
                $result -= $arg;
            }
            echo $result;
        }else{
            echo 'Error';
        }
    }elseif ($operation == '*'){
        if (isset($args)) {
            $result = 1;
            foreach($args as $arg){
                $result *= $arg;
            }
            echo $result;
        }else{
            echo 'Error';
        }
    }elseif ($operation == '/'){
        if (isset($args)) {
            $i = 0;
            foreach($args as $arg){
                $result = null;
                if ($i == 0){
                    $result = $arg;
                    $i++;
                }else{
                    $result /= $arg;
                }
            }
            echo $result;
        }else{
            echo 'Error';
        }
    }else{
        echo 'Error';
    }
    echo '<br>';
}

function task3( $a, $b )
{
    for ($i = 1; $i <= $a; $i++){
        echo '<tr>';
        for ($j = 1; $j <= $b; $j++){
            echo '<td align="center">' . $i * $j . '</td>';
        }
        echo '</tr>';
    }
}

function task4()
{
    echo date('d.m.Y H:i');
    echo '<br>';
    echo mktime( 00, 00, 00, 2, 24, 2016);
    echo '<br>';
}

function task5()
{
    echo $str = 'Карл у Клары украл Корралы';
    echo '<br>';
    echo str_replace('К', '', $str);
    echo '<br>';
    echo $str2 = 'Две бутылки лимонада';
    echo '<br>';
    echo str_replace('Две', 'Три', $str2);
    echo '<br>';
}

function task6(string $file_name)
{
    echo file_get_contents($file_name);
}
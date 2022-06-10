<?php
$arr = [12, 1.236, 'qwe', [23, '2.447', 'te', '.123', ['aboba', 43]], 5.47, 11];
output($arr, 0);
function output(array $arr, $lvl)
{
    for ($el = 0; $el < count($arr); $el++) {
        if (is_array($arr[$el]))
        {
            output($arr[$el], $lvl + 1);
        }
        else
        {
            check($arr[$el]);
        }
    }
}
function check($arg){
    if (is_numeric($arg)) {
        if(stristr($arg, '.')) {
            if (startsWith($arg, '.')) {
                $arg = strtoupper($arg);
                echo $arg;
                echo " ";
            }
            elseif(endsWith($arg, '.')){
                $arg = strtoupper($arg);
                echo $arg;
                echo " ";
            } else {
                $arg = round($arg, 2);
                echo $arg;
                echo " ";
            }
        } else {
            $arg = $arg * 2;
            echo $arg;
            echo " ";
        }
    } else {
        $arg = strtoupper($arg);
        echo $arg;
        echo " ";
    }
    return $arg;
}
function startsWith( $haystack, $needle ) {
    $length = strlen( $needle );
    return substr( $haystack, 0, $length ) === $needle;
}
function endsWith( $haystack, $needle ) {
    $length = strlen( $needle );
    if( !$length ) {
        return true;
    }
    return substr( $haystack, -$length ) === $needle;
}


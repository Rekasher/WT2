<?php
if (count($_GET) == 0) {
    echo 'enter the correct parameters';
}
$_GET = array_unique($_GET);
$_GET = array_values($_GET);
sort($_GET, SORT_STRING);
foreach($_GET as $Str) {
    if (!ctype_alpha($Str)){
      echo $Str, ' isnt a city, pls enter the correct parameter', '<br>';
    }
    else {echo $Str, '<br>';}
}
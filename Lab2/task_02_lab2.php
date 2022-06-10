<?php
$text = $_GET;
foreach ($text as $element) {
    echo $element, '<br>';
}
$str = $_GET["arg"];
$arr1 = explode(" ", $str);

for ($i = 0; $i < count($arr1); $i++){
    if ((($i+1) % 3) == 0) {
        $arr1[$i] = strtoupper($arr1[$i]);
    }
    for ($j = 0; $j < strlen($arr1[$i]); $j++) {
        if ((($j+1) % 3) == 0){
            echo '<span style="color: purple">' . $arr1[$i][$j] . '</span>';
        }
        else {
            echo $arr1[$i][$j];
        }
    }
    echo ' ';
}

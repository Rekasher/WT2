<?php
$text1 = !empty($_POST['text1']) ? $_POST['text1'] : 'no text';
$text2 = !empty($_POST['text2']) ? $_POST['text2'] : 'no text';
$arr1 = explode(" ", $text1);
$wrongarr = array();
foreach($arr1 as $element){
    if (!is_numeric($element)) {
        echo $element, ' wrong parameter', '<br>';
        array_push($wrongarr, $element);
    }
}
$arr2 = explode(" ", $text2);
foreach($arr2 as $element){
    if (!is_numeric($element)) {
        echo $element, ' wrong parameter', '<br>';
        array_push($wrongarr, $element);
    }
}
$diff = array_diff($arr1, $arr2);
$diff2 = array_diff($arr2, $arr1);
echo $text1, ' text 1', '<br>';
echo $text2, ' text 2', '<br>';
echo 'result: ';
foreach ($diff as $element) {
    if(!in_array($element, $wrongarr)){
        echo $element, ' ';
    }
}
foreach ($diff2 as $element) {
    if(!in_array($element, $wrongarr)){
        echo $element, ' ';
    }
}
?>


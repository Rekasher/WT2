<?php
$text = !empty($_POST['text']) ? $_POST['text'] : 'no text';
$arr1 = explode(" ", $text);
$reversed = array_reverse($arr1);
foreach ($reversed as $element) {
    echo $element, ' ';
}

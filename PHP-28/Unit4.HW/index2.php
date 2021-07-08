<?php
$array  = array(10,20,30,40,50);
$reversed = array_reverse($array);
$preserved = array_reverse($array, true);

echo "<pre>";
    print_r($array);
echo "</pre>";

echo "<pre>";
    print_r($reversed);
echo "</pre>";

echo "<pre>";
    print_r($preserved);
echo "</pre>";
?>

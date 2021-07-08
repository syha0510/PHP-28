<?php
$array = array( 10,20,30,40,49,50);

$max = null;
$vitri = null;

for ($i = 0; $i < count($array); $i++)
{
    if ($max == null){
        $max = $array[$i];
        $vitri = $i;
    }
    else {
        if ($array[$i] > $max){
            $max = $array[$i];
            $vitri = $i;
        }
    }
}

echo "Giá trị lớn nhất là $max, nằm tại vị trí $vitri";
?>

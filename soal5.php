<?php
function karakter($kata){
    $char = array_count_values(str_split($kata));
    arsort($char);
    $charx = key($char);
    $charcount = current($char);
    $hasil = "$charx $charcount x";

    return $hasil;
}

$inputkata = "welcome";
$result = karakter($inputkata);
echo "Karakter Yang paling Sering Muncul Dalam kata $inputkata adalah : $result";
?>
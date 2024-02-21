<?php
function angkanilai($arr){
    $angkaArr = array_unique($arr);
    rsort ($angkaArr);

    if (count($angkaArr) > 1) {
        return $angkaArr[1];
    } else {
        return "Tidak Ada Angka Terbesar kedua";
    }
}

$angka = [rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)];
echo "Array : " .implode(", ", $angka). "\n";
$hasil = angkanilai($angka);
echo "Nilai Terbesar Kedua Adalah : " .$hasil;
?>
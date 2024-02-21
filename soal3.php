<?php
function lampu(){
   $warna = ["Merah", "Kuning", "Hijau"];
   static $index = 0;
   $warnaindex = $index % count($warna);
   $index++;
   return $warna[$warnaindex];
}

for ($i=1; $i <= 10; $i++) { 
   $signal = lampu();
   echo "Pemanggilan Ke - $i : $signal\n";
}
?>
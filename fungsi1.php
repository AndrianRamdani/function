<?php

function cetak_ganjil () {
  for ($i=0; $i<100; $i++) {
    if ($i%2 == 1) {
        echo "$i                    <br>";
    }
  }
}
//pemanggilan fungsi
cetak_ganjil();

echo "<hr>";

function perkenalan($nama,$kelas)
{
    echo "Nama Saya : $nama";
    echo "Kelas : $kelas";
}
echo "<hr>";
$a = "ian";
$b = "XI RPL 2";
perkenalan ($a,$b);

//optional parameter
function perkenalan2($nama = "Aang"){
    echo "Nama Saya : $nama";
}
echo "<hr>";
$a = "Saka";
perkenalan2();
?>
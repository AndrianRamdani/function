<?php
function segitiga($alas,$tinggi){
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    $luas = ($alas*$tinggi)/2;
    echo "Luas : $luas";
}

$a = 10;
$t = 5;
echo "<b>Segitiga</b><br>";
segitiga($a,$t);
echo "<hr>";

function lingkaran($jari)
{
    echo "Jari-jari : $jari <br>";
    $luas = 3.14 * ($jari*$jari);
    echo "Luas : $luas <br>";
}
$j = 10;
echo "<b>Luas Lingkaran</b><br>";
lingkaran($j);

echo "<hr>";

function lingkaran2($jari)
{
    echo "Jari-jari : $jari <br>";
    $keliling = 2 * 3.14 * $jari;
    echo "Keliling : $keliling";
}
$ja = 7;
echo "<b>Keliling Lingkaran</b><br>";
lingkaran2($ja);

?>
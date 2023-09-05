<?php
function pembagianBulat($dividend, $divisor)
{
    if ($divisor == 0) {
        return "Tidak dapat melakukan pembagian dengan nol.";
    }

    $quotient = 0;

    while ($dividend >= $divisor) {
        $dividend -= $divisor;
        $quotient++;
    }

    return $quotient;
}


$hasil1 = pembagianBulat(7, 2);
echo "7 : 2 menghasilkan output  " . $hasil1 . "<br>";

$hasil2 = pembagianBulat(8, 4);
echo "8 : 4 menghasilkan output  " . $hasil2;

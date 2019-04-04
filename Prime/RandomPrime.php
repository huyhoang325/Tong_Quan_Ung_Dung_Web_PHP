<?php
function isPrimeNumber($n)
{
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo("15 số nguyên tố đầu tiên là: <br>");
$numbers = 15;
$dem = 0;
for ($i = 0; $dem < $numbers; $i++) {
    if (isPrimeNumber($i)) {
        echo($i . " ");
        $dem++;
        }
    }
?>
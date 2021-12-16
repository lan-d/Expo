
<h1>Ambito de variables <h1>
<?php
$a = 1;
$b = 2;
$c;

function Suma()
{
    global $a, $b, $c;

    $c = $a + $b;
}

Suma();
echo $c;
?>


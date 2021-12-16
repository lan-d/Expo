
<h1>Variables</h1>
<?php



$var = 'Roberto';
$Var = 'Juan';

echo "\nlos nombres son :$var, $Var \n";      // imprime "Roberto, Juan"

echo nl2br("\n\nOtras formas y tener en cuenta 
$4site = 'aun no';      // inválido; comienza con un número
$ _ 4site = 'aun no';     // válido; comienza con un carácter de subrayado
$ täyte = 'mansikka';    // válido; 'ä' es ASCII (Extendido) 228
");


$foo = 'Bob';                // Asigna el valor 'Bob' a $foo
$bar = &$foo;                // Referenciar $foo vía $bar.
$bar = "\nMi nombre es $bar\n";  // Modifica $bar...
echo nl2br($bar);
echo $foo;                   // $foo también se modifica.
?>

<?php
echo '<h1>Tipus de dades</h1>';

$num1 = 10;
$num2 = -5;
var_dump( $num1, $num2 );
echo '<br>';

$float1 = 3.15;
$float2 = -2.5;
var_dump( $float1, $float2 );
echo '<br>';

$bool1 = true;
$bool2 = false;
var_dump( $bool1, $bool2 );
echo '<br>';

$nom    = "Ramon";
$cognom = "Pujol";
var_dump( $nom, $cognom );
echo '<br>';

$colors = array( 'vermell', 'blau', 'verd' );
var_dump( $colors );
$noms = array( 'nom1' => 'Maria', 'nom2' => 'Mercè', 'nom3' => 'Glòria' );
var_dump( $noms );

echo '<h1>Operadors</h1>';

$num3 = 20;
$num4 = 25;

echo 'Suma: ' . $num3 + $num4;
echo '<br>';
echo 'Resta: ' . $num3 - $num4;
echo '<br>';
echo 'Multiplicació: ' . $num3 * $num4;
echo '<br>';
echo 'Divisió: ' . $num3 / $num4;
echo '<br>';
echo 'Residu: ' . $num3 % $num4;
echo '<br>';
echo 'Potència: ' . $num3 ** $num4;
echo '<br>';

echo '<h1>Comparadors</h1>';

echo 'Major que: ' . (int)( $num3 > $num4 );
echo '<br>';
echo 'Menor que: ' . (int)( $num3 < $num4 );
echo '<br>';
echo 'Major o igual que: ' . (int)( $num3 >= $num4 );
echo '<br>';
echo 'Menor o igual que: ' . (int)( $num3 <= $num4 );
echo '<br>';
echo 'Diferent: ' . (int)( $num3 != $num4 );
echo '<br>';
echo 'Diferent exacte: ' . (int)( $num3 !== $num4 );
echo '<br>';
echo 'Igual: ' . (int)( $num3 == $num4 );
echo '<br>';
echo 'Igual exacte: ' . (int)( $num3 === $num4 );
echo '<br>';

echo '<h1>Lògics</h1>';

echo 'OR: ' . (int)( $num3 > $num4 || $num3 < $num4 );
echo '<br>';
echo 'AND: ' . (int)( $num3 > $num4 && $num3 < $num4 );
echo '<br>';
echo 'NOT: ' . (int)( ! ( $num3 > $num4 ) );
echo '<br>';
echo 'NOT: ' . (int)( ! ( $num3 < $num4 ) );
echo '<br>';

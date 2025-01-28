<?php
echo '<h2>Tipus de dades</h2>';

echo '<h2>Enters</h2>';
$num1 = 10;
$num2 = -5;
var_dump( $num1, $num2 );
echo '<br>';

echo '<h2>Flots</h2>';
$float1 = 3.15;
$float2 = -2.5;
var_dump( $float1, $float2 );
echo '<br>';

echo '<h2>Booleans</h2>';
$bool1 = true;
$bool2 = false;
var_dump( $bool1, $bool2 );
echo '<br>';

echo '<h2>Strings</h2>';
$nom    = "Ramon";
$cognom = "Pujol";
var_dump( $nom, $cognom );
echo '<br>';

echo '<h2>Arrays</h2>';
$colors = ['vermell', 'blau', 'verd'];
var_dump( $colors );
$noms = array( 'nom1' => 'Maria', 'nom2' => 'Mercè', 'nom3' => 'Glòria' );
var_dump( $noms );

echo '<h2>Operadors</h2>';

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

echo '<h2>Comparadors</h2>';

echo 'Major que: ' . (int) ( $num3 > $num4 );
echo '<br>';
echo 'Menor que: ' . (int) ( $num3 < $num4 );
echo '<br>';
echo 'Major o igual que: ' . (int) ( $num3 >= $num4 );
echo '<br>';
echo 'Menor o igual que: ' . (int) ( $num3 <= $num4 );
echo '<br>';
echo 'Diferent: ' . (int) ( $num3 != $num4 );
echo '<br>';
echo 'Diferent exacte: ' . (int) ( $num3 !== $num4 );
echo '<br>';
echo 'Igual: ' . (int) ( $num3 == $num4 );
echo '<br>';
echo 'Igual exacte: ' . (int) ( $num3 === $num4 );
echo '<br>';

echo '<h2>Lògics</h2>';

echo 'OR: ' . (int) ( $num3 > $num4 || $num3 < $num4 );
echo '<br>';
echo 'AND: ' . (int) ( $num3 > $num4 && $num3 < $num4 );
echo '<br>';
echo 'NOT: ' . (int) ( !( $num3 > $num4 ) );
echo '<br>';
echo 'NOT: ' . (int) ( !( $num3 < $num4 ) );
echo '<br>';

echo '<h2>Variables i constants</h2>';

$nombre_pomes = 10;
echo 'La variable $nombre_pomes té una valor de ' . $nombre_pomes;
echo '<br>';

$num = 58;
echo 'La variable $num val ' . $num;
echo '<br>';

echo '<h2>Constants</h2>';

define( 'NOM', 'Ramon' );
echo 'La constant NOM, s\'escriu en majúsules, es defineix amb define ( \'NOM\', \'Ramon\' ) i val ' . NOM . '. <br>';
const NOM2 = 'Ramon';
echo 'O sinó es pot definir directament com const NOM2 = \'Ramon\' i val ' . NOM . '. <br>';
echo '<br>';
define( 'PI', 3.14 );
echo 'La constant PI, s\'escriu en majúsules, es defineix amb define ( \'PI\', 3.14 )\' i val ' . PI . '.<br>';
const PI2 = 3.14;
echo 'O sinó es pot definir directament com const PI2 = 3.14 i val ' . PI . '.<br>';

echo '<h2>Arrays</h2>';

$llenguatges = ['PHP', 'HTML', 'CSS', 'JS'];
echo 'Llenguatges: ' . $llenguatges[0] . ', ' . $llenguatges[1] . ', ' . $llenguatges[2] . ', ' . $llenguatges[3] . '.';
echo '<br>';
echo 'Es pot passar array a cadena amb implode() ';
echo 'Llenguatges: ' . implode( ', ', $llenguatges ) . '.';
echo '<br>';
echo 'Per veure index (en array simple) i elements associats, podem fer servir var_dump()';
echo '<br>';
var_dump( $llenguatges );

echo '<br><br>';

$flors = array(
    'florVermella' => 'rosa',
    'florBlanca'   => 'margarida',
    'florGroga'    => 'girasol',
    'florVioleta'  => 'violeta',
);
echo 'Flors: ' . $flors['florVermella'] . ', ' . $flors['florBlanca'] . ', ' . $flors['florGroga'] . ', ' . $flors['florVioleta'] . '.';
echo '<br>';
echo 'Es pot passar array a cadena amb implode() ';
echo 'Flors: ' . implode( ', ', array_values( $flors ) ) . '.';

echo '<br><br>';

echo 'Per comptar els elements d\'un array, fem servir count()';
echo '<br>';
echo 'Elemenst a l\'array Llenguatges: ' . count( $llenguatges );
echo '<br>';
echo 'Elements a l\'array Flors: ' . count( $flors );

var_dump( $flors );

echo '<br><br>';

echo '<br>Per veure un element de l\'array podem fer servir echo cridant index o valor associat';
echo '<br>';
echo '$llenguatges[2] --> ' . $llenguatges[2] . '<br>';
echo '$flors[\'florVermella\'] --> ' . $flors['florVermella'];

echo '<br><br>';

echo 'Per canviar un valor d\'un array podem fer servir índex conegut o valor associat conegut';
echo '<br>';
$llenguatges[2] = 'C#';
echo '$llenguatges[2] --> ' . $llenguatges[2] . '<br>';
$flors['florVermella'] = 'tulipa';
echo '$flors[\'florVermella\'] --> ' . $flors['florVermella'];

echo '<br><br>';

echo 'Per afegir un element al final d\'un array podem fer servir array_push(). Afegim l\'element \'C++\' al final.';
echo '<br>';
array_push( $llenguatges, 'C++' );
var_dump( $llenguatges );

echo '<br><br>';

echo 'També podem assignar un valor sense especificar l\'índex amb $nomArray[] = valor';
$llenguatges[] = 'Java';
var_dump( $llenguatges );

echo '<br><br>';

echo 'Per afegir un element al principi d\'un array podem fer servir array_unshift(). Afegim l\'element \'C\' al principi.';
echo '<br>';
array_unshift( $llenguatges, 'C' );
var_dump( $llenguatges );

echo '<br><br>';

echo 'Per eliminar l\'ultim element d\'un array podem fer servir array_pop(). Eliminació de l\'element \'Java\' al final.';
echo '<br>';
array_pop( $llenguatges );
var_dump( $llenguatges );

echo '<br><br>';

echo 'Per eliminar el primer element d\'un array podem fer servir array_shift(), eliminacio de l\'element \'C\' al principi.';
echo '<br>';
array_shift( $llenguatges );
var_dump( $llenguatges );

echo '<br><br>';

echo 'Per eliminar un element d\'una posició coneguda de l\'array podem fer servir unset(), eliminacio de l\'element \'C#\' a index 2.';
echo '<br>';
unset( $llenguatges[2] );
var_dump( $llenguatges );

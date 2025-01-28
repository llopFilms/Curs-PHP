<?php

echo '<h1>Exercicis</h1>';
echo '<h2>Exercici 1</h2>';

$nom       = 'Ramon';
$edat      = 25;
$professio = 'Desenvolupador';

echo 'El meu nom és ' . $nom . ' i tinc ' . $edat . ' anys. La meva feina és ' . $professio . '.' . '<br>';

echo '<h2>Exercici 2</h2>';

$preu      = 320;
$iva       = 21;
$preuFinal = $preu + ( $preu * $iva / 100 );

echo 'El preu sense IVA es de ' . $preu . '€ .' . '<br>';
echo 'El preu amb IVA es de ' . $preuFinal . '€.' . '<br>';

echo '<h2>Exercici 3</h2>';

$nom2        = 'Ramon';
$edat2       = 35;
$edatConduir = 18;

echo 'El meu nom es ' . $nom2 . ' i tinc ' . $edat2 . ' anys.' . '<br>';
echo 'Per tant, si la meva edat és major o igual que ' . $edatConduir . ' anys, puc conduir.' . '<br>';
echo 'És la meva edat menor que ' . $edatConduir . ' anys? ' . (int) ( $edat2 < $edatConduir ) . ' Si és 0, puc conduir.' . '<br>';
echo( 'És la meva edat igual que ' . $edatConduir . ' anys? ' . (int) ( $edat2 == $edatConduir ) . ' Si es 0, no sabem si tinc més o menys de ' . $edatConduir . ' anys. Però segur que no tinc ' . $edatConduir . ' anys.' . '<br>' );

echo '<h2>Exercici 4</h2>';

echo 'És la meva edat major de ' . $edatConduir . ' anys? ' . !(int) ( $edat2 < $edatConduir ) . ' Si és 1, puc conduir.' . '<br>';

echo '<h2>Exercici 5</h2>';

$nomEstudiant  = 'Pere';
$edatEstudiant = 17;
define( 'DATA_DE_NAIXEMENT', 2008 );

echo 'El meu nom es ' . $nomEstudiant . ' i tinc ' . $edatEstudiant . ' anys. Vaig néixer el ' . DATA_DE_NAIXEMENT . '.' . '<br>';

echo '<h2>Exercici 6</h2>';

$marquesDeCotxe = ['Opel', 'Seat', 'Ebro', 'Iveco'];
echo 'Les marques de cotxe que tenim son: ' . implode( ', ', $marquesDeCotxe ) . '.';
echo '<br>';
echo 'Mostrem per pantalla la posició 2: ' . $marquesDeCotxe[2] . '.';
echo '<br>';
echo 'Canviem el valor de la posició 2 a "Ford".';
$marquesDeCotxe[2] = 'Ford';
echo '<br>';
echo 'Així queda l\'array: ' . implode( ', ', $marquesDeCotxe ) . '.';
echo '<br>';
echo "Mida de l'array de cotxes: " . count( $marquesDeCotxe ) . '.';
echo '<br>';
echo 'Elimina els primer valor de l\'array amb unset()';
unset( $marquesDeCotxe[0] );
echo '<br>';
echo 'Així queda l\'array: ' . implode( ', ', $marquesDeCotxe ) . '.';
echo '<br>';
echo 'I així queden els elements: ';
var_dump( $marquesDeCotxe );
echo '<br>';
echo 'Afegim \'Fiat\' al final sense especificar la posició amb nomDelArray[] = valor';
$marquesDeCotxe[] = 'Fiat';
echo '<br>';
echo 'Així queda l\'array: ' . implode( ', ', $marquesDeCotxe ) . '.';
echo '<br>';
echo 'I així queden els elements: ';
var_dump( $marquesDeCotxe );

echo '<h2>Exercici 7</h2>';

$edat              = 25;
const MAJORIA_EDAT = 18;

if ( $edat >= MAJORIA_EDAT ) {
    echo 'Major de ' . MAJORIA_EDAT . ' anys.';
} else {
    echo 'Menor de ' . MAJORIA_EDAT . ' anys.';
}

echo '<h2>Exercici 8</h2>';

$taula = 7;
echo 'Farem la taula del ' . $taula . '.';
echo '<br>';
for ( $i = 1; $i <= 10; $i++ ) {
    echo $taula . ' * ' . $i . ' = ' . $taula * $i . '<br>';
}

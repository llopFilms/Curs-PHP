<?php
echo '<h1>Estructures de control</h1>';
echo '<h2>Esructures condicionals</h2>';

echo '<h2>If else</h2>';
$edat = 22;

if ( $edat >= 18 ) {
    echo 'Puc conduir';
} else {
    echo 'No puc conduir';
}

echo '<h2>if, else if, else</h2>';
$nota = 5;

if ( $nota < 5 ) {
    echo 'Suspès';
} else

if ( $nota >= 5 && $nota < 7 ) {
    echo 'Aprovat correcte';
} else {
    echo 'Aprovat alt';
}

echo '<h2>if, else i operadors lògics AND</h2>';
$pagat  = true;
$enviat = true;

if ( $pagat && $enviat ) {
    echo 'Pagat i enviat';
} else {
    echo 'Falta algun pas abans de poder enviar';
}

echo '<h2>if, else i operadors lògics OR</h2>';

$metodeTargeta = true;
$metodeEfectiu = false;

if ( $metodeTargeta || $metodeEfectiu ) {
    echo 'Pagat';
} else {
    echo 'Mètode de pagament incorrecte';
}

echo '<h2>Esructures iteratives</h2>';

echo '<h2>For</h2>';
$taula = 6;
echo '<h3>Taula del ' . $taula . '</h3>';

for ( $i = 0; $i < 10; $i++ ) {
    $resultat = $taula * $i;
    echo $taula . ' * ' . $i . ' = ' . $resultat . '<br>';
}

echo '<h2>While</h2>';

while ( $nombre != 100 ) {
// Genera un nombre aleatori entre 1 i 10
    $nombre = rand( 1, 100 );
    echo $nombre . ' ';
}

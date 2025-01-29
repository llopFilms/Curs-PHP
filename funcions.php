<?php
echo '<h1>Funcions</h1>';
echo '<h2>Funció i crida</h2>';
function cridarLloro() {
    echo 'Sóc un lloro';
}

cridarLloro();

echo '<br><br>';
echo '<h2>Funció amb paràmetres</h2>';
function notaMitjana( $nota1, $nota2, $nota3 ) {
    $calcul = ( $nota1 + $nota2 + $nota3 ) / 3;
    echo 'La nota mitjana es ' . $calcul . '.';
}

$examen1 = 8;
$examen2 = 7;
$examen3 = 6;
notaMitjana( $examen1, $examen2, $examen3 );
echo '<br>';
notaMitjana( 8, 7, 6 );

echo '<br><br>';
echo '<h2>Funció amb paràmetres i return</h2>';

function lletraDNI( $numDNI ) {
    $lletresDNI = ["T", "R", "W", "A", "G", "M",
    "Y", "F", "P", "D", "X", "B", "N", "J", "Z",
    "S", "Q", "V", "H", "L", "C", "K", "E"];
    $lletra = $numDNI % 23;
    return $lletresDNI[$lletra];
}

$numDNI = 43697671;
$resposta = lletraDNI( $numDNI );
echo 'La llatra corresponent a el DNI ' . $numDNI . ' es ' . $resposta;

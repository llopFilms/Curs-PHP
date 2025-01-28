<?php

echo '<h1>Exercicis</h1>';
echo '<p>Exercici 1</p>';

$nom = 'Ramon';
$edat = 25;
$professio = 'Desenvolupador';

echo 'El meu nom és ' . $nom . ' i tinc ' . $edat . ' anys. La meva feina és ' . $professio . '.' . '<br>';

echo '<p>Exercici 2</p>';

$preu = 320;
$iva = 21;
$preuFinal = $preu + ($preu * $iva / 100);

echo 'El preu sense IVA es de ' . $preu . '€ .' . '<br>';
echo 'El preu amb IVA es de ' . $preuFinal . '€.' . '<br>';

echo '<p>Exercici 3</p>';

$nom2 = 'Ramon';
$edat2 = 35;
$edatConduir = 18;

echo 'El meu nom es ' . $nom2 . ' i tinc ' . $edat2 . ' anys.' . '<br>';
echo 'Per tant, si la meva edat és major o igual que ' . $edatConduir . ' anys, puc conduir.' . '<br>';
echo 'És la meva edat menor que ' . $edatConduir . ' anys? ' . (int)($edat2 < $edatConduir) . ' Si és 0, puc conduir.' . '<br>';
echo ('És la meva edat igual que ' . $edatConduir . ' anys? ' . (int)($edat2 == $edatConduir) . ' Si es 0, no sabem si tinc més o menys de ' . $edatConduir . ' anys. Però segur que no tinc ' . $edatConduir . ' anys.' . '<br>');

echo '<p>Exercici 4</p>';

echo 'És la meva edat major de ' . $edatConduir . ' anys? ' . !(int)($edat2 < $edatConduir) . ' Si és 1, puc conduir.' . '<br>';


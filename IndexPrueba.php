<?php
require_once 'PersonaPrueba.php';

$Compra1 = new personas;
$res=$Compra1->calcularIMC('Payo',110, 1.83);
echo($res);


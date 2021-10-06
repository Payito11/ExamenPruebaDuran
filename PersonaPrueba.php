<?php

class personas{
    public $nombre;
    public $altura;
    public $peso;
  
    public function calcularIMC( $nombre, $peso, $altura) 
{
    $this->nombre=$nombre;
    $this->peso = $peso;
    $this->altura = $altura;
    $IMC= $peso/$altura**2;

    if ($IMC < 18.5)
    {
        return "El usuario ". $nombre. " se encunetra abajo de peso. <br> Su IMC es de {$IMC}.";
    }
    if ($IMC >= 18.5 && $IMC <= 24.9) 
    {
        return "El usuario ". $nombre. " se encuentra de peso Normal. <br> Su IMC es de {$IMC}.";
    }
    if ($IMC >= 25 && $IMC <=29.9)
    {
        return "El usuario ". $nombre. " se encuentra con Sobrepeso. <br> Su IMC es de {$IMC}";
    }
    if ($IMC >= 30)
    {
    return "El usuario ". $nombre. " se encuentra con Obesidad. <br>Su IMC es de {$IMC}";
}
// echo 'El usuario de nombre '. $this->nombre. ' de peso '. $this->peso. ' y de altura '. 
//         $this->altura. ' tiene un IMC de '. $this->$IMC;
// }
}
}
//IMS=PESO(KG)/ALTURA AL CUADRADO
// • Si su IMC es inferior a 18.5, está dentro de los valores correspondientes a “delgadez o bajo
// peso".
// • Si su IMC es entre 18.5 y 24.9, está dentro de los valores "normales" o de peso saludable.
// • Si su IMC es entre 25.0 y 29.9, está dentro de los valores correspondientes a "sobrepeso".
// • Si su IMC es 30.0 o superior, está dentro de los valores de "obesidad".
// Para calcular el IMC se necesita conocer el peso en kilogramos y la estatura en metros. Se aplica
// una sencilla fórmula matemática que consiste en dividir el peso entre la estatura al cuadrado:

<?php

require_once '../models/Mascotas.php';

$mascotas = new Mascotas();

$parametros = [
  "idpropietario" => 1,
  "tipo"          => "Gato",
  "nombre"        => "Michi",
  "color"         => "Blanco",
  "genero"        => "Macho",
  "idmascota"     => 1
];

$num = $mascotas->update($parametros);

var_dump($num);
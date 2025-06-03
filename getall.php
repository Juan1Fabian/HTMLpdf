<?php

require_once '../models/Mascotas.php';
$mascotas = new Mascotas();
$mascotas = $mascotas->getAll();

foreach ($mascotas as $mascota) {
    echo "ID: " . $mascota['idmascota'] . "<br>";
    echo "Tipo: " . $mascota['tipo'] . "<br>";
    echo "Nombre: " . $mascota['nombre'] . "<br>";
    echo "Color: " . $mascota['color'] . "<br>";
    echo "Género: " . $mascota['genero'] . "<br>";
    echo "Propietario: " . $mascota['propietario'] . "<br><hr>";
}
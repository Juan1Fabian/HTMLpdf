<?php

require_once '../entities/Mascota.entidad.php';
require_once '../models/Mascotas.php';

//Enntidad = CONTENERDOR  DATOS
$entidad = new MascotaEntidad();
$entidad->__SET('idpropietario', 1);
$entidad->__SET(         'tipo', 'Perro');
$entidad->__SET(       'nombre', 'Firulais');
$entidad->__SET(        'color', 'Marron');
$entidad->__SET(       'genero', 'Macho');

//Modelo = accion/logica backend
$mascota = new Mascotas();
$idgenerado = $mascota->create($entidad);
var_dump($idgenerado);
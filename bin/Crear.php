#!/usr/bin/env php
<?php
/**
 * Plataforma de Conocimiento - Crear
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package PlataformaDeConocimiento
 */

// Soy
$soy = '[Crear]';

// Valores de salida
$EXITO=0;
$E_FATAL=99;

// Cambiarse al directorio por debajo de donde se encuentra este programa
chdir(realpath(dirname(__FILE__))."/..");

// Cargar funciones, éste conteniene el autocargador de clases
require_once('lib/Base/Funciones.php');

// Mensaje de inicio
echo "$soy Inicia\n";

// Imprimir
$creador = new \Base\Creador();
try {
    $creador->imprimir();
} catch (\Exception $e) {
    echo $e->getMessage()."\n";
    exit($E_FATAL);
}

// Mensaje de término
echo "$soy Terminó\n";
exit($EXITO);

?>

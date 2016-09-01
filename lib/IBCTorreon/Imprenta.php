<?php
/**
 * TrcIMPLAN Índice Básico de Colonias
 *
 * Copyright (C) 2016 Guillermo Valdes Lozano
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
 * @package TrcIMPLAN
 */

namespace IBCTorreon;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio = 'IBCTorreon';
        // Los siguientes parámetros dan datos para el índice/galería que será creado
        $this->titulo                   = 'IBC Torreón';
        $this->descripcion              = 'Índices Básicos de Colonias en IBC Torreón.';
        $this->claves                   = 'IMPLAN, Torreon, Desagregacion';
        $this->encabezado_color         = '#646464';
        // Etiqueta de Navegación a poner activa
        $this->nombre_menu              = 'IBC > IBC Torreón';
        // Ruta a la clase para hacer la página con el índice
        $this->indices_paginas          = '\\Base\\PaginasListadoAlfabetico';
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio               = 'ibc-torreon';
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>

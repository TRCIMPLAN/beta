<?php
/*
 * TrcIMPLAN Sitio Web - Términos Imprenta
 *
 * Copyright (C) 2015 IMPLAN Torreón
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
 */

// Namespace
namespace Terminos;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio = 'Terminos';
        // Los siguientes parámetros dan datos para el índice/galería que será creado
        $this->titulo                   = 'Términos';
        $this->descripcion              = 'Términos de Uso de la Información y del Sitio Web; además de el Aviso de Privacidad.';
        $this->claves                   = 'IMPLAN, Torreon, Terminos, Uso, Aviso, Privacidad';
        $this->encabezado_color         = '#C23700';
        // Etiqueta de Navegación a poner activa
        $this->nombre_menu              = 'Términos de Uso';
        // La ruta al archivo con el índice/galería que será creado
        $this->directorio               = 'terminos';
        $this->archivo_ruta             = 'terminos/index.html';
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>

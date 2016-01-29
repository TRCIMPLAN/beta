<?php
/*
 * TrcIMPLAN Sitio Web - PreguntasFrecuentes Imprenta
 *
 * Copyright (C) 2016 IMPLAN Torreón
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
 * @package TrcIMPLANSitioWeb
 */

namespace PreguntasFrecuentes;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene las clases con las publicaciones
        $this->publicaciones_directorio = 'PreguntasFrecuentes';
        // Los siguientes parámetros dan datos para el concentrador y las páginas que no los tienen
        $this->titulo                   = 'Preguntas Frecuentes';
        $this->descripcion              = 'Las preguntas y respuestas más frecuentes del IMPLAN Torreón.';
        $this->claves                   = 'IMPLAN, Torreon, Contacto, Telefono, Direccion, Ubicacion, Oficinas';
        $this->encabezado_color         = '#795100';
        // Opción de Navegación a poner activa
        $this->nombre_menu              = 'Preguntas Frecuentes';
        // El concentrador es el nombre de la clase que concentrará a las publicaciones para hacer el index.html
        $this->concentrador             = 'Detallados'; // Puede ser Detallados, Galeria o Tarjetas
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio               = 'preguntas-frecuentes';
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>

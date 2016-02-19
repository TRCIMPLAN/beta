<?php
/*
 * TrcIMPLAN Sitio Web - SMICategorias Imprenta
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

namespace SMICategorias;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene las clases con las publicaciones
        $this->publicaciones_directorio = 'SMICategorias';
        // Los siguientes parámetros dan datos para el concentrador y las páginas que no los tienen
        $this->titulo                   = 'Indicadores por Categoría';
        $this->descripcion              = 'Sistema Metropolitano de Indicadores, Listado de Categorías';
        $this->claves                   = 'IMPLAN, Torreon, SMI, Indicadores, Metropolitanos';
        $this->encabezado_color         = '#CA198A';
        // Opción de Navegación a poner activa
        $this->nombre_menu              = 'Indicadores > Indicadores por Categoría';
        // Ruta a la clase para hacer el index.html
        $this->concentrador             = '\\Base\\PaginasGalerias'; // Puede ser \Base\PaginasDetallados, \Base\PaginasGalerias, \Base\PaginasListado o \Base\PaginasTarjetas
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio               = 'indicadores-categorias';
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>

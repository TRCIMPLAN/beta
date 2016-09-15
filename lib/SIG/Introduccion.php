<?php
/*
 * TrcIMPLAN Sitio Web - SIG Introducción
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

namespace SIG;

/**
 * Clase Introduccion
 */
class Introduccion extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Introducción al Sistema de Información Geográfica';
        $this->autor                      = 'Dirección de Planeación Urbana';
        $this->fecha                      = '2014-08-01T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'introduccion';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion                = 'Introducción al Sistema de Información Geográfica del IMPLAN Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Informacion, Geografica, SIG, GIS';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Información Geográfica > Introducción al SIG';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/SIG/Introduccion.md';
        // Banderas que pueden tener un valor por defecto en \Configuracion\PublicacionConfig
        $this->poner_imagen_en_contenido  = false;
        $this->para_compartir             = false;
    } // constructor

} // Clase Introduccion

?>

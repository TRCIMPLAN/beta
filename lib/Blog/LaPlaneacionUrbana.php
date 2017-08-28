<?php
/**
 * TrcIMPLAN Sitio Web - La Planeación Urbana
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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

namespace Blog;

/**
 * Clase LaPlaneacionUrbana
 */
class LaPlaneacionUrbana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Planeación Urbana';
        $this->autor                      = 'Arq. Teresita Benítez Saludado';
        $this->fecha                      = '2015-07-21T23:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-planeacion-urbana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Definición de lo que es la Planeación Urbana y los fines de un Plan de Desarrollo Urbano.';
        $this->claves                     = 'IMPLAN, Torreon, Planeacion, Urbana';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaPlaneacionUrbana.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array();
    } // constructor

} // Clase LaPlaneacionUrbana

?>

<?php
/**
 * TrcIMPLAN Sitio Web - Competitividad y Planeación Metropolitana
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
 * Clase CompetitividadPlaneacionMetropolitana
 */
class CompetitividadPlaneacionMetropolitana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Competitividad y Planeación Metropolitana';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2014-09-18T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'competitividad-planeacion-metropolitana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Mexicano para la Competitividad dio a conocer el Índice de Competitividad Urbana 2014; en él muestra que la Zona Metropolitana de la Laguna (ZML) continúa en un nivel de competitividad media baja.';
        $this->claves                     = 'IMPLAN, Torreon, Competitividad, La Laguna';
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html     = 'lib/Blog/CompetitividadPlaneacionMetropolitana.html';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Competitividad', 'Cultura', 'Gobierno', 'Recursos Naturales');
        $this->fuentes                    = array('IMCO');
        $this->regiones                   = array('La Laguna');
    } // constructor

} // Clase CompetitividadPlaneacionMetropolitana

?>

<?php
/**
 * TrcIMPLAN Sitio Web - Competencias en Lenguaje y Matemáticas en los Estudiantes de la Comarca, parte 1
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
 * Clase CompetenciasEnLenguajeYMatematicasEnLosEstudiantesDeLaComarcaParte1
 */
class CompetenciasEnLenguajeYMatematicasEnLosEstudiantesDeLaComarcaParte1 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Competencias en Lenguaje y Matemáticas en los Estudiantes de la Comarca (parte 1)';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2016-01-12T10:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'competencias-en-lenguaje-y-matematicas-en-los-estudiantes-de-la-comarca-parte-1';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Contextualización de la prueba PLANEA, cuestiones metodológicas y la forma de organizar la información, así como los resultados generales de primaria con la intención de ir adentrándonos en los números.';
        $this->claves                     = 'IMPLAN, Torreon, PLANEA, Competencias, Lenguaje, Matematicas, Estudiantes';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CompetenciasEnLenguajeYMatematicasEnLosEstudiantesDeLaComarcaParte1.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array('Instituto Nacional para la Evaluación de la Educación (INEE)', 'SEP');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase CompetenciasEnLenguajeYMatematicasEnLosEstudiantesDeLaComarcaParte1

?>

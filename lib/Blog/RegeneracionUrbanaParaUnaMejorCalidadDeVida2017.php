<?php
/**
 * TrcIMPLAN Sitio Web - Regeneración urbana para una mejor calidad de vida
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
 * Clase RegeneracionUrbanaParaUnaMejorCalidadDeVida2017
 */
class RegeneracionUrbanaParaUnaMejorCalidadDeVida2017 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Regeneración urbana para una mejor calidad de vida';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2017-01-16T12:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'regeneracion-urbana-para-una-mejor-calidad-de-vida-2017';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Poco a poco algunas zona olvidadas de Torreón están reviviendo por el fenómeno de regeneración urbana, que implica la rehabilitación de algún espacio que se encontraba en condiciones deplorables, como es el caso de la Línea Verde al oriente de la ciudad.';
        $this->claves                     = 'IMPLAN, Torreon, Regeneracion, Urbana, Espacios, Publicos, Ciudad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/RegeneracionUrbanaParaUnaMejorCalidadDeVida2017.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase RegeneracionUrbanaParaUnaMejorCalidadDeVida2017

?>

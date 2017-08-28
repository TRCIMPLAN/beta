<?php
/**
 * TrcIMPLAN Sitio Web - SesionOrdinaria20170428
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

namespace SalaPrensa;

/**
 * Clase SesionOrdinaria20170428
 */
class SesionOrdinaria20170428 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN y Medio Ambiente presentan el análisis Calidad del Aire';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2017-04-28T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-04-28-sesion-ordinaria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad de Torreón llevó a cabo el pasado viernes 28 de abril su 4 Sesión de Consejo Directivo, con la presentación del tema Calidad del Aire, en conjunto con la Dirección General de Medio Ambiente de Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Sesion Ordinaria, Medio Ambiente, Calidad del Aire, Contaminacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/SesionOrdinaria20170428.md';
        // Para el Organizador
        $this->categorias                 = array('Recursos Naturales');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase SesionOrdinaria20170428

?>

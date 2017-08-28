<?php
/**
 * TrcIMPLAN Sitio Web - SesionOrdinaria20160122
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
 * Clase SesionOrdinaria20160122
 */
class SesionOrdinaria20160122 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Realiza IMPLAN Sesión Ordinaria del Consejo Directivo del Instituto';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-01-22T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2016-01-22-sesion-ordinaria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad de Torreón llevó a cabo la Primera Sesión Ordinaria de su Consejo Directivo en 2016.';
        $this->claves                     = 'IMPLAN, Torreon, Sesion, Consejo Directivo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/SesionOrdinaria20160122.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase SesionOrdinaria20160122

?>

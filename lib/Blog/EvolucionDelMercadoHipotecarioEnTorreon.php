<?php
/**
 * TrcIMPLAN Sitio Web - Evolución del Mercado Hipotecario en Torreón
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
 * Clase EvolucionDelMercadoHipotecarioEnTorreon
 */
class EvolucionDelMercadoHipotecarioEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Evolución del Mercado Hipotecario en Torreón';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2015-06-24T14:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'evolucion-del-mercado-hipotecario-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La vivienda es una buena parte de la inversión y puede ser el mayor componente de la riqueza. El buen funcionamiento del mercado inmobiliario es clave para la salud de la economía.';
        $this->claves                     = 'IMPLAN, Torreon, Hipotecas, Economía, Inmuebles, Mercado, Cartera, Vencida';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EvolucionDelMercadoHipotecarioEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Mercados');
        $this->fuentes                    = array('Comisión Nacional Bancaria y de Valores (CNBV)');
        $this->regiones                   = array('Torreón', 'La Laguna', 'Nacional');
    } // constructor

} // Clase EvolucionDelMercadoHipotecarioEnTorreon

?>

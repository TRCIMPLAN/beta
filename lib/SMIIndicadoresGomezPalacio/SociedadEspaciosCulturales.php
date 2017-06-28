<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SociedadEspaciosCulturales
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

namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadEspaciosCulturales
 */
class SociedadEspaciosCulturales extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Espacios Culturales en Gómez Palacio';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-espacios-culturales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Espacios culturales físicamente delimitados.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Educación, Cultura';
        // Para el Organizador
        $this->categorias  = array('Educación', 'Cultura');
        $this->fuentes     = array('CONACULTA-IMPLAN');
        $this->regiones    = array('Gómez Palacio');
    } // constructor

    /**
     * Estructura
     *
     * @return array Arreglo asociativo
     */
    public function estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // estructura

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            array('fecha' => '2014-03-31', 'valor' => '10', 'fuente_nombre' => 'CONACULTA-IMPLAN'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2014-03-31', 'valor' => '16', 'fuente_nombre' => 'CONACULTA-IMPLAN'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-03-31', 'valor' => '10', 'fuente_nombre' => 'CONACULTA-IMPLAN'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-03-31', 'valor' => '13', 'fuente_nombre' => 'CONACULTA-IMPLAN'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-03-31', 'valor' => '8', 'fuente_nombre' => 'CONACULTA-IMPLAN'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-03-31', 'valor' => '13', 'fuente_nombre' => 'CONACULTA-IMPLAN'));
    } // otras_regiones

} // Clase SociedadEspaciosCulturales

?>

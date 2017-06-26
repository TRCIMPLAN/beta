<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio EconomiaOcupacionHotelera
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
 * Clase EconomiaOcupacionHotelera
 */
class EconomiaOcupacionHotelera extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Ocupación Hotelera en Gómez Palacio';
        $this->fecha       = '2015-07-14T15:18:53';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-ocupacion-hotelera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el promedio anual de cuartos ocupados como porcentaje del total de cuartos disponibles. Este indicador sólo está disponible para los principales centros turísticos.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Índice de Competitividad Urbana, Competitividad';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Competitividad');
        $this->fuentes     = array('IMCO');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('fecha' => '2008-12-31', 'valor' => '39.8900', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '41.2500', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '43.1500', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '41.6400', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '44.3200', 'fuente_nombre' => 'IMCO', 'notas' => ''));
    } // datos

} // Clase EconomiaOcupacionHotelera

?>

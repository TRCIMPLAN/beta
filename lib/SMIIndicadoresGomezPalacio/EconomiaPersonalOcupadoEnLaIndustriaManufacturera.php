<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio EconomiaPersonalOcupadoEnLaIndustriaManufacturera
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
 * Clase EconomiaPersonalOcupadoEnLaIndustriaManufacturera
 */
class EconomiaPersonalOcupadoEnLaIndustriaManufacturera extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Personal Ocupado en la Industria Manufacturera en Gómez Palacio';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-personal-ocupado-en-la-industria-manufacturera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Personal ocupado en la Industria manufacturera entre el personal ocupado total.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Empleo, Mercados';
        // Para el Organizador
        $this->categorias  = array('Empleo', 'Mercados');
        $this->fuentes     = array('INEGI', 'Elaboración propia con datos obtenidos del INEGI');
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
            array('fecha' => '1998-12-31', 'valor' => '42.5300', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2003-12-31', 'valor' => '42.2500', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2008-12-31', 'valor' => '32.0975', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2013-12-31', 'valor' => '32.3272', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2013-12-31', 'valor' => '25.1459', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2013-12-31', 'valor' => '32.3272', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2013-12-31', 'valor' => '46.1564', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2013-12-31', 'valor' => '37.4666', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2013-12-31', 'valor' => '28.7366', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2013-12-31', 'valor' => '40.7077', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Durango', 'fecha' => '2013-12-31', 'valor' => '27.4596', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Nacional', 'fecha' => '2013-12-31', 'valor' => '23.5138', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'));
    } // otras_regiones

} // Clase EconomiaPersonalOcupadoEnLaIndustriaManufacturera

?>

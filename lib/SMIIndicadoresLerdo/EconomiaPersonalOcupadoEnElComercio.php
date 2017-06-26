<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo EconomiaPersonalOcupadoEnElComercio
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

namespace SMIIndicadoresLerdo;

/**
 * Clase EconomiaPersonalOcupadoEnElComercio
 */
class EconomiaPersonalOcupadoEnElComercio extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Personal Ocupado en el Comercio en Lerdo';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-personal-ocupado-en-el-comercio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Personal ocupado en comercio al por mayor y al por menor entre el personal ocupado total.';
        $this->claves      = 'IMPLAN, Lerdo, Empleo, Mercados';
        // Para el Organizador
        $this->categorias  = array('Empleo', 'Mercados');
        $this->fuentes     = array('INEGI', 'Elaboración propia con datos obtenidos del INEGI');
        $this->regiones    = array('Lerdo');
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
            array('fecha' => '1998-12-31', 'valor' => '15.5100', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2003-12-31', 'valor' => '16.3100', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '31.0701', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '24.1890', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''));
    } // datos

} // Clase EconomiaPersonalOcupadoEnElComercio

?>

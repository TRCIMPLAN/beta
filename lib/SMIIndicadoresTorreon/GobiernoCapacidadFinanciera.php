<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon GobiernoCapacidadFinanciera
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

namespace SMIIndicadoresTorreon;

/**
 * Clase GobiernoCapacidadFinanciera
 */
class GobiernoCapacidadFinanciera extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Capacidad Financiera en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-capacidad-financiera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Ingresos propios entre gastos corrientes. Indicador incluido en el índice de competitividad 2012 del Centro de Investigación y Docencia Económicas (CIDE).';
        $this->claves      = 'IMPLAN, Torreón, Finanzas Públicas';
        // Para el Organizador
        $this->categorias  = array('Finanzas Públicas');
        $this->fuentes     = array('Elaboración propia con datos obtenidos del INEGI');
        $this->regiones    = array('Torreón');
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
            array('fecha' => '2007-12-31', 'valor' => '80.9500', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '77.6100', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '75.4600', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '65.2700', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '56.4500', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '74.1000', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '74.2200', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '74.5739', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '65.2382', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''));
    } // datos

} // Clase GobiernoCapacidadFinanciera

?>

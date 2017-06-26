<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna GobiernoIngresosPorCobroDeServicios
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

namespace SMIIndicadoresLaLaguna;

/**
 * Clase GobiernoIngresosPorCobroDeServicios
 */
class GobiernoIngresosPorCobroDeServicios extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Ingresos por Cobro de Servicios en La Laguna';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-ingresos-por-cobro-de-servicios';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Ingresos recaudados por el municipio por cobro de servicios';
        $this->claves      = 'IMPLAN, La Laguna, Finanzas Públicas';
        // Para el Organizador
        $this->categorias  = array('Finanzas Públicas');
        $this->fuentes     = array('INEGI');
        $this->regiones    = array('La Laguna');
    } // constructor

    /**
     * Estructura
     *
     * @return array Arreglo asociativo
     */
    public function estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'dinero'),
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
            array('fecha' => '2007-12-31', 'valor' => '802586435.00', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '918927218.00', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '1146616790.00', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '875399694.00', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '1117567078.00', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '1400461048.00', 'fuente_nombre' => 'INEGI', 'notas' => ''));
    } // datos

} // Clase GobiernoIngresosPorCobroDeServicios

?>

<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SeguridadMontoReportadoEnRoboDeMercancias
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
 * Clase SeguridadMontoReportadoEnRoboDeMercancias
 */
class SeguridadMontoReportadoEnRoboDeMercancias extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Monto Reportado en Robo de Mercancías en Lerdo';
        $this->fecha       = '2015-07-14T14:22';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-monto-reportado-en-robo-de-mercancias';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Pesos 2012 por cada millón de pesos de PIB. Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el monto reportado en robo de transporte de mercancías.';
        $this->claves      = 'IMPLAN, Lerdo, Índice de Competitividad Urbana, Seguridad';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Seguridad');
        $this->fuentes     = array('IMCO');
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
            array('fecha' => '2008-12-31', 'valor' => '0.07', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '0.71', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '0.58', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '0.77', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '0.03', 'fuente_nombre' => 'IMCO', 'notas' => ''));
    } // datos

} // Clase SeguridadMontoReportadoEnRoboDeMercancias

?>

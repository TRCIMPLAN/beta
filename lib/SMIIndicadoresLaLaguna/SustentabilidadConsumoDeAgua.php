<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SustentabilidadConsumoDeAgua
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
 * Clase SustentabilidadConsumoDeAgua
 */
class SustentabilidadConsumoDeAgua extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Consumo de Agua en La Laguna';
        $this->fecha       = '2015-07-14T10:33:47';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-consumo-de-agua';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide la cantidad promedio de agua potable que consume cada persona al año.';
        $this->claves      = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Recursos Naturales';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Recursos Naturales');
        $this->fuentes     = array('IMCO');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
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
            array('fecha' => '2008-12-31', 'valor' => '115.9000', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '114.6000', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '113.1000', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '111.6000', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '110.2000', 'fuente_nombre' => 'IMCO', 'notas' => ''));
    } // datos

} // Clase SustentabilidadConsumoDeAgua

?>

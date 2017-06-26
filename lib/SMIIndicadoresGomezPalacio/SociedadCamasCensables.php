<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SociedadCamasCensables
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
 * Clase SociedadCamasCensables
 */
class SociedadCamasCensables extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Camas Censables en Gómez Palacio';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-camas-censables';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = '';
        $this->claves      = 'IMPLAN, Gómez Palacio, Salud';
        // Para el Organizador
        $this->categorias  = array('Salud');
        $this->fuentes     = array('SINAIS (SSA)');
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
            array('fecha' => '2001-12-31', 'valor' => '72', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2002-12-31', 'valor' => '72', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2004-12-31', 'valor' => '74', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2005-12-31', 'valor' => '74', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2006-12-31', 'valor' => '72', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2007-12-31', 'valor' => '75', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '64', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '64', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '72', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '72', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '72', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '346', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '346', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''));
    } // datos

} // Clase SociedadCamasCensables

?>

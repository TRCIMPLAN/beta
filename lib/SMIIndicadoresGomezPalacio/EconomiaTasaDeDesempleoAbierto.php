<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio EconomiaTasaDeDesempleoAbierto
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
 * Clase EconomiaTasaDeDesempleoAbierto
 */
class EconomiaTasaDeDesempleoAbierto extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Tasa de Desempleo Abierto en Gómez Palacio';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-tasa-de-desempleo-abierto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Número total de desempleados entre la Población económicamente activa.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('INEGI', 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'IMCO');
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
            array('fecha' => '1990-03-12', 'valor' => '2.9000', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2000-02-14', 'valor' => '0.9800', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2005-03-31', 'valor' => '4.5455', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2005-06-30', 'valor' => '4.7619', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2005-09-30', 'valor' => '2.7778', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2005-12-31', 'valor' => '4.2667', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2006-03-31', 'valor' => '5.3333', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2006-06-30', 'valor' => '4.7619', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2006-09-30', 'valor' => '6.0440', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2006-12-30', 'valor' => '3.8043', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2007-03-31', 'valor' => '4.3103', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2007-06-30', 'valor' => '4.0580', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2007-09-30', 'valor' => '4.2857', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2007-12-31', 'valor' => '3.6932', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2008-03-31', 'valor' => '4.9180', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2008-06-30', 'valor' => '5.4131', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2008-09-30', 'valor' => '4.9351', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '10.5532', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '10.1523', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2009-03-31', 'valor' => '7.3232', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2009-06-30', 'valor' => '8.8235', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2009-09-30', 'valor' => '8.7912', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '12.0518', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '11.5702', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2010-03-31', 'valor' => '8.0940', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2010-06-25', 'valor' => '7.8000', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2010-06-30', 'valor' => '6.0109', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2010-09-30', 'valor' => '8.8319', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '8.0665', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '7.3016', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2011-03-31', 'valor' => '9.4300', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2011-06-30', 'valor' => '7.2100', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2011-09-30', 'valor' => '8.0800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '4.8884', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '4.4000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2012-03-31', 'valor' => '7.3200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2012-06-30', 'valor' => '10.7700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2012-09-30', 'valor' => '6.5500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '10.2316', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '9.3600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2013-03-31', 'valor' => '7.7700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2013-06-30', 'valor' => '6.9900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2013-09-30', 'valor' => '7.5800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '8.5700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2014-03-31', 'valor' => '6.2000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2014-06-30', 'valor' => '5.0200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2014-09-30', 'valor' => '7.0400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '7.5500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2015-03-31', 'valor' => '5.8400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2015-06-30', 'valor' => '5.6751', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2015-08-31', 'valor' => '7.0100', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2015-09-30', 'valor' => '6.3551', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2015-12-31', 'valor' => '5.8601', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2016-03-31', 'valor' => '4.7131', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2016-06-30', 'valor' => '5.3600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2016-09-30', 'valor' => '6.8800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2016-12-31', 'valor' => '4.3700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2017-03-31', 'valor' => '5.9700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''));
    } // datos

} // Clase EconomiaTasaDeDesempleoAbierto

?>

<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaTasaDeDesempleoAbierto
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
        $this->nombre      = 'Tasa de Desempleo Abierto en La Laguna';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-tasa-de-desempleo-abierto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Número total de desempleados entre la Población económicamente activa.';
        $this->claves      = 'IMPLAN, La Laguna, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('INEGI', 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'IMCO');
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
            array('fecha' => '1990-03-12', 'valor' => '2.8100', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2000-02-14', 'valor' => '1.0300', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2005-03-31', 'valor' => '4.9618', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2005-06-30', 'valor' => '3.7779', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2005-09-30', 'valor' => '2.6576', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2005-12-31', 'valor' => '3.1532', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2006-03-31', 'valor' => '4.8006', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2006-06-30', 'valor' => '4.7273', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2006-09-30', 'valor' => '6.1928', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2006-12-30', 'valor' => '4.7101', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2007-03-31', 'valor' => '5.9297', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2007-06-30', 'valor' => '3.6490', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2007-09-30', 'valor' => '4.5558', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2007-12-31', 'valor' => '3.7818', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2008-03-31', 'valor' => '5.3558', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2008-06-30', 'valor' => '4.8084', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2008-09-30', 'valor' => '4.7836', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '5.6911', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '6.1224', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2009-03-31', 'valor' => '7.3877', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2009-06-30', 'valor' => '7.1599', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2009-09-30', 'valor' => '9.1900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '8.0777', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '8.6179', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2010-03-31', 'valor' => '8.0321', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2010-06-25', 'valor' => '7.4300', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2010-06-30', 'valor' => '6.9712', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2010-09-30', 'valor' => '7.8947', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '7.2121', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '7.2250', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2011-03-31', 'valor' => '6.3900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2011-06-30', 'valor' => '6.1300', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2011-09-30', 'valor' => '7.2500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '5.9828', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '5.9100', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2012-03-31', 'valor' => '6.1900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2012-06-30', 'valor' => '6.5500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2012-09-30', 'valor' => '5.7000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '6.0168', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '6.5400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2013-03-31', 'valor' => '6.4100', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2013-06-30', 'valor' => '6.5400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2013-09-30', 'valor' => '6.2400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '5.4900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2014-03-31', 'valor' => '5.9300', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2014-06-30', 'valor' => '4.8400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2014-09-30', 'valor' => '5.7400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '6.9900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2015-03-31', 'valor' => '5.8500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2015-06-30', 'valor' => '5.8700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2015-09-30', 'valor' => '5.2529', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2015-12-31', 'valor' => '5.0883', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2016-03-31', 'valor' => '4.9520', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2016-06-30', 'valor' => '5.6400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2016-09-30', 'valor' => '5.7500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2016-12-31', 'valor' => '4.3900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2017-03-31', 'valor' => '4.8600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''));
    } // datos

} // Clase EconomiaTasaDeDesempleoAbierto

?>

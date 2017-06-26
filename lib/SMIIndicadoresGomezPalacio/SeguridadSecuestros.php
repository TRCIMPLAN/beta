<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SeguridadSecuestros
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
 * Clase SeguridadSecuestros
 */
class SeguridadSecuestros extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Secuestros en Gómez Palacio';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-secuestros';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Cantidad de secuestros en el mes';
        $this->claves      = 'IMPLAN, Gómez Palacio, Delincuencia, Seguridad';
        // Para el Organizador
        $this->categorias  = array('Delincuencia', 'Seguridad');
        $this->fuentes     = array('Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'Programa de Naciones Unidas para el Desarrollo (PNUD)');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
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
            array('fecha' => '2014-02-28', 'valor' => '1', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2014-05-31', 'valor' => '1', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2014-07-31', 'valor' => 'X', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2014-08-31', 'valor' => 'X', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2014-09-30', 'valor' => 'X', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2014-10-31', 'valor' => 'X', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2014-11-30', 'valor' => 'X', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => 'X', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-01-31', 'valor' => 'X', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-02-28', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-03-31', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-04-30', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-05-31', 'valor' => '1', 'fuente_nombre' => 'Programa de Naciones Unidas para el Desarrollo (PNUD)', 'notas' => ''),
            array('fecha' => '2015-06-30', 'valor' => '1', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-07-31', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-08-31', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-09-30', 'valor' => '1', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-10-31', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-11-30', 'valor' => '1', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-12-31', 'valor' => '1', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-01-31', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-02-29', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-03-31', 'valor' => 'X', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-04-30', 'valor' => '1', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-05-31', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-06-30', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-07-31', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-08-31', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-09-30', 'valor' => '1', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-10-31', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-11-30', 'valor' => '1', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-12-31', 'valor' => '3', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2017-01-31', 'valor' => '1', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2017-02-28', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2017-03-31', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2017-04-30', 'valor' => '2', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''));
    } // datos

} // Clase SeguridadSecuestros

?>

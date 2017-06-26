<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadOrganizacionesDeLaSociedadCivil
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
 * Clase SociedadOrganizacionesDeLaSociedadCivil
 */
class SociedadOrganizacionesDeLaSociedadCivil extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Organizaciones de la Sociedad Civil en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-organizaciones-de-la-sociedad-civil';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Dentro del Índice de Competitividad Urbana del IMCO forma parte de subíndice de "Sistema Político Estable y Funcional". Este indicador busca captar la capacidad de la sociedad para organizarse y ejercer presión social sobre las autoridades. Se incluyen iglesias y organizaciones religiosas.';
        $this->claves      = 'IMPLAN, Torreón, Participación Ciudadana, Gobierno, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Participación Ciudadana', 'Gobierno', 'Índice de Competitividad Urbana');
        $this->fuentes     = array('IMCO', 'RFOSC');
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
            array('fecha' => '2008-12-31', 'valor' => '5.9166', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '5.9166', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '5.9166', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '5.9166', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '11.2568', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2014-03-31', 'valor' => '47.9800', 'fuente_nombre' => 'RFOSC', 'notas' => 'Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)'),
            array('fecha' => '2016-11-25', 'valor' => '55.0500', 'fuente_nombre' => 'RFOSC', 'notas' => ''));
    } // datos

} // Clase SociedadOrganizacionesDeLaSociedadCivil

?>

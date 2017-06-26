<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadAdultosMayoresMasculino
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
 * Clase SociedadAdultosMayoresMasculino
 */
class SociedadAdultosMayoresMasculino extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Adultos Mayores Masculino en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-adultos-mayores-masculino';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Población estimada a mediados de año de personas de 65 años y más de sexo masculino';
        $this->claves      = 'IMPLAN, Torreón, Grupos Vulnerables';
        // Para el Organizador
        $this->categorias  = array('Grupos Vulnerables');
        $this->fuentes     = array('CONAPO');
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
            array('fecha' => '2011-06-30', 'valor' => '17498', 'fuente_nombre' => 'CONAPO', 'notas' => ''),
            array('fecha' => '2012-06-30', 'valor' => '18233', 'fuente_nombre' => 'CONAPO', 'notas' => ''),
            array('fecha' => '2013-06-30', 'valor' => '19010', 'fuente_nombre' => 'CONAPO', 'notas' => ''),
            array('fecha' => '2014-06-30', 'valor' => '19829', 'fuente_nombre' => 'CONAPO', 'notas' => ''),
            array('fecha' => '2015-06-30', 'valor' => '20691', 'fuente_nombre' => 'CONAPO', 'notas' => ''),
            array('fecha' => '2016-06-30', 'valor' => '21594', 'fuente_nombre' => 'CONAPO', 'notas' => ''),
            array('fecha' => '2017-06-30', 'valor' => '22537', 'fuente_nombre' => 'CONAPO', 'notas' => ''),
            array('fecha' => '2018-06-30', 'valor' => '23517', 'fuente_nombre' => 'CONAPO', 'notas' => ''),
            array('fecha' => '2019-06-30', 'valor' => '24531', 'fuente_nombre' => 'CONAPO', 'notas' => ''),
            array('fecha' => '2020-06-30', 'valor' => '25576', 'fuente_nombre' => 'CONAPO', 'notas' => ''));
    } // datos

} // Clase SociedadAdultosMayoresMasculino

?>

<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo EconomiaTierraEjidal
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
 * Clase EconomiaTierraEjidal
 */
class EconomiaTierraEjidal extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Tierra Ejidal en Lerdo';
        $this->fecha       = '2015-07-14T14:24:26';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-tierra-ejidal';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide a proporción de superficie de los municipios que conforman la ciudad que está bajo el régimen de propiedad social. Este indicador permite aproximar la certidumbre de los derechos de propiedad de la tierra en una ciudad.';
        $this->claves      = 'IMPLAN, Lerdo, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana');
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
            array('fecha' => '2008-12-31', 'valor' => '70.2100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '70.2100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '70.2100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '70.2100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '70.2100', 'fuente_nombre' => 'IMCO'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '68.2100', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '58.9200', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-12-31', 'valor' => '70.2100', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '59.0000', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2012-12-31', 'valor' => '63.3400', 'fuente_nombre' => 'IMCO'));
    } // otras_regiones

} // Clase EconomiaTierraEjidal

?>

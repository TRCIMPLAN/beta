<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadViviendasDeshabitadas
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
 * Clase SustentabilidadViviendasDeshabitadas
 */
class SustentabilidadViviendasDeshabitadas extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Viviendas Deshabitadas en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-viviendas-deshabitadas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Viviendas deshabitadas con respecto al total de viviendas totales. Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de viviendas deshabitadas como porcentaje del total de las viviendas. Este indicador busca captar los efectos de malas políticas de vivienda, como la lejanía de los centros de empleo y servicios, así como un deterioro en el tejido social que conduzcan a mayor inseguridad y al deterioro del patrimonio más importante de muchas familias.
Fuente: INEGI (Censo de Población y Vivienda).';
        $this->claves      = 'IMPLAN, Torreón, Vivienda, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Vivienda', 'Índice de Competitividad Urbana');
        $this->fuentes     = array('IMCO', 'INEGI');
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
            array('fecha' => '2008-12-31', 'valor' => '22.9700', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '22.9700', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '20.5700', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2010-12-31', 'valor' => '22.9700', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '22.9700', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '22.9700', 'fuente_nombre' => 'IMCO'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '22.9700', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '22.7400', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-12-31', 'valor' => '21.4400', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '15.0100', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2012-12-31', 'valor' => '22.1400', 'fuente_nombre' => 'IMCO'));
    } // otras_regiones

} // Clase SustentabilidadViviendasDeshabitadas

?>

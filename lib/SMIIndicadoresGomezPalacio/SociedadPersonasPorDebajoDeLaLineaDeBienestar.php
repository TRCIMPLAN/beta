<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SociedadPersonasPorDebajoDeLaLineaDeBienestar
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
 * Clase SociedadPersonasPorDebajoDeLaLineaDeBienestar
 */
class SociedadPersonasPorDebajoDeLaLineaDeBienestar extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Personas por Debajo de la Línea de Bienestar en Gómez Palacio';
        $this->fecha       = '2015-07-14T15:41:06';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-personas-por-debajo-de-la-linea-de-bienestar';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la proporción de la PEA ocupada con ingresos menores a la línea de bienestar mínimo que marca CONEVAL. En diciembre 2012, esta línea se ubicó en $2,388 pesos. Incluye tanto la canasta básica alimentaria como la no alimentaria.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Índice de Competitividad Urbana, Bienestar';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Bienestar');
        $this->fuentes     = array('IMCO');
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
            array('fecha' => '2008-12-31', 'valor' => '1.7500', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '1.1600', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '2.8900', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '3.0900', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '4.4900', 'fuente_nombre' => 'IMCO'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '3.3200', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '4.4900', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-12-31', 'valor' => '2.6800', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '6.0700', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2012-12-31', 'valor' => '3.7800', 'fuente_nombre' => 'IMCO'));
    } // otras_regiones

} // Clase SociedadPersonasPorDebajoDeLaLineaDeBienestar

?>

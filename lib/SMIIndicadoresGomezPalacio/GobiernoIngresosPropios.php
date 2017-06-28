<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio GobiernoIngresosPropios
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
 * Clase GobiernoIngresosPropios
 */
class GobiernoIngresosPropios extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Ingresos Propios en Gómez Palacio';
        $this->fecha       = '2015-07-14T10:29:39';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-ingresos-propios';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el total de ingresos propios (impuestos, derechos, productos, aprovechamientos y contribuciones de mejoras) de la ciudad como porcentaje de sus ingresos totales.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Índice de Competitividad Urbana, Finanzas Públicas';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Finanzas Públicas');
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
            array('fecha' => '2008-12-31', 'valor' => '27.7340', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '40.1277', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '28.0019', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '47.1743', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '46.4262', 'fuente_nombre' => 'IMCO'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '29.8231', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '46.4262', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-12-31', 'valor' => '15.0065', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '8.7762', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2012-12-31', 'valor' => '32.6557', 'fuente_nombre' => 'IMCO'));
    } // otras_regiones

} // Clase GobiernoIngresosPropios

?>

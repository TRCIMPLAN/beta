<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaSectoresQueHanPresentadoAltoCrecimiento
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
 * Clase EconomiaSectoresQueHanPresentadoAltoCrecimiento
 */
class EconomiaSectoresQueHanPresentadoAltoCrecimiento extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Sectores que Han Presentado Alto Crecimiento en La Laguna';
        $this->fecha       = '2015-07-14T14:58:54';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-sectores-que-han-presentado-alto-crecimiento';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Economía Estable". Mide el PIB generado por los sectores que han tenido un crecimiento superior al promedio del crecimiento de todos los sectores a nivel nacional. Para 2012 estos sectores son: generación, transmisión y distribución de energía eléctrica; suministro de agua y de gas por ductos al consumidor final; comercio al por mayor; transportes, correos y almacenamiento; información en medios masivos y servicios financieros y de seguros.';
        $this->claves      = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Mercados';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Mercados');
        $this->fuentes     = array('IMCO', 'Elaboración propia con datos obtenidos del INEGI');
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
            array('fecha' => '2008-12-31', 'valor' => '7.1100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2008-12-31', 'valor' => '30.8600', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2009-12-31', 'valor' => '18.7000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '26.7700', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '26.7500', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '27.0400', 'fuente_nombre' => 'IMCO'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '11.6800', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '32.1300', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-12-31', 'valor' => '34.5900', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '29.7700', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2012-12-31', 'valor' => '27.0400', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Nacional', 'fecha' => '2009-01-01', 'valor' => '26.4400', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'));
    } // otras_regiones

} // Clase EconomiaSectoresQueHanPresentadoAltoCrecimiento

?>

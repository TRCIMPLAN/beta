<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo EconomiaSectoresQueHanPresentadoAltoCrecimiento
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
        $this->nombre      = 'Sectores que Han Presentado Alto Crecimiento en Lerdo';
        $this->fecha       = '2015-07-14T14:58:54';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-sectores-que-han-presentado-alto-crecimiento';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Economía Estable". Mide el PIB generado por los sectores que han tenido un crecimiento superior al promedio del crecimiento de todos los sectores a nivel nacional. Para 2012 estos sectores son: generación, transmisión y distribución de energía eléctrica; suministro de agua y de gas por ductos al consumidor final; comercio al por mayor; transportes, correos y almacenamiento; información en medios masivos y servicios financieros y de seguros.';
        $this->claves      = 'IMPLAN, Lerdo, Índice de Competitividad Urbana, Mercados';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Mercados');
        $this->fuentes     = array('IMCO', 'Elaboración propia con datos obtenidos del INEGI');
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
            array('fecha' => '2008-12-31', 'valor' => '4.5100', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '6.9600', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '18.8300', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '34.2000', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '34.2800', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '34.5900', 'fuente_nombre' => 'IMCO', 'notas' => ''));
    } // datos

} // Clase EconomiaSectoresQueHanPresentadoAltoCrecimiento

?>

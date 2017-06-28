<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros EconomiaCreditoALasEmpresas
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

namespace SMIIndicadoresMatamoros;

/**
 * Clase EconomiaCreditoALasEmpresas
 */
class EconomiaCreditoALasEmpresas extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Crédito a las Empresas en Matamoros';
        $this->fecha       = '2015-07-14T14:48:46';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-credito-a-las-empresas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Economía Estable". Mide el monto del crédito que se les otorga a las empresas privadas en cada ciudad, ajustado por el tamaño de la economía local.';
        $this->claves      = 'IMPLAN, Matamoros, Índice de Competitividad Urbana, Mercados';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Mercados');
        $this->fuentes     = array('IMCO');
        $this->regiones    = array('Matamoros');
    } // constructor

    /**
     * Estructura
     *
     * @return array Arreglo asociativo
     */
    public function estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'dinero'),
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
            array('fecha' => '2008-12-31', 'valor' => '39.59', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '420.39', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '561.12', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '528.71', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '495.72', 'fuente_nombre' => 'IMCO'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '580.95', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '1035.56', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-12-31', 'valor' => '1680.72', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '495.72', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2012-12-31', 'valor' => '725.64', 'fuente_nombre' => 'IMCO'));
    } // otras_regiones

} // Clase EconomiaCreditoALasEmpresas

?>

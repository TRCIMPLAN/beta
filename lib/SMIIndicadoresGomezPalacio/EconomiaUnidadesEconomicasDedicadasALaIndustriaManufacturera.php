<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera
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
 * Clase EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera
 */
class EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Unidades Económicas Dedicadas a la Industria Manufacturera en Gómez Palacio';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-unidades-economicas-dedicadas-a-la-industria-manufacturera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Empresas, Mercados';
        // Para el Organizador
        $this->categorias  = array('Empresas', 'Mercados');
        $this->fuentes     = array('INEGI');
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
            array('fecha' => '1998-12-31', 'valor' => '13.6800', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2003-12-31', 'valor' => '10.6200', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '10.4500', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2013-10-31', 'valor' => '8.8400', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '7.9537', 'fuente_nombre' => 'INEGI', 'notas' => ''));
    } // datos

} // Clase EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera

?>

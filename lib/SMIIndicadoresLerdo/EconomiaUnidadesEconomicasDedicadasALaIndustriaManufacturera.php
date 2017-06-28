<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera
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
        $this->nombre      = 'Unidades Económicas Dedicadas a la Industria Manufacturera en Lerdo';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-unidades-economicas-dedicadas-a-la-industria-manufacturera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.';
        $this->claves      = 'IMPLAN, Lerdo, Empresas, Mercados';
        // Para el Organizador
        $this->categorias  = array('Empresas', 'Mercados');
        $this->fuentes     = array('INEGI');
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
            array('fecha' => '1998-12-31', 'valor' => '12.7900', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2003-12-31', 'valor' => '10.8700', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2008-12-31', 'valor' => '9.9000', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2013-10-31', 'valor' => '8.5200', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2014-12-31', 'valor' => '7.5766', 'fuente_nombre' => 'INEGI'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2014-12-31', 'valor' => '7.1935', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-12-31', 'valor' => '7.9537', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-12-31', 'valor' => '7.5766', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-12-31', 'valor' => '7.4123', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-12-31', 'valor' => '7.4282', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Nacional', 'fecha' => '2013-10-31', 'valor' => '10.7100', 'fuente_nombre' => 'INEGI'));
    } // otras_regiones

} // Clase EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera

?>

<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros EconomiaUnidadesEconomicasDedicadasALosServicios
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
 * Clase EconomiaUnidadesEconomicasDedicadasALosServicios
 */
class EconomiaUnidadesEconomicasDedicadasALosServicios extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Unidades Económicas Dedicadas a los Servicios en Matamoros';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-unidades-economicas-dedicadas-a-los-servicios';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Unidades económicas dedicadas a los servicios entre el total de las unidades económicas del municipio/región.';
        $this->claves      = 'IMPLAN, Matamoros, Empresas, Mercados';
        // Para el Organizador
        $this->categorias  = array('Empresas', 'Mercados');
        $this->fuentes     = array('INEGI');
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
            array('fecha' => '1998-12-31', 'valor' => '23.4100', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2003-12-31', 'valor' => '24.9300', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2008-12-31', 'valor' => '30.2200', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2013-10-31', 'valor' => '35.1700', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2014-12-31', 'valor' => '40.9001', 'fuente_nombre' => 'INEGI'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2014-12-31', 'valor' => '49.0168', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-12-31', 'valor' => '46.1335', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-12-31', 'valor' => '43.3638', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-12-31', 'valor' => '40.9001', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-12-31', 'valor' => '47.3005', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Nacional', 'fecha' => '2013-10-31', 'valor' => '38.6600', 'fuente_nombre' => 'INEGI'));
    } // otras_regiones

} // Clase EconomiaUnidadesEconomicasDedicadasALosServicios

?>

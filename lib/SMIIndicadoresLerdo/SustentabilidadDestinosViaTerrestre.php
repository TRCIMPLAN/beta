<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SustentabilidadDestinosViaTerrestre
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
 * Clase SustentabilidadDestinosViaTerrestre
 */
class SustentabilidadDestinosViaTerrestre extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Destinos Vía Terrestre en Lerdo';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-destinos-via-terrestre';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Número total de Estados de la República Mexicana y E.U. a los cuales se puede acceder desde las Centrales de Autobuses de Torreón y Gómez Palacio';
        $this->claves      = 'IMPLAN, Lerdo, Movilidad';
        // Para el Organizador
        $this->categorias  = array('Movilidad');
        $this->fuentes     = array('IMPLAN');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'caracter'),
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
            array('fecha' => '2014-03-31', 'valor' => 'X', 'fuente_nombre' => 'IMPLAN'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2014-03-31', 'valor' => '28', 'fuente_nombre' => 'IMPLAN'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-03-31', 'valor' => '28', 'fuente_nombre' => 'IMPLAN'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-03-31', 'valor' => 'X', 'fuente_nombre' => 'IMPLAN'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-03-31', 'valor' => 'X', 'fuente_nombre' => 'IMPLAN'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-03-31', 'valor' => '28', 'fuente_nombre' => 'IMPLAN'));
    } // otras_regiones

} // Clase SustentabilidadDestinosViaTerrestre

?>

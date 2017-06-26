<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon GobiernoLitrosDeCombustibleGastadosPorHabitante
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
 * Clase GobiernoLitrosDeCombustibleGastadosPorHabitante
 */
class GobiernoLitrosDeCombustibleGastadosPorHabitante extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Litros de Combustible Gastados por Habitante en Torreón';
        $this->fecha       = '2015-07-06T15:09:06';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-litros-de-combustible-gastados-por-habitante';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Determina la relación de litros de combustible gastados por el gobierno municipal respecto de su población total.';
        $this->claves      = 'IMPLAN, Torreón, Sistema de Indicadores de Desempeño (SINDES), Recursos Naturales, Gobierno';
        // Para el Organizador
        $this->categorias  = array('Sistema de Indicadores de Desempeño (SINDES)', 'Recursos Naturales', 'Gobierno');
        $this->fuentes     = array('Ayuntamiento de Torreón');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
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
            array('fecha' => '2014-06-30', 'valor' => '0.8500', 'fuente_nombre' => 'Ayuntamiento de Torreón', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '2.4000', 'fuente_nombre' => 'Ayuntamiento de Torreón', 'notas' => ''));
    } // datos

} // Clase GobiernoLitrosDeCombustibleGastadosPorHabitante

?>

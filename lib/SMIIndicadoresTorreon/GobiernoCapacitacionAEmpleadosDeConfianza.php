<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon GobiernoCapacitacionAEmpleadosDeConfianza
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
 * Clase GobiernoCapacitacionAEmpleadosDeConfianza
 */
class GobiernoCapacitacionAEmpleadosDeConfianza extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Capacitación a Empleados de Confianza en Torreón';
        $this->fecha       = '2015-07-14T17:48:01';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-capacitacion-a-empleados-de-confianza';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Expresa la relación de horas de capacitación promedio brindadas a los empleados municipales cuyo estatus es de confianza. Total de Horas de Capacitación a Empleados de Confianza entre el total de Empleados de Confianza.';
        $this->claves      = 'IMPLAN, Torreón, Sistema de Indicadores de Desempeño (SINDES), Gobierno';
        // Para el Organizador
        $this->categorias  = array('Sistema de Indicadores de Desempeño (SINDES)', 'Gobierno');
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
            array('fecha' => '2014-06-30', 'valor' => '11.6200', 'fuente_nombre' => 'Ayuntamiento de Torreón', 'notas' => ''),
            array('fecha' => '2014-12-30', 'valor' => '3.1500', 'fuente_nombre' => 'Ayuntamiento de Torreón', 'notas' => ''));
    } // datos

} // Clase GobiernoCapacitacionAEmpleadosDeConfianza

?>

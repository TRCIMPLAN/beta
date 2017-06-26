<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SustentabilidadUsoDeTransportePublico
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
 * Clase SustentabilidadUsoDeTransportePublico
 */
class SustentabilidadUsoDeTransportePublico extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Uso de Transporte Público en La Laguna';
        $this->fecha       = '2014-11-10T10:21:34';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-uso-de-transporte-publico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Distribución porcentual del total de viajes cotidianos realizados por modalidad. No se consideran los viajes en taxi.';
        $this->claves      = 'IMPLAN, La Laguna, Movilidad, Vialidad';
        // Para el Organizador
        $this->categorias  = array('Movilidad', 'Vialidad');
        $this->fuentes     = array('Logit');
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
            array('fecha' => '2011-12-31', 'valor' => '30.0000', 'fuente_nombre' => 'Logit', 'notas' => ''));
    } // datos

} // Clase SustentabilidadUsoDeTransportePublico

?>

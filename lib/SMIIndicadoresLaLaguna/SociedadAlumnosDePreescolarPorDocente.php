<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SociedadAlumnosDePreescolarPorDocente
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
 * Clase SociedadAlumnosDePreescolarPorDocente
 */
class SociedadAlumnosDePreescolarPorDocente extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Alumnos de Preescolar por Docente en La Laguna';
        $this->fecha       = '2015-05-21T14:08:17';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-alumnos-de-preescolar-por-docente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Número de alumnos (estudiantes) promedio por docente a nivel de educación preescolar y en un año escolar dado, basado en el número bruto de estudiantes y de docentes. Incluye escuelas públicas y privadas, así como de localidades urbanas y rurales.';
        $this->claves      = 'IMPLAN, La Laguna, Educación';
        // Para el Organizador
        $this->categorias  = array('Educación');
        $this->fuentes     = array('SEP');
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
            array('fecha' => '2014-07-01', 'valor' => '23.9000', 'fuente_nombre' => 'SEP', 'notas' => ''));
    } // datos

} // Clase SociedadAlumnosDePreescolarPorDocente

?>

<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SociedadAlumnosDeSecundariaPorDocente
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
 * Clase SociedadAlumnosDeSecundariaPorDocente
 */
class SociedadAlumnosDeSecundariaPorDocente extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Alumnos de Secundaria por Docente en Matamoros';
        $this->fecha       = '2015-05-21T15:54:26';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-alumnos-de-secundaria-por-docente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Número de alumnos (estudiantes) promedio por docente a nivel de educación secundaria y en un año escolar dado, basado en el número bruto de estudiantes y de docentes. Incluye las escuelas públicas y privadas, así como de localidades urbanas y rurales.';
        $this->claves      = 'IMPLAN, Matamoros, Educación';
        // Para el Organizador
        $this->categorias  = array('Educación');
        $this->fuentes     = array('SEP');
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
            array('fecha' => '2014-07-01', 'valor' => '14.9000', 'fuente_nombre' => 'SEP'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2014-07-01', 'valor' => '12.7000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-07-01', 'valor' => '14.3000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-07-01', 'valor' => '14.7000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-07-01', 'valor' => '14.9000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-07-01', 'valor' => '13.5000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2014-07-01', 'valor' => '14.1000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Durango', 'fecha' => '2014-07-01', 'valor' => '13.1000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Nacional', 'fecha' => '2014-07-01', 'valor' => '16.4000', 'fuente_nombre' => 'SEP'));
    } // otras_regiones

} // Clase SociedadAlumnosDeSecundariaPorDocente

?>

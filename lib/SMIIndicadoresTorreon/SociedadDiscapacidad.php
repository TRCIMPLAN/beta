<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadDiscapacidad
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
 * Clase SociedadDiscapacidad
 */
class SociedadDiscapacidad extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Discapacidad en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-discapacidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de la población total con alguna limitación (motriz, visión, auditivo, habla y/o cognitivas)';
        $this->claves      = 'IMPLAN, Torreón, Grupos Vulnerables';
        // Para el Organizador
        $this->categorias  = array('Grupos Vulnerables');
        $this->fuentes     = array('INEGI. Censos de Población y Vivienda');
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
            array('fecha' => '2010-12-31', 'valor' => '4.5000', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda', 'notas' => 'Personas que tienen dificultad para el desempeño y/o realización de tareas en la vida cotidiana.'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2010-12-31', 'valor' => '4.5000', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda', 'notas' => 'Personas que tienen dificultad para el desempeño y/o realización de tareas en la vida cotidiana.'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2010-12-31', 'valor' => '4.0000', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda', 'notas' => 'Personas que tienen dificultad para el desempeño y/o realización de tareas en la vida cotidiana.'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2010-12-31', 'valor' => '4.0000', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda', 'notas' => 'Personas que tienen dificultad para el desempeño y/o realización de tareas en la vida cotidiana.'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2010-12-31', 'valor' => '4.4000', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda', 'notas' => 'Personas que tienen dificultad para el desempeño y/o realización de tareas en la vida cotidiana.'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2010-12-31', 'valor' => '4.3000', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda', 'notas' => 'Personas que tienen dificultad para el desempeño y/o realización de tareas en la vida cotidiana.'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2010-12-31', 'valor' => '4.4000', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda', 'notas' => 'Personas que tienen dificultad para el desempeño y/o realización de tareas en la vida cotidiana.'),
            array('region_nombre' => 'Durango', 'fecha' => '2010-12-31', 'valor' => '5.2000', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda', 'notas' => 'Personas que tienen dificultad para el desempeño y/o realización de tareas en la vida cotidiana.'),
            array('region_nombre' => 'Nacional', 'fecha' => '2010-12-31', 'valor' => '5.1000', 'fuente_nombre' => 'INEGI'));
    } // otras_regiones

} // Clase SociedadDiscapacidad

?>

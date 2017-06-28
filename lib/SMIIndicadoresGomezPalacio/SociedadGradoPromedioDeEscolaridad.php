<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SociedadGradoPromedioDeEscolaridad
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
 * Clase SociedadGradoPromedioDeEscolaridad
 */
class SociedadGradoPromedioDeEscolaridad extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Grado Promedio de Escolaridad en Gómez Palacio';
        $this->fecha       = '2015-10-21T12:51:27';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-grado-promedio-de-escolaridad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Un grado se considera un año de acuerdo al sistema educativo nacional.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Educación';
        // Para el Organizador
        $this->categorias  = array('Educación');
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
            array('fecha' => '2010-12-31', 'valor' => '9.1700', 'fuente_nombre' => 'INEGI', 'notas' => 'Consulta la [Fuente](http://www3.inegi.org.mx/sistemas/iter/default.aspx?ev=5)'),
            array('fecha' => '2015-12-31', 'valor' => '9.4800', 'fuente_nombre' => 'INEGI'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-31', 'valor' => '10.5800', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2015-12-31', 'valor' => '9.4800', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2015-12-31', 'valor' => '9.3000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2015-12-31', 'valor' => '8.6900', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2015-12-31', 'valor' => '9.9000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Durango', 'fecha' => '2015-12-31', 'valor' => '9.1500', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Nacional', 'fecha' => '2015-12-31', 'valor' => '9.1600', 'fuente_nombre' => 'INEGI'));
    } // otras_regiones

} // Clase SociedadGradoPromedioDeEscolaridad

?>

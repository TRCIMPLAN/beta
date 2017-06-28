<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadPobreza
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
 * Clase SociedadPobreza
 */
class SociedadPobreza extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Pobreza en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-pobreza';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de la población en situación de pobreza.';
        $this->claves      = 'IMPLAN, Torreón, Bienestar';
        // Para el Organizador
        $this->categorias  = array('Bienestar');
        $this->fuentes     = array('CONEVAL');
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
            array('fecha' => '2012-12-31', 'valor' => '26.8000', 'fuente_nombre' => 'CONEVAL'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '26.8000', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '37.2900', 'fuente_nombre' => 'CONEVAL', 'notas' => 'Consulta la [Base de Datos](http://www.coneval.gob.mx/Medicion/Paginas/Medici%C3%B3n/Pobreza%202012/Pobreza-2012.aspx)'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-12-31', 'valor' => '47.9800', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '33.8400', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2012-12-31', 'valor' => '32.7400', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2010-12-31', 'valor' => '27.7000', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Durango', 'fecha' => '2010-12-31', 'valor' => '50.3400', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Nacional', 'fecha' => '2010-12-31', 'valor' => '45.5900', 'fuente_nombre' => 'CONEVAL'));
    } // otras_regiones

} // Clase SociedadPobreza

?>

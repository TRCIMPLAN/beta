<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadPromedioDeDescendenciaPorVaron
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
 * Clase SociedadPromedioDeDescendenciaPorVaron
 */
class SociedadPromedioDeDescendenciaPorVaron extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Promedio de Descendencia por Varón en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-promedio-de-descendencia-por-varon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Calcula el promedio estimado de hijos por cada varón.';
        $this->claves      = 'IMPLAN, Torreón, Población';
        // Para el Organizador
        $this->categorias  = array('Población');
        $this->fuentes     = array('IMPLAN');
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
            array('fecha' => '2008-12-31', 'valor' => '1.8100', 'fuente_nombre' => 'IMPLAN', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '1.7700', 'fuente_nombre' => 'IMPLAN', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '1.7200', 'fuente_nombre' => 'IMPLAN', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '1.6900', 'fuente_nombre' => 'IMPLAN', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '1.6600', 'fuente_nombre' => 'IMPLAN', 'notas' => ''));
    } // datos

} // Clase SociedadPromedioDeDescendenciaPorVaron

?>

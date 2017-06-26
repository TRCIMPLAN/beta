<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaCrecimientoDeLaPoblacionOcupadaSinIngresos
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
 * Clase EconomiaCrecimientoDeLaPoblacionOcupadaSinIngresos
 */
class EconomiaCrecimientoDeLaPoblacionOcupadaSinIngresos extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Crecimiento de la Población Ocupada sin Ingresos en Torreón';
        $this->fecha       = '2015-07-14T14:41:06';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Mercado Laboral". Mide el crecimiento de la población ocupada sin ingresos entre 2008-2012.';
        $this->claves      = 'IMPLAN, Torreón, Índice de Competitividad Urbana, Empleo';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Empleo');
        $this->fuentes     = array('IMCO');
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
            array('fecha' => '2008-12-31', 'valor' => '-1.0500', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '-1.0500', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '-1.0500', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '-1.0500', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '-1.0500', 'fuente_nombre' => 'IMCO', 'notas' => ''));
    } // datos

} // Clase EconomiaCrecimientoDeLaPoblacionOcupadaSinIngresos

?>

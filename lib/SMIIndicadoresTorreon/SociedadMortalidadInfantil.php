<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadMortalidadInfantil
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
 * Clase SociedadMortalidadInfantil
 */
class SociedadMortalidadInfantil extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Mortalidad Infantil en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-mortalidad-infantil';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Tasa de mortalidad infantil. Defunciones de menores de un año por cada mil nacidos vivos. Se incluye en el subíndice "Sociedad Preparada, Incluyente y Sana" de IMCO.';
        $this->claves      = 'IMPLAN, Torreón, Salud, Objetivos del Milenio, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Salud', 'Objetivos del Milenio', 'Índice de Competitividad Urbana');
        $this->fuentes     = array('SINAIS (SSA)');
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
            array('fecha' => '2009-12-31', 'valor' => '6.1000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '8.9000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '6.7000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '12.2000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => 'Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].'),
            array('fecha' => '2013-12-31', 'valor' => '12.4000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''));
    } // datos

} // Clase SociedadMortalidadInfantil

?>

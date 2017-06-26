<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadMortalidadPorVihSida
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
 * Clase SociedadMortalidadPorVihSida
 */
class SociedadMortalidadPorVihSida extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Mortalidad por VIH-SIDA en Torreón';
        $this->fecha       = '2015-01-13T10:41:50';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-mortalidad-por-vih-sida';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Defunciones a causa de VIH/SIDA por cada 100,000 habitantes';
        $this->claves      = 'IMPLAN, Torreón, Salud, Bienestar, Grupos Vulnerables, Objetivos del Milenio';
        // Para el Organizador
        $this->categorias  = array('Salud', 'Bienestar', 'Grupos Vulnerables', 'Objetivos del Milenio');
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
            array('fecha' => '2013-12-31', 'valor' => '4.0000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''));
    } // datos

} // Clase SociedadMortalidadPorVihSida

?>

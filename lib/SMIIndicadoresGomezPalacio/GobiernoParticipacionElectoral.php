<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio GobiernoParticipacionElectoral
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
 * Clase GobiernoParticipacionElectoral
 */
class GobiernoParticipacionElectoral extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Participación Electoral en Gómez Palacio';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-participacion-electoral';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de personas que emitieron su voto.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Participación Ciudadana';
        // Para el Organizador
        $this->categorias  = array('Participación Ciudadana');
        $this->fuentes     = array('INE-IEPCC');
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
            array('fecha' => '2012-07-01', 'valor' => '58.3100', 'fuente_nombre' => 'INE-IEPCC', 'notas' => ''));
    } // datos

} // Clase GobiernoParticipacionElectoral

?>

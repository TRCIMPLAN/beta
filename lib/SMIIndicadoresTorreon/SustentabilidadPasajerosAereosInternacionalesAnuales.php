<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadPasajerosAereosInternacionalesAnuales
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
 * Clase SustentabilidadPasajerosAereosInternacionalesAnuales
 */
class SustentabilidadPasajerosAereosInternacionalesAnuales extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Pasajeros Aéreos Internacionales Anuales en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-pasajeros-aereos-internacionales-anuales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Total de pasajeros que llegan o salen del Aeropuerto Internacional Francisco Sarabia de Torreón, Coahuila.';
        $this->claves      = 'IMPLAN, Torreón, Movilidad';
        // Para el Organizador
        $this->categorias  = array('Movilidad');
        $this->fuentes     = array('Operadora Mexicana de Aeropuertos (OMA)');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('fecha' => '2005-12-31', 'valor' => '64316', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2006-12-31', 'valor' => '73900', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2007-12-31', 'valor' => '80742', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2008-12-31', 'valor' => '77199', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2009-12-31', 'valor' => '53112', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2010-12-31', 'valor' => '51238', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2011-12-31', 'valor' => '51401', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-12-31', 'valor' => '61443', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-12-31', 'valor' => '55446', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-12-31', 'valor' => '54154', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-12-31', 'valor' => '54307', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-31', 'valor' => '54307', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2013-12-31', 'valor' => 'X', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2013-12-31', 'valor' => 'X', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2013-12-31', 'valor' => 'X', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2015-12-31', 'valor' => '54307', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('region_nombre' => 'Nacional', 'fecha' => '2015-12-31', 'valor' => '14551000', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'));
    } // otras_regiones

} // Clase SustentabilidadPasajerosAereosInternacionalesAnuales

?>

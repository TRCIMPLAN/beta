<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadDestinosViaAerea
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
 * Clase SustentabilidadDestinosViaAerea
 */
class SustentabilidadDestinosViaAerea extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Destinos Vía Aérea en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-destinos-via-aerea';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Destinos directos ofertados desde el Aeropuerto Internacional Francisco Sarabia de la ciudad de Torreón.';
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
            array('fecha' => '2014-03-31', 'valor' => '7', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-06-30', 'valor' => '7', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-08-25', 'valor' => '11', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => 'Se incluyen: Chihuahua, Chih.- CDMX- Guadalajara, Jal.- Hermosillo, Son.- Monterrey, N.L.- Tijuana, B.C.- Bajío- Ciudad Juárez, Chih.- Manzanillo, Col.- Mazatlán, Sin.- Dallas, Tx.'));
    } // datos

} // Clase SustentabilidadDestinosViaAerea

?>

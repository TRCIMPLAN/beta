<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna GobiernoCompetenciaElectoralDiferenciaDeVotos
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

namespace SMIIndicadoresLaLaguna;

/**
 * Clase GobiernoCompetenciaElectoralDiferenciaDeVotos
 */
class GobiernoCompetenciaElectoralDiferenciaDeVotos extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Competencia Electoral Diferencia de Votos en La Laguna';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-competencia-electoral-diferencia-de-votos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Diferencia de votos entre primer y segundo lugar en la elección federal.';
        $this->claves      = 'IMPLAN, La Laguna, Participación Ciudadana';
        // Para el Organizador
        $this->categorias  = array('Participación Ciudadana');
        $this->fuentes     = array('INE-IEPCC');
        $this->regiones    = array('La Laguna');
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
            array('fecha' => '2012-07-01', 'valor' => '32140', 'fuente_nombre' => 'INE-IEPCC', 'notas' => 'En esta cifra se incluye solo a los municipios de Torreón, Matamoros, Gómez Palacio y Lerdo'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2012-07-01', 'valor' => '4367', 'fuente_nombre' => 'INE-IEPCC'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-07-01', 'valor' => '5784', 'fuente_nombre' => 'INE-IEPCC'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-07-01', 'valor' => '2910', 'fuente_nombre' => 'INE-IEPCC'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-07-01', 'valor' => '19079', 'fuente_nombre' => 'INE-IEPCC'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2012-07-01', 'valor' => '32140', 'fuente_nombre' => 'INE-IEPCC', 'notas' => 'En esta cifra se incluye solo a los municipios de Torreón, Matamoros, Gómez Palacio y Lerdo'));
    } // otras_regiones

} // Clase GobiernoCompetenciaElectoralDiferenciaDeVotos

?>

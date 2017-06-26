<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SustentabilidadConsumoDeDieselEnTransporteDeBienes
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

namespace SMIIndicadoresMatamoros;

/**
 * Clase SustentabilidadConsumoDeDieselEnTransporteDeBienes
 */
class SustentabilidadConsumoDeDieselEnTransporteDeBienes extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Consumo de Diesel en Transporte de Bienes en Matamoros';
        $this->fecha       = '2015-07-14T16:14:13';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-consumo-de-diesel-en-transporte-de-bienes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.';
        $this->claves      = 'IMPLAN, Matamoros, Índice de Competitividad Urbana, Recursos Naturales';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Recursos Naturales');
        $this->fuentes     = array('IMCO');
        $this->regiones    = array('Matamoros');
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
            array('fecha' => '2008-12-31', 'valor' => '2.8010', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '2.6615', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '2.6574', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '1.8862', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '1.8470', 'fuente_nombre' => 'IMCO', 'notas' => ''));
    } // datos

} // Clase SustentabilidadConsumoDeDieselEnTransporteDeBienes

?>

<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna GobiernoParticipacionCiudadana
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
 * Clase GobiernoParticipacionCiudadana
 */
class GobiernoParticipacionCiudadana extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Participación Ciudadana en La Laguna';
        $this->fecha       = '2015-07-14T14:35:57';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-participacion-ciudadana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de la lista nominal de elecciones federales. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide la población que participó en las últimas elecciones federales.';
        $this->claves      = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Participación Ciudadana';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Participación Ciudadana');
        $this->fuentes     = array('IMCO');
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
            array('fecha' => '2008-12-31', 'valor' => '46.0500', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '46.0500', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '46.0500', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '62.5300', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '62.5300', 'fuente_nombre' => 'IMCO'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '64.6600', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '58.3100', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-12-31', 'valor' => '59.5700', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '66.2900', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2012-12-31', 'valor' => '62.5300', 'fuente_nombre' => 'IMCO'));
    } // otras_regiones

} // Clase GobiernoParticipacionCiudadana

?>

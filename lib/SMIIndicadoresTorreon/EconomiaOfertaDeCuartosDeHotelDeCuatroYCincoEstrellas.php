<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaOfertaDeCuartosDeHotelDeCuatroYCincoEstrellas
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
 * Clase EconomiaOfertaDeCuartosDeHotelDeCuatroYCincoEstrellas
 */
class EconomiaOfertaDeCuartosDeHotelDeCuatroYCincoEstrellas extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Oferta de Cuartos de Hotel de Cuatro y Cinco Estrellas en Torreón';
        $this->fecha       = '2015-07-14T15:16:02';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el total de cuartos de hotel en las categorías de 4 y 5 estrellas como porcentaje de la oferta total de cuartos. Este indicador sólo está disponible para los principales centros turísticos.';
        $this->claves      = 'IMPLAN, Torreón, Índice de Competitividad Urbana, Competitividad';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Competitividad');
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
            array('fecha' => '2008-12-31', 'valor' => '72.6900', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '70.3800', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '71.2600', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '69.5000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '68.3700', 'fuente_nombre' => 'IMCO'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '68.3700', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '34.5400', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-12-31', 'valor' => '34.5400', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '68.3700', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2012-12-31', 'valor' => '58.8500', 'fuente_nombre' => 'IMCO'));
    } // otras_regiones

} // Clase EconomiaOfertaDeCuartosDeHotelDeCuatroYCincoEstrellas

?>

<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SociedadEmpresasSocialmenteResponsables
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
 * Clase SociedadEmpresasSocialmenteResponsables
 */
class SociedadEmpresasSocialmenteResponsables extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Empresas Socialmente Responsables en Gómez Palacio';
        $this->fecha       = '2015-07-14T14:42:02';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-empresas-socialmente-responsables';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de empresas certificadas como Empresa Socialmente Responsable. Únicamente se consideró la ubicación geográfica de la matriz de la empresa.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Índice de Competitividad Urbana, Empresas';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Empresas');
        $this->fuentes     = array('IMCO', 'Centro Mexicano para la Filantropía (Cemefi)');
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
            array('fecha' => '2008-12-31', 'valor' => '0.0400', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '3.3795', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '3.4602', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '3.4650', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '10.4167', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-05-24', 'valor' => '0.0214', 'fuente_nombre' => 'Centro Mexicano para la Filantropía (Cemefi)'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2016-05-24', 'valor' => '0.0309', 'fuente_nombre' => 'Centro Mexicano para la Filantropía (Cemefi)'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-05-24', 'valor' => '0.0214', 'fuente_nombre' => 'Centro Mexicano para la Filantropía (Cemefi)'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-05-24', 'valor' => '0.0000', 'fuente_nombre' => 'Centro Mexicano para la Filantropía (Cemefi)'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-05-24', 'valor' => '0.0000', 'fuente_nombre' => 'Centro Mexicano para la Filantropía (Cemefi)'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2016-05-24', 'valor' => '0.0241', 'fuente_nombre' => 'Centro Mexicano para la Filantropía (Cemefi)'));
    } // otras_regiones

} // Clase SociedadEmpresasSocialmenteResponsables

?>

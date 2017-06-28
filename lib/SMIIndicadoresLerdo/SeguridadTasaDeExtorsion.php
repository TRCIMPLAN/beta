<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SeguridadTasaDeExtorsion
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

namespace SMIIndicadoresLerdo;

/**
 * Clase SeguridadTasaDeExtorsion
 */
class SeguridadTasaDeExtorsion extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Tasa de Extorsión en Lerdo';
        $this->fecha       = '2015-04-29T14:02:12';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-tasa-de-extorsion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = '';
        $this->claves      = 'IMPLAN, Lerdo, Seguridad, Delincuencia';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Delincuencia');
        $this->fuentes     = array('Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública');
        $this->regiones    = array('Lerdo');
    } // constructor

    /**
     * Estructura
     *
     * @return array Arreglo asociativo
     */
    public function estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'caracter'),
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
            array('fecha' => '2015-03-31', 'valor' => 'Y', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => 'El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2015-03-31', 'valor' => 'Y', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => 'El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2015-03-31', 'valor' => 'Y', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => 'El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2015-03-31', 'valor' => 'Y', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => 'El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2015-03-31', 'valor' => 'Y', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => 'El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2015-03-31', 'valor' => 'Y', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => 'El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2017-04-30', 'valor' => '0.2600', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Durango', 'fecha' => '2017-04-30', 'valor' => '1.1100', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'));
    } // otras_regiones

} // Clase SeguridadTasaDeExtorsion

?>

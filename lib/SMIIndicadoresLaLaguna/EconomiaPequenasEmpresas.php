<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaPequenasEmpresas
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
 * Clase EconomiaPequenasEmpresas
 */
class EconomiaPequenasEmpresas extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Pequeñas Empresas en La Laguna';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-pequenas-empresas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje del total de empresas que emplean entre 11 y 50 empleados.';
        $this->claves      = 'IMPLAN, La Laguna, Empresas';
        // Para el Organizador
        $this->categorias  = array('Empresas');
        $this->fuentes     = array('Sistema de Información Empresarial Mexicano (SIEM)');
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
            array('fecha' => '2013-12-31', 'valor' => '8.6800', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('fecha' => '2014-07-31', 'valor' => '7.5400', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2014-07-31', 'valor' => '7.6500', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-07-31', 'valor' => '7.7800', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-07-31', 'valor' => '5.6200', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-07-31', 'valor' => '2.3100', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-07-31', 'valor' => '7.5400', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2014-07-31', 'valor' => '7.8000', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'Durango', 'fecha' => '2014-07-31', 'valor' => '6.2400', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'Nacional', 'fecha' => '2014-07-31', 'valor' => '5.2200', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'));
    } // otras_regiones

} // Clase EconomiaPequenasEmpresas

?>

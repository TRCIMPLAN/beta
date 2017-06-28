<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros EconomiaCarteraHipotecaria
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
 * Clase EconomiaCarteraHipotecaria
 */
class EconomiaCarteraHipotecaria extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Cartera Hipotecaria en Matamoros';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-cartera-hipotecaria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Monto total de créditos otorgados hasta la fecha indicada.';
        $this->claves      = 'IMPLAN, Matamoros, Mercados';
        // Para el Organizador
        $this->categorias  = array('Mercados');
        $this->fuentes     = array('Comisión Nacional Bancaria y de Valores (CNBV)');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'dinero'),
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
            array('fecha' => '2010-12-31', 'valor' => '66279954.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)'),
            array('fecha' => '2011-12-31', 'valor' => '59324405.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)'),
            array('fecha' => '2012-12-31', 'valor' => '57375581.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)'),
            array('fecha' => '2013-12-31', 'valor' => '56877995.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)'),
            array('fecha' => '2014-03-31', 'valor' => '57702472.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)', 'notas' => 'Dato trimestral'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2014-03-31', 'valor' => '4664619926.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)', 'notas' => 'Dato trimestral'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-03-31', 'valor' => '614765352.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)', 'notas' => 'Dato trimestral'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-03-31', 'valor' => '334888287.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)', 'notas' => 'Dato trimestral'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-03-31', 'valor' => '57702472.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)', 'notas' => 'Dato trimestral'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-03-31', 'valor' => '5671976037.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)', 'notas' => 'Dato trimestral'));
    } // otras_regiones

} // Clase EconomiaCarteraHipotecaria

?>

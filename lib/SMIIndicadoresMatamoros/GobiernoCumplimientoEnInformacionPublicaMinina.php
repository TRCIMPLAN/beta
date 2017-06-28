<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros GobiernoCumplimientoEnInformacionPublicaMinina
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
 * Clase GobiernoCumplimientoEnInformacionPublicaMinina
 */
class GobiernoCumplimientoEnInformacionPublicaMinina extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Cumplimiento en Información Pública Mínina en Matamoros';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-cumplimiento-en-informacion-publica-minina';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Cumplimiento sobre total de obligaciones.';
        $this->claves      = 'IMPLAN, Matamoros, Transparencia';
        // Para el Organizador
        $this->categorias  = array('Transparencia');
        $this->fuentes     = array('ICAI-IDAIP');
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
            array('fecha' => '2014-03-03', 'valor' => '63.0000', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2014-06-30', 'valor' => '64.1000', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2014-09-30', 'valor' => '80.0000', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2014-10-31', 'valor' => '82.0000', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2014-11-30', 'valor' => '74.0000', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2014-12-31', 'valor' => '77.3300', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2015-01-31', 'valor' => '72.6700', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2015-02-28', 'valor' => '98.6700', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2015-03-31', 'valor' => '70.6700', 'fuente_nombre' => 'ICAI-IDAIP'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2015-03-31', 'valor' => '89.3300', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-08-31', 'valor' => '86.0000', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-08-31', 'valor' => '100.0000', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2015-03-31', 'valor' => '70.6700', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2013-12-31', 'valor' => '80.0000', 'fuente_nombre' => 'ICAI-IDAIP'));
    } // otras_regiones

} // Clase GobiernoCumplimientoEnInformacionPublicaMinina

?>

<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SociedadRezagoAlimentario
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
 * Clase SociedadRezagoAlimentario
 */
class SociedadRezagoAlimentario extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Rezago Alimentario en Matamoros';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-rezago-alimentario';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Personas que presenten un grado de inseguridad alimentaria moderado o severo.';
        $this->claves      = 'IMPLAN, Matamoros, Grupos Vulnerables, Bienestar';
        // Para el Organizador
        $this->categorias  = array('Grupos Vulnerables', 'Bienestar');
        $this->fuentes     = array('CONEVAL');
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
            array('fecha' => '2010-12-31', 'valor' => '25.1000', 'fuente_nombre' => 'CONEVAL'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2010-12-31', 'valor' => '17.7700', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2010-12-31', 'valor' => '18.1100', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2010-12-31', 'valor' => '20.8900', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2010-12-31', 'valor' => '25.1000', 'fuente_nombre' => 'CONEVAL'));
    } // otras_regiones

} // Clase SociedadRezagoAlimentario

?>

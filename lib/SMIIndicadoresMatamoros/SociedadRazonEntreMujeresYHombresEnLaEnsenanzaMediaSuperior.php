<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SociedadRazonEntreMujeresYHombresEnLaEnsenanzaMediaSuperior
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
 * Clase SociedadRazonEntreMujeresYHombresEnLaEnsenanzaMediaSuperior
 */
class SociedadRazonEntreMujeresYHombresEnLaEnsenanzaMediaSuperior extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Razón entre Mujeres y Hombres en la Enseñanza Media Superior en Matamoros';
        $this->fecha       = '2015-01-22T13:57:45';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Se calcula dividiendo la Población Femenina entre 15 y 17 años que asiste a la escuela entre la Población Masculina entre 15 y 17 años que asiste a la escuela. El índice de paridad entre los géneros (IPG) es la relación entre el valor correspondiente al sexo femenino y el correspondiente al sexo masculino para un indicador dado. Un IPG de 1 significa paridad entre los géneros.';
        $this->claves      = 'IMPLAN, Matamoros, Educación, Género, Objetivos del Milenio';
        // Para el Organizador
        $this->categorias  = array('Educación', 'Género', 'Objetivos del Milenio');
        $this->fuentes     = array('INEGI. Censos de Población y Vivienda');
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
            array('fecha' => '2010-12-31', 'valor' => '1.0780', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2010-12-31', 'valor' => '1.0020', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2010-12-31', 'valor' => '1.0210', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2010-12-31', 'valor' => '1.0300', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2010-12-31', 'valor' => '1.0780', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2010-12-31', 'valor' => '0.9940', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('region_nombre' => 'Durango', 'fecha' => '2010-12-31', 'valor' => '1.0230', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('region_nombre' => 'Nacional', 'fecha' => '2010-12-31', 'valor' => '1.0140', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'));
    } // otras_regiones

} // Clase SociedadRazonEntreMujeresYHombresEnLaEnsenanzaMediaSuperior

?>

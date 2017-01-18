<?php
/**
 * TrcIMPLAN Sitio Web - IBC Torreón Rincón de Los Nogales
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano
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

namespace IBCTorreon;

/**
 * Clase RinconDeLosNogales
 */
class RinconDeLosNogales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Rincón de Los Nogales';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-18 14:53:48';
        // El nombre del archivo a crear
        $this->archivo     = 'rincon-de-los-nogales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincón de Los Nogales en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación, Colonia';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio  = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu = 'Indicadores Básicos por Colonias > Colonias de Torreón';
        // Para el Organizador
        $this->categorias  = array();
        $this->fuentes     = array();
        $this->regiones    = array('Torreón');
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                '2010' => array(
                    'Población total' => 2017,
                    'Porcentaje de población masculina' => 50.47,
                    'Porcentaje de población femenina' => 49.53,
                    'Porcentaje de población de 0 a 14 años' => 36.79,
                    'Porcentaje de población de 15 a 64 años' => 54.78,
                    'Porcentaje de población de 65 y más años' => 3.37,
                    'Porcentaje de población no especificada' => 5.06,
                    'Fecundidad promedio' => 1.76,
                    'Porcentaje de población con discapacidad' => 2.04
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.79,
                    'Población Económicamente Activa masculina' => 64.52,
                    'Población Económicamente Activa femenina' => 35.48,
                    'Población Ocupada' => 91.11,
                    'Población Ocupada masculina' => 64.63,
                    'Población Ocupada femenina' => 35.37,
                    'Población Desocupada' => 8.89,
                    'Derechohabiencia' => 78.19
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 495,
                    'Ocupación por Vivienda' => 4.07,
                    'Viviendas con Electricidad' => 99.80,
                    'Viviendas con Agua' => 99.80,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.39,
                    'Viviendas con Automóvil' => 60.40,
                    'Viviendas con Computadora' => 37.78
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 41,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.46,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 21.95,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 14.63,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 9.76,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.32
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.5490035561758,
            'Centro longitud' => -103.362864541763
        );
    } // mapas

} // Clase RinconDeLosNogales

?>

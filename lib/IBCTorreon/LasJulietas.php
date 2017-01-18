<?php
/**
 * TrcIMPLAN Sitio Web - IBC Torreón Las Julietas
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
 * Clase LasJulietas
 */
class LasJulietas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Las Julietas';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-18 14:53:48';
        // El nombre del archivo a crear
        $this->archivo     = 'las-julietas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Las Julietas en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 2816,
                    'Porcentaje de población masculina' => 50.49,
                    'Porcentaje de población femenina' => 49.51,
                    'Porcentaje de población de 0 a 14 años' => 32.81,
                    'Porcentaje de población de 15 a 64 años' => 62.17,
                    'Porcentaje de población de 65 y más años' => 4.69,
                    'Porcentaje de población no especificada' => 0.33,
                    'Fecundidad promedio' => 2.60,
                    'Porcentaje de población con discapacidad' => 2.66
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.54,
                    'Población Económicamente Activa masculina' => 70.30,
                    'Población Económicamente Activa femenina' => 29.70,
                    'Población Ocupada' => 89.96,
                    'Población Ocupada masculina' => 68.63,
                    'Población Ocupada femenina' => 31.37,
                    'Población Desocupada' => 10.04,
                    'Derechohabiencia' => 60.96
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 652,
                    'Ocupación por Vivienda' => 4.32,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.51,
                    'Viviendas con Drenaje' => 98.58,
                    'Viviendas con Televisión' => 97.19,
                    'Viviendas con Automóvil' => 41.70,
                    'Viviendas con Computadora' => 15.98
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 106,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.34,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.64,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 13.21,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 6.60,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.66
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
            'Centro latitud'  => 25.5001496594444,
            'Centro longitud' => -103.403018355139
        );
    } // mapas

} // Clase LasJulietas

?>

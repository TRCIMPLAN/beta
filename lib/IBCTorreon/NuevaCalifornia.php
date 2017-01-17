<?php
/**
 * TrcIMPLAN Índice Básico de Colonias
 *
 * Copyright (C) 2016 Guillermo Valdes Lozano
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
 * @package TrcIMPLAN
 */

namespace IBCTorreon;

/**
 * Clase NuevaCalifornia
 */
class NuevaCalifornia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Nueva California';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-17 13:11:23';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'nueva-california';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Nueva California en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 817,
                    'Porcentaje de población masculina' => 45.09,
                    'Porcentaje de población femenina' => 54.91,
                    'Porcentaje de población de 0 a 14 años' => 29.89,
                    'Porcentaje de población de 15 a 64 años' => 63.45,
                    'Porcentaje de población de 65 y más años' => 6.64,
                    'Porcentaje de población no especificada' => 0.02,
                    'Fecundidad promedio' => 2.40,
                    'Porcentaje de población con discapacidad' => 5.51
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.59,
                    'Población Económicamente Activa masculina' => 66.74,
                    'Población Económicamente Activa femenina' => 33.26,
                    'Población Ocupada' => 84.46,
                    'Población Ocupada masculina' => 63.94,
                    'Población Ocupada femenina' => 36.06,
                    'Población Desocupada' => 15.54,
                    'Derechohabiencia' => 67.49
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 186,
                    'Ocupación por Vivienda' => 4.39,
                    'Viviendas con Electricidad' => 99.60,
                    'Viviendas con Agua' => 99.06,
                    'Viviendas con Drenaje' => 98.52,
                    'Viviendas con Televisión' => 99.06,
                    'Viviendas con Automóvil' => 44.01,
                    'Viviendas con Computadora' => 35.81
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 65,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 35.38,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 26.15,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 9.23,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 7.69,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.62
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
            'Centro latitud'  => 25.5414389494988,
            'Centro longitud' => -103.404890573193
        );
    } // mapas

} // Clase NuevaCalifornia

?>

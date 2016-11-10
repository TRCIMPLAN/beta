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
 * Clase MonteReal
 */
class MonteReal extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Monte Real';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'monte-real';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Monte Real de Torreón.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación';
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
                    'Población total' => 7297,
                    'Porcentaje de población masculina' => 48.98,
                    'Porcentaje de población femenina' => 51.02,
                    'Porcentaje de población de 0 a 14 años' => 37.77,
                    'Porcentaje de población de 15 a 64 años' => 60.07,
                    'Porcentaje de población de 65 y más años' => 1.43,
                    'Porcentaje de población no especificada' => 0.73,
                    'Fecundidad promedio' => 1.77,
                    'Porcentaje de población nacida en otro estado' => 14.49,
                    'Porcentaje de población con discapacidad' => 1.73,
                    'Porcentaje de población de 15 y más analfabeta' => 0.19,
                    'Porcentaje de población de 18 y más' => 56.39,
                    'Porcentaje de población de 18 y más postbásicos' => 30.22
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.88,
                    'Grado Promedio de Escolaridad masculina' => 11.09,
                    'Grado Promedio de Escolaridad femenina' => 10.69
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 61.46,
                    'Población Económicamente Activa masculina' => 63.61,
                    'Población Económicamente Activa femenina' => 36.39,
                    'Población Ocupada' => 94.43,
                    'Población Ocupada masculina' => 63.28,
                    'Población Ocupada femenina' => 36.72,
                    'Población Desocupada' => 5.57,
                    'Derechohabiencia' => 79.47
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1973,
                    'Hogares Jefatura masculina' => 84.42,
                    'Hogares Jefatura femenina' => 15.58,
                    'Ocupación por Vivienda' => 3.70,
                    'Viviendas con Electricidad' => 99.80,
                    'Viviendas con Agua' => 99.54,
                    'Viviendas con Drenaje' => 99.65,
                    'Viviendas con Televisión' => 99.54,
                    'Viviendas con Automóvil' => 59.76,
                    'Viviendas con Computadora' => 33.85,
                    'Viviendas con Celular' => 88.70,
                    'Viviendas con Internet' => 27.91
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 187,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 39.57,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 21.39,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 19.79,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 5.35,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 3.74
                )
            )
        );
    } // datos

} // Clase MonteReal

?>

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
 * Clase EjidoElTajito
 */
class EjidoElTajito extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido El Tajito';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-el-tajito';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido El Tajito de Torreón.';
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
                    'Población total' => 2144,
                    'Porcentaje de población masculina' => 50.09,
                    'Porcentaje de población femenina' => 49.91,
                    'Porcentaje de población de 0 a 14 años' => 28.47,
                    'Porcentaje de población de 15 a 64 años' => 65.82,
                    'Porcentaje de población de 65 y más años' => 5.15,
                    'Porcentaje de población no especificada' => 0.56,
                    'Fecundidad promedio' => 2.37,
                    'Porcentaje de población nacida en otro estado' => 10.73,
                    'Porcentaje de población con discapacidad' => 3.35
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.78,
                    'Grado Promedio de Escolaridad masculina' => 7.84,
                    'Grado Promedio de Escolaridad femenina' => 7.72
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.31,
                    'Población Económicamente Activa masculina' => 71.01,
                    'Población Económicamente Activa femenina' => 28.99,
                    'Población Ocupada' => 92.79,
                    'Población Ocupada masculina' => 70.41,
                    'Población Ocupada femenina' => 29.59,
                    'Población Desocupada' => 7.21,
                    'Derechohabiencia' => 62.12
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 491,
                    'Hogares Jefatura masculina' => 78.57,
                    'Hogares Jefatura femenina' => 21.43,
                    'Ocupación por Vivienda' => 4.37,
                    'Viviendas con Electricidad' => 99.77,
                    'Viviendas con Agua' => 99.56,
                    'Viviendas con Drenaje' => 98.95,
                    'Viviendas con Televisión' => 98.95,
                    'Viviendas con Automóvil' => 41.12,
                    'Viviendas con Computadora' => 17.45,
                    'Viviendas con Celular' => 63.99,
                    'Viviendas con Internet' => 9.05
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 109,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 34.86,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 28.44,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 9.17,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 8.26,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 7.34
                )
            )
        );
    } // datos

} // Clase EjidoElTajito

?>

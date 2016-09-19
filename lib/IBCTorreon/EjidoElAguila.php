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
 * Clase EjidoElAguila
 */
class EjidoElAguila extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido El Aguila';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-el-aguila';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido El Aguila de Torreón.';
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
                    'Población total' => 1602,
                    'Porcentaje de población masculina' => 49.94,
                    'Porcentaje de población femenina' => 50.06,
                    'Porcentaje de población de 0 a 14 años' => 34.03,
                    'Porcentaje de población de 15 a 64 años' => 59.57,
                    'Porcentaje de población de 65 y más años' => 5.10,
                    'Porcentaje de población no especificada' => 1.30,
                    'Fecundidad promedio' => 2.62,
                    'Porcentaje de población nacida en otro estado' => 17.24,
                    'Porcentaje de población con discapacidad' => 9.38
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.55,
                    'Grado Promedio de Escolaridad masculina' => 7.73,
                    'Grado Promedio de Escolaridad femenina' => 7.35
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.88,
                    'Población Económicamente Activa masculina' => 74.77,
                    'Población Económicamente Activa femenina' => 25.23,
                    'Población Ocupada' => 88.53,
                    'Población Ocupada masculina' => 72.69,
                    'Población Ocupada femenina' => 27.31,
                    'Población Desocupada' => 11.47,
                    'Derechohabiencia' => 64.94
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 389,
                    'Hogares Jefatura masculina' => 80.12,
                    'Hogares Jefatura femenina' => 19.88,
                    'Ocupación por Vivienda' => 4.12,
                    'Viviendas con Electricidad' => 99.69,
                    'Viviendas con Agua' => 96.77,
                    'Viviendas con Drenaje' => 96.78,
                    'Viviendas con Televisión' => 98.33,
                    'Viviendas con Automóvil' => 35.19,
                    'Viviendas con Computadora' => 10.15,
                    'Viviendas con Celular' => 67.22,
                    'Viviendas con Internet' => 3.73
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 45,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 37.78,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.22,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 15.56,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 8.89,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 4.44
                )
            )
        );
    } // datos

} // Clase EjidoElAguila

?>

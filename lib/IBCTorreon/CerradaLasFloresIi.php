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
 * Clase CerradaLasFloresIi
 */
class CerradaLasFloresIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Cerrada Las Flores Ii';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'cerrada-las-flores-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Cerrada Las Flores Ii de Torreón.';
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
                    'Población total' => 440,
                    'Porcentaje de población masculina' => 49.32,
                    'Porcentaje de población femenina' => 50.68,
                    'Porcentaje de población de 0 a 14 años' => 32.50,
                    'Porcentaje de población de 15 a 64 años' => 65.00,
                    'Porcentaje de población de 65 y más años' => 1.82,
                    'Porcentaje de población no especificada' => 0.68,
                    'Fecundidad promedio' => 1.76,
                    'Porcentaje de población nacida en otro estado' => 23.86,
                    'Porcentaje de población con discapacidad' => 3.29
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.39,
                    'Grado Promedio de Escolaridad masculina' => 12.79,
                    'Grado Promedio de Escolaridad femenina' => 11.99
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 61.23,
                    'Población Económicamente Activa masculina' => 61.81,
                    'Población Económicamente Activa femenina' => 38.19,
                    'Población Ocupada' => 92.47,
                    'Población Ocupada masculina' => 62.16,
                    'Población Ocupada femenina' => 37.84,
                    'Población Desocupada' => 7.53,
                    'Derechohabiencia' => 84.09
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 122,
                    'Hogares Jefatura masculina' => 81.15,
                    'Hogares Jefatura femenina' => 18.85,
                    'Ocupación por Vivienda' => 3.61,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 77.87,
                    'Viviendas con Computadora' => 64.75,
                    'Viviendas con Celular' => 89.34,
                    'Viviendas con Internet' => 46.72
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 25.00
                )
            )
        );
    } // datos

} // Clase CerradaLasFloresIi

?>

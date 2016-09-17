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
 * Clase ProlongacionLosNogales
 */
class ProlongacionLosNogales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Prolongacion Los Nogales';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:01';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'prolongacion-los-nogales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Prolongacion Los Nogales de Torreón.';
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
                'Población total' => 3204,
                'Porcentaje de población masculina' => 45.32,
                'Porcentaje de población femenina' => 54.68,
                'Porcentaje de población de 0 a 14 años' => 19.01,
                'Porcentaje de población de 15 a 64 años' => 70.66,
                'Porcentaje de población de 65 y más años' => 8.74,
                'Porcentaje de población no especificada' => 1.59,
                'Fecundidad promedio' => 1.99,
                'Porcentaje de población nacida en otro estado' => 25.19,
                'Porcentaje de población con discapacidad' => 5.61
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 13.07,
                'Grado Promedio de Escolaridad masculina' => 13.57,
                'Grado Promedio de Escolaridad femenina' => 12.67
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 50.50,
                'Población Económicamente Activa masculina' => 55.88,
                'Población Económicamente Activa femenina' => 44.12,
                'Población Ocupada' => 91.54,
                'Población Ocupada masculina' => 54.86,
                'Población Ocupada femenina' => 45.14,
                'Población Desocupada' => 8.46,
                'Derechohabiencia' => 78.71
            ),
            'Viviendas' => array(
                'Hogares' => 901,
                'Hogares Jefatura masculina' => 70.81,
                'Hogares Jefatura femenina' => 29.19,
                'Ocupación por Vivienda' => 3.56,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 99.89,
                'Viviendas con Drenaje' => 99.89,
                'Viviendas con Televisión' => 99.56,
                'Viviendas con Automóvil' => 79.69,
                'Viviendas con Computadora' => 64.82,
                'Viviendas con Celular' => 81.35,
                'Viviendas con Internet' => 54.05
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 91,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 36.26,
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => 19.78,
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => 10.99,
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => 6.59,
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => 6.59
            )
        );
    } // datos

} // Clase ProlongacionLosNogales

?>

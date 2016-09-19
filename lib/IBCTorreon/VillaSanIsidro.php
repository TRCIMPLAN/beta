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
 * Clase VillaSanIsidro
 */
class VillaSanIsidro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villa San Isidro';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villa-san-isidro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villa San Isidro de Torreón.';
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
                    'Población total' => 261,
                    'Porcentaje de población masculina' => 48.28,
                    'Porcentaje de población femenina' => 51.72,
                    'Porcentaje de población de 0 a 14 años' => 14.18,
                    'Porcentaje de población de 15 a 64 años' => 64.37,
                    'Porcentaje de población de 65 y más años' => 16.86,
                    'Porcentaje de población no especificada' => 4.59,
                    'Fecundidad promedio' => 2.32,
                    'Porcentaje de población nacida en otro estado' => 21.07,
                    'Porcentaje de población con discapacidad' => 6.22
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.01,
                    'Grado Promedio de Escolaridad masculina' => 15.34,
                    'Grado Promedio de Escolaridad femenina' => 12.85
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 47.96,
                    'Población Económicamente Activa masculina' => 64.15,
                    'Población Económicamente Activa femenina' => 35.85,
                    'Población Ocupada' => 98.08,
                    'Población Ocupada masculina' => 64.42,
                    'Población Ocupada femenina' => 35.58,
                    'Población Desocupada' => 1.92,
                    'Derechohabiencia' => 79.69
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 80,
                    'Hogares Jefatura masculina' => 76.25,
                    'Hogares Jefatura femenina' => 23.75,
                    'Ocupación por Vivienda' => 3.26,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 95.00,
                    'Viviendas con Computadora' => 83.75,
                    'Viviendas con Celular' => 86.25,
                    'Viviendas con Internet' => 81.25
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 50,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 28.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 28.00,
                    'Tercera actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Tercera actividad porcentaje' => 12.00,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 10.00,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 6.00
                )
            )
        );
    } // datos

} // Clase VillaSanIsidro

?>

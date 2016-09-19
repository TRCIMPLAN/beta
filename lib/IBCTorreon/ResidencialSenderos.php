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
 * Clase ResidencialSenderos
 */
class ResidencialSenderos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Senderos';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-senderos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Senderos de Torreón.';
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
                    'Población total' => 2293,
                    'Porcentaje de población masculina' => 48.93,
                    'Porcentaje de población femenina' => 51.07,
                    'Porcentaje de población de 0 a 14 años' => 29.93,
                    'Porcentaje de población de 15 a 64 años' => 65.66,
                    'Porcentaje de población de 65 y más años' => 2.41,
                    'Porcentaje de población no especificada' => 2.00,
                    'Fecundidad promedio' => 1.30,
                    'Porcentaje de población nacida en otro estado' => 30.90,
                    'Porcentaje de población con discapacidad' => 1.13
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 15.28,
                    'Grado Promedio de Escolaridad masculina' => 15.57,
                    'Grado Promedio de Escolaridad femenina' => 15.01
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 68.85,
                    'Población Económicamente Activa masculina' => 57.87,
                    'Población Económicamente Activa femenina' => 42.13,
                    'Población Ocupada' => 98.98,
                    'Población Ocupada masculina' => 58.17,
                    'Población Ocupada femenina' => 41.83,
                    'Población Desocupada' => 1.02,
                    'Derechohabiencia' => 83.91
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 677,
                    'Hogares Jefatura masculina' => 85.56,
                    'Hogares Jefatura femenina' => 14.44,
                    'Ocupación por Vivienda' => 3.39,
                    'Viviendas con Electricidad' => 99.93,
                    'Viviendas con Agua' => 99.49,
                    'Viviendas con Drenaje' => 99.93,
                    'Viviendas con Televisión' => 99.19,
                    'Viviendas con Automóvil' => 97.86,
                    'Viviendas con Computadora' => 91.52,
                    'Viviendas con Celular' => 98.55,
                    'Viviendas con Internet' => 79.83
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 12,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 41.67,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Cuarta actividad porcentaje' => 8.33,
                    'Quinta actividad nombre' => 'Construcción',
                    'Quinta actividad porcentaje' => 8.33
                )
            )
        );
    } // datos

} // Clase ResidencialSenderos

?>

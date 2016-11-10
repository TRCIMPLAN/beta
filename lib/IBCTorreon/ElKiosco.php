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
 * Clase ElKiosco
 */
class ElKiosco extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'El Kiosco';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:28';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'el-kiosco';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia El Kiosco de Torreón.';
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
                    'Población total' => 492,
                    'Porcentaje de población masculina' => 48.17,
                    'Porcentaje de población femenina' => 51.83,
                    'Porcentaje de población de 0 a 14 años' => 37.40,
                    'Porcentaje de población de 15 a 64 años' => 59.76,
                    'Porcentaje de población de 65 y más años' => 2.24,
                    'Porcentaje de población no especificada' => 0.60,
                    'Fecundidad promedio' => 1.68,
                    'Porcentaje de población nacida en otro estado' => 17.68,
                    'Porcentaje de población con discapacidad' => 1.86,
                    'Porcentaje de población de 15 y más analfabeta' => 0.03,
                    'Porcentaje de población de 18 y más' => 57.32,
                    'Porcentaje de población de 18 y más postbásicos' => 38.21
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.04,
                    'Grado Promedio de Escolaridad masculina' => 12.04,
                    'Grado Promedio de Escolaridad femenina' => 12.04
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.98,
                    'Población Económicamente Activa masculina' => 64.00,
                    'Población Económicamente Activa femenina' => 36.00,
                    'Población Ocupada' => 98.99,
                    'Población Ocupada masculina' => 64.14,
                    'Población Ocupada femenina' => 35.86,
                    'Población Desocupada' => 1.01,
                    'Derechohabiencia' => 79.67
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 149,
                    'Hogares Jefatura masculina' => 69.80,
                    'Hogares Jefatura femenina' => 30.20,
                    'Ocupación por Vivienda' => 3.30,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.66,
                    'Viviendas con Automóvil' => 73.83,
                    'Viviendas con Computadora' => 60.40,
                    'Viviendas con Celular' => 94.63,
                    'Viviendas con Internet' => 47.34
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 7,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 42.86,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 42.86,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 14.29
                )
            )
        );
    } // datos

} // Clase ElKiosco

?>

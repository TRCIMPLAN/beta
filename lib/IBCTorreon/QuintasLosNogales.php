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
 * Clase QuintasLosNogales
 */
class QuintasLosNogales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Quintas Los Nogales';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'quintas-los-nogales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas Los Nogales de Torreón.';
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
                    'Población total' => 330,
                    'Porcentaje de población masculina' => 50.01,
                    'Porcentaje de población femenina' => 49.99,
                    'Porcentaje de población de 0 a 14 años' => 30.96,
                    'Porcentaje de población de 15 a 64 años' => 65.07,
                    'Porcentaje de población de 65 y más años' => 3.96,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 1.96,
                    'Porcentaje de población nacida en otro estado' => 21.87,
                    'Porcentaje de población con discapacidad' => 0.58,
                    'Porcentaje de población de 15 y más analfabeta' => 0.02,
                    'Porcentaje de población de 18 y más' => 64.40,
                    'Porcentaje de población de 18 y más postbásicos' => 25.73
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.59,
                    'Grado Promedio de Escolaridad masculina' => 9.68,
                    'Grado Promedio de Escolaridad femenina' => 9.51
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.92,
                    'Población Económicamente Activa masculina' => 65.45,
                    'Población Económicamente Activa femenina' => 34.55,
                    'Población Ocupada' => 92.32,
                    'Población Ocupada masculina' => 65.86,
                    'Población Ocupada femenina' => 34.14,
                    'Población Desocupada' => 7.68,
                    'Derechohabiencia' => 72.34
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 104,
                    'Hogares Jefatura masculina' => 78.68,
                    'Hogares Jefatura femenina' => 21.32,
                    'Ocupación por Vivienda' => 3.17,
                    'Viviendas con Electricidad' => 99.68,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.67,
                    'Viviendas con Automóvil' => 45.46,
                    'Viviendas con Computadora' => 28.08,
                    'Viviendas con Celular' => 85.53,
                    'Viviendas con Internet' => 9.85
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 21,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 47.62,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 19.05,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 14.29,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 9.52,
                    'Quinta actividad nombre' => 'Construcción',
                    'Quinta actividad porcentaje' => 4.76
                )
            )
        );
    } // datos

} // Clase QuintasLosNogales

?>

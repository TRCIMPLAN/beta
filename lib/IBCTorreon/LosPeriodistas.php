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
 * Clase LosPeriodistas
 */
class LosPeriodistas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Los Periodistas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'los-periodistas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Los Periodistas de Torreón.';
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
                    'Población total' => 380,
                    'Porcentaje de población masculina' => 50.26,
                    'Porcentaje de población femenina' => 49.74,
                    'Porcentaje de población de 0 a 14 años' => 40.79,
                    'Porcentaje de población de 15 a 64 años' => 58.68,
                    'Porcentaje de población de 65 y más años' => 0.53,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.91,
                    'Porcentaje de población nacida en otro estado' => 17.32,
                    'Porcentaje de población con discapacidad' => 5.24
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.00,
                    'Grado Promedio de Escolaridad masculina' => 10.10,
                    'Grado Promedio de Escolaridad femenina' => 9.90
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.59,
                    'Población Económicamente Activa masculina' => 75.00,
                    'Población Económicamente Activa femenina' => 25.00,
                    'Población Ocupada' => 88.82,
                    'Población Ocupada masculina' => 73.91,
                    'Población Ocupada femenina' => 26.09,
                    'Población Desocupada' => 11.18,
                    'Derechohabiencia' => 84.21
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 96,
                    'Hogares Jefatura masculina' => 83.33,
                    'Hogares Jefatura femenina' => 16.67,
                    'Ocupación por Vivienda' => 3.96,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.96,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.96,
                    'Viviendas con Automóvil' => 50.51,
                    'Viviendas con Computadora' => 30.36,
                    'Viviendas con Celular' => 82.29,
                    'Viviendas con Internet' => 18.20
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 11,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 45.45,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 27.27,
                    'Tercera actividad nombre' => 'Manejo de Residuos',
                    'Tercera actividad porcentaje' => 9.09,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 9.09,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 9.09
                )
            )
        );
    } // datos

} // Clase LosPeriodistas

?>

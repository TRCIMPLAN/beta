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
 * Clase RecintosVillasUniversidad
 */
class RecintosVillasUniversidad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Recintos Villas Universidad';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:01';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'recintos-villas-universidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Recintos Villas Universidad de Torreón.';
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
                'Población total' => 485,
                'Porcentaje de población masculina' => 51.35,
                'Porcentaje de población femenina' => 48.65,
                'Porcentaje de población de 0 a 14 años' => 33.13,
                'Porcentaje de población de 15 a 64 años' => 65.18,
                'Porcentaje de población de 65 y más años' => 1.68,
                'Porcentaje de población no especificada' => 0.01,
                'Fecundidad promedio' => 1.27,
                'Porcentaje de población nacida en otro estado' => 17.31,
                'Porcentaje de población con discapacidad' => 2.52
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 13.28,
                'Grado Promedio de Escolaridad masculina' => 13.45,
                'Grado Promedio de Escolaridad femenina' => 13.11
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 69.26,
                'Población Económicamente Activa masculina' => 60.37,
                'Población Económicamente Activa femenina' => 39.63,
                'Población Ocupada' => 96.87,
                'Población Ocupada masculina' => 60.01,
                'Población Ocupada femenina' => 39.99,
                'Población Desocupada' => 3.13,
                'Derechohabiencia' => 85.90
            ),
            'Viviendas' => array(
                'Hogares' => 143,
                'Hogares Jefatura masculina' => 90.85,
                'Hogares Jefatura femenina' => 9.15,
                'Ocupación por Vivienda' => 3.39,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 99.81,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 99.12,
                'Viviendas con Automóvil' => 84.64,
                'Viviendas con Computadora' => 58.61,
                'Viviendas con Celular' => 96.15,
                'Viviendas con Internet' => 42.36
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 13,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 46.15,
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => 23.08,
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => 15.38,
                'Cuarta actividad nombre' => 'Comercio Mayoreo',
                'Cuarta actividad porcentaje' => 7.69,
                'Quinta actividad nombre' => 'Construcción',
                'Quinta actividad porcentaje' => 7.69
            )
        );
    } // datos

} // Clase RecintosVillasUniversidad

?>

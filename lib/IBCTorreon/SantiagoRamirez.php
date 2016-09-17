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
 * Clase SantiagoRamirez
 */
class SantiagoRamirez extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Santiago Ramirez';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:02';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'santiago-ramirez';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Santiago Ramirez de Torreón.';
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
                'Población total' => 1524,
                'Porcentaje de población masculina' => 50.79,
                'Porcentaje de población femenina' => 49.21,
                'Porcentaje de población de 0 a 14 años' => 32.09,
                'Porcentaje de población de 15 a 64 años' => 60.76,
                'Porcentaje de población de 65 y más años' => 6.36,
                'Porcentaje de población no especificada' => 0.79,
                'Fecundidad promedio' => 2.76,
                'Porcentaje de población nacida en otro estado' => 17.85,
                'Porcentaje de población con discapacidad' => 13.93
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 6.92,
                'Grado Promedio de Escolaridad masculina' => 6.78,
                'Grado Promedio de Escolaridad femenina' => 7.06
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 54.52,
                'Población Económicamente Activa masculina' => 69.62,
                'Población Económicamente Activa femenina' => 30.38,
                'Población Ocupada' => 82.67,
                'Población Ocupada masculina' => 67.89,
                'Población Ocupada femenina' => 32.11,
                'Población Desocupada' => 17.33,
                'Derechohabiencia' => 61.09
            ),
            'Viviendas' => array(
                'Hogares' => 364,
                'Hogares Jefatura masculina' => 79.67,
                'Hogares Jefatura femenina' => 20.33,
                'Ocupación por Vivienda' => 4.19,
                'Viviendas con Electricidad' => 98.90,
                'Viviendas con Agua' => 98.08,
                'Viviendas con Drenaje' => 98.35,
                'Viviendas con Televisión' => 95.60,
                'Viviendas con Automóvil' => 29.24,
                'Viviendas con Computadora' => 10.60,
                'Viviendas con Celular' => 60.06,
                'Viviendas con Internet' => 3.53
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 25,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 72.00,
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => 16.00,
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => 4.00,
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => 4.00,
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => 4.00
            )
        );
    } // datos

} // Clase SantiagoRamirez

?>

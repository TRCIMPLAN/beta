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
 * Clase HaciendaSantaMaria
 */
class HaciendaSantaMaria extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Hacienda Santa Maria';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:32:59';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'hacienda-santa-maria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Hacienda Santa Maria de Torreón.';
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
                'Población total' => 92,
                'Porcentaje de población masculina' => 48.81,
                'Porcentaje de población femenina' => 51.19,
                'Porcentaje de población de 0 a 14 años' => 35.28,
                'Porcentaje de población de 15 a 64 años' => 59.94,
                'Porcentaje de población de 65 y más años' => 4.70,
                'Porcentaje de población no especificada' => 0.08,
                'Fecundidad promedio' => 1.46,
                'Porcentaje de población nacida en otro estado' => 14.16,
                'Porcentaje de población con discapacidad' => 6.44
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 12.45,
                'Grado Promedio de Escolaridad masculina' => 12.70,
                'Grado Promedio de Escolaridad femenina' => 12.29
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 65.26,
                'Población Económicamente Activa masculina' => 55.87,
                'Población Económicamente Activa femenina' => 44.13,
                'Población Ocupada' => 98.96,
                'Población Ocupada masculina' => 55.63,
                'Población Ocupada femenina' => 44.37,
                'Población Desocupada' => 1.04,
                'Derechohabiencia' => 88.02
            ),
            'Viviendas' => array(
                'Hogares' => 28,
                'Hogares Jefatura masculina' => 72.36,
                'Hogares Jefatura femenina' => 27.64,
                'Ocupación por Vivienda' => 3.29,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 100.00,
                'Viviendas con Automóvil' => 58.72,
                'Viviendas con Computadora' => 34.09,
                'Viviendas con Celular' => 94.73,
                'Viviendas con Internet' => 2.30
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 6,
                'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Primer actividad porcentaje' => 33.33,
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => 33.33,
                'Tercera actividad nombre' => 'Comercio Menudeo',
                'Tercera actividad porcentaje' => 16.67,
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => 16.67
            )
        );
    } // datos

} // Clase HaciendaSantaMaria

?>

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
 * Clase LeandroRovirosaWade
 */
class LeandroRovirosaWade extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Leandro Rovirosa Wade';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'leandro-rovirosa-wade';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Leandro Rovirosa Wade de Torreón.';
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
                    'Población total' => 420,
                    'Porcentaje de población masculina' => 48.06,
                    'Porcentaje de población femenina' => 51.94,
                    'Porcentaje de población de 0 a 14 años' => 24.23,
                    'Porcentaje de población de 15 a 64 años' => 68.55,
                    'Porcentaje de población de 65 y más años' => 5.76,
                    'Porcentaje de población no especificada' => 1.46,
                    'Fecundidad promedio' => 1.77,
                    'Porcentaje de población nacida en otro estado' => 22.37,
                    'Porcentaje de población con discapacidad' => 5.91
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 13.15,
                    'Grado Promedio de Escolaridad masculina' => 13.53,
                    'Grado Promedio de Escolaridad femenina' => 12.79
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.24,
                    'Población Económicamente Activa masculina' => 64.08,
                    'Población Económicamente Activa femenina' => 35.92,
                    'Población Ocupada' => 97.06,
                    'Población Ocupada masculina' => 63.04,
                    'Población Ocupada femenina' => 36.96,
                    'Población Desocupada' => 2.94,
                    'Derechohabiencia' => 79.67
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 113,
                    'Hogares Jefatura masculina' => 81.99,
                    'Hogares Jefatura femenina' => 18.01,
                    'Ocupación por Vivienda' => 3.72,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.80,
                    'Viviendas con Drenaje' => 99.80,
                    'Viviendas con Televisión' => 99.81,
                    'Viviendas con Automóvil' => 88.91,
                    'Viviendas con Computadora' => 77.21,
                    'Viviendas con Celular' => 92.61,
                    'Viviendas con Internet' => 64.58
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 24,
                    'Primer actividad nombre' => 'Comercio Mayoreo',
                    'Primer actividad porcentaje' => 16.67,
                    'Segunda actividad nombre' => 'Inmobiliarios',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Comercio Menudeo',
                    'Cuarta actividad porcentaje' => 12.50,
                    'Quinta actividad nombre' => 'Construcción',
                    'Quinta actividad porcentaje' => 12.50
                )
            )
        );
    } // datos

} // Clase LeandroRovirosaWade

?>
